<?php

namespace App\Http\Controllers;

use App\Place;
use App\Parking;
use App\CategoryVehicle;
use Illuminate\Http\Request;
use App\Http\Requests\ParkingRequest;
use Yajra\DataTables\Contracts\DataTable;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()) {
            $query = Parking::join('places', 'parkings.place_id', '=', 'places.id')
                ->join('category_vehicles', 'category_vehicles.id', '=', 'parkings.category_vehicle_id')
                ->select('parkings.*', 'category_vehicles.transportaionType as KategoriKendaraan', 'places.placeName as Wilayah');
            return datatables()->of($query)
                ->addColumn('action', function($item) {
                    $return = '
                        <a class="btn btn-primary" href="' . route('parkings.edit', $item->id) . '">
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
        return view('admin.parking.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $places = Place::all();
        $categoryVehicles = CategoryVehicle::all();
        return view('admin.parking.create', compact('places', 'categoryVehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParkingRequest $request)
    {
        $data = $request->all();
        Parking::create($data);
        return redirect()->route('parkings.index')->with('success', 'Data Parkir Baru Berhasil Ditambahkan');
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
        $data = Parking::findOrFail($id);
        $places = Place::all();
        $categoryVehicles = CategoryVehicle::all();
        return view('admin.parking.edit', compact('data', 'places', 'categoryVehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParkingRequest $request, $id)
    {
        $data = $request->all();
        Parking::findOrFail($id)->update($data);
        return redirect()->route('parkings.index')->with('success', 'Data Parkir Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Parking::findOrFail($id);
        $data->delete();

        return response()->json($data);
    }
}
