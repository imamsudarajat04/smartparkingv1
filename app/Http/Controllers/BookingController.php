<?php

namespace App\Http\Controllers;
use App\User;
use App\Place;
use App\Booking;
use App\Vehicle;
use App\Parking;
use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()) {
            // $query = Booking::with('place', 'vehicle', 'user')->get();
            $query = Booking::join('users', 'users.id', '=', 'bookings.user_id')
                        ->join('vehicles', 'vehicles.id', '=', 'bookings.vehicle_id')
                        ->join('places', 'places.id', '=', 'bookings.place_id')
                        ->select('bookings.*', 'users.name as NamaPemilik', 'vehicles.platNumber as NomorPlat', 'places.placeName as NamaWilayah');
            return datatables()->of($query)
                ->addColumn('action', function($item) {
                    $return = '
                        <a class="btn btn-primary" href="' . route('bookings.edit', $item->id) . '">
                            Ubah
                        </a>
                        <button class="btn btn-danger delete_modal" type="button" data-id="' . $item->id . '" data-toggle="modal" data-target="#exampleModal">
                            Hapus
                        </button>
                    ';
                    return $return;
                })
                ->editColumn('status', function($item) {
                    $return = '';
                    if($item->status == 0)
                    {
                        $return = '<span class="badge badge-success">Belum Dibooking</span>';
                    }
                    else if($item->status == 1)
                    {
                        $return = '<span class="badge badge-warning">Sudah Dibooking</span>';
                    }
                    else 
                    {
                        $return = '<span class="badge badge-primary">Sudah Ditempati</span>';
                    }
                    return $return;
                })
                ->rawColumns(['action', 'status'])
                ->addIndexColumn()
                ->make();
        }
        return view('admin.booking.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $places = Place::all();
        $vehicles = Vehicle::all();
        $parkings = Parking::all();
        return view('admin.booking.create', compact('users', 'places', 'vehicles', 'parkings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingRequest $request)
    {
        $booking = Booking::create($request->all());
        return redirect()->route('bookings.index')->with('success', 'Data berhasil ditambahkan');
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
        $data = Booking::findOrFail($id);
        $users = User::all();
        $places = Place::all();
        $vehicles = Vehicle::all();
        $parkings = Parking::all();
        return view('admin.booking.edit', compact('data', 'users', 'places', 'vehicles', 'parkings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingRequest $request, $id)
    {
        $data = Booking::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('bookings.index')->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Booking::findOrFail($id);
        $data->delete();

        return response()->json($data);
    }
}
