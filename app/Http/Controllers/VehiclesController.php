<?php

namespace App\Http\Controllers;

use App\User;
use App\Vehicle;
use App\CategoryVehicle;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;
use App\Http\Requests\VehiclesRequest;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()) {
            // $query = Vehicle::all();
            $query = Vehicle::join('users', 'users.id', '=', 'vehicles.user_id')
                ->join('category_vehicles', 'category_vehicles.id', '=', 'vehicles.category_vehicles_id')
                ->select('vehicles.*', 'users.name as NamaUser', 'category_vehicles.transportaionType as KategoriKendaraan');
            return datatables()->of($query)
                ->addColumn('action', function($item) {
                    $return = '
                        <a class="btn btn-primary" href="' . route('vehicles.edit', $item->id) . '">
                            Ubah
                        </a>
                        <button class="btn btn-danger delete_modal" type="button" data-id="' . $item->id . '" data-toggle="modal" data-target="#exampleModal">
                            Hapus
                        </button>
                    ';
                    return $return;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make();
        }
        return view('admin.vehicle.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $categoryVehicles = CategoryVehicle::all();
        return view('admin.vehicle.create', compact('users', 'categoryVehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiclesRequest $request)
    {
        $data = $request->all();
        Vehicle::create($data);
        return redirect()->route('vehicles.index')->with('success', 'Data Kendaraan Baru Berhasil Ditambahkan');
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
        $users = User::all();
        $categoryVehicles = CategoryVehicle::all();
        $data = Vehicle::findOrFail($id);
        return view('admin.vehicle.edit', compact('data', 'users', 'categoryVehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehiclesRequest $request, $id)
    {
        $data = $request->all();
        $item = Vehicle::findOrFail($id);
        $item->update($data);
        return redirect()->route('vehicles.index')->with('success', 'Data Kendaraan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Vehicle::findOrFail($id);
        $data->delete();

        return response()->json($data);
    }
}
