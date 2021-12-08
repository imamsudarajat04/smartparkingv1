<?php

namespace App\Http\Controllers;

use App\User;
use App\Payment;
use App\Booking;
use Illuminate\Http\Request;
use App\Http\Requests\PaymentsRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Contracts\DataTable;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()) {
            $query = Payment::join('bookings', 'payments.booking_id', '=', 'bookings.id')
                ->join('users', 'users.id', '=', 'bookings.user_id')
                ->select('payments.*', 'bookings.id as KodeBooking', 'users.name as NamaPemesan');
            return datatables()->of($query)
                ->addColumn('action', function($item) {
                    $return = '
                        <a class="btn btn-primary" href="' . route('payments.edit', $item->id) . '">
                            Ubah
                        </a>
                        <button class="btn btn-danger delete_modal" type="button" data-id="' . $item->id . '" data-toggle="modal" data-target="#exampleModal">
                            Hapus
                        </button>
                    ';
                    return $return;
                })
                ->editColumn('transferPhoto', function($item) {
                    //$image = Storage::exists('public/' . $item->transferPhoto) && $item->transferPhoto ? Storage::url($item->transferPhoto) : asset('assets/img/imagePlaceholder.png');
                    // return '
                    //     <div class="image-wrapper">
                    //         <div class="image" style="background-image: url('. $image .')"></div>
                    //     </div>
                    // ';
                    return '
                        <div class="image-wrapper">
                            <img src="' . asset('storage/' . $item->transferPhoto) . '" alt="' . $item->id . '" class="img-thumbnail">
                        </div>
                    ';
                })
                ->editColumn('status', function($item) {
                    $return = '';
                    if($item->status == 'pending')
                    {
                        $return = '<span class="badge badge-warning">Belum Dibayar</span>';
                    }
                    else if($item->status == 'paid')
                    {
                        $return = '<span class="badge badge-success">Sudah Dibayar</span>';
                    }
                    else 
                    {
                        $return = '<span class="badge badge-danger">Cancel</span>';
                    }
                    return $return;
                })
                ->rawColumns(['action', 'status', 'transferPhoto'])
                ->addIndexColumn()
                ->make();
        }
        return view('admin.payments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $bookings = Booking::all();
        return view('admin.payments.create', compact('users', 'bookings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentsRequest $request)
    {
        $data = $request->all();
        $data['transferPhoto'] = $request->file('transferPhoto')->store('img', 'public');

        Payment::create($data);
        return redirect()->route('payments.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Payment::findOrFail($id);
        $users = User::all();
        $bookings = Booking::all();
        return view('admin.payments.edit', compact('data', 'users', 'bookings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentsRequest $request, $id)
    {
        $data = $request->all();
        $item = Payment::findOrFail($id);
        if ($request->hasFile('transferPhoto')) {
            Storage::delete('public/' . $item->cover);

            $data['transferPhoto'] = $request->file('transferPhoto')->store('img', 'public');
        }

        $item->update($data);

        return redirect()->route('payments.index')->with('success', 'Data Pembayaran Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Payment::findOrFail($id);
        Storage::delete('public/' . $data->cover);

        $result = $data->delete();

        return response()->json($result);
    }
}
