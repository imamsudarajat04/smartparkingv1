<?php

namespace App\Http\Controllers;

use App\Place;
use App\Parking;
use App\CategoryVehicle;
use Illuminate\Http\Request;
use App\Http\Requests\PlacesRequest;
use Yajra\DataTables\Contracts\DataTable;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()) {
            // $query = Place::join('parkings', 'parkings.id', '=', 'places.parking_id')
            //     ->join('category_vehicles', 'category_vehicles.id', '=', 'parkings.category_vehicle_id')
            //     ->select('places.*', 'parkings.parkingStock as parkingStock', 'category_vehicles.transportaionType as JenisKendaraan');
            $query = Place::all();
            return datatables()->of($query)
                ->addColumn('action', function($item) {
                    $return = '
                        <a class="btn btn-primary" href="' . route('places.edit', $item->id) . '">
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
        return view('admin.places.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.places.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlacesRequest $request)
    {
        $data = $request->all();
        
        $users = Place::create($data);
        return redirect()->route('places.index')->with('success', 'Wilayah Baru Berhasil Ditambahkan');
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
        $data = Place::findOrFail($id);
        return view('admin.places.edit', compact('data'));
    }   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlacesRequest $request, $id)
    {
        $data = Place::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('places.index')->with('success', 'Wilayah Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Place::findOrFail($id);
        $data->delete();

        return response()->json($data);
    }
}
