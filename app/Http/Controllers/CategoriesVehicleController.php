<?php

namespace App\Http\Controllers;

use App\CategoryVehicle;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriesVehicleRequest;
use Yajra\DataTables\Contracts\DataTable;

class CategoriesVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()) {
            $query = CategoryVehicle::all();
            return datatables()->of($query)
                ->addColumn('action', function($item) {
                    $return = '
                        <a class="btn btn-primary" href="' . route('categories-vehicle.edit', $item->id) . '">
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
        return view('admin.categoriesvehicle.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoriesvehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesVehicleRequest $request)
    {
        $data = $request->all();
        
        $users = CategoryVehicle::create($data);
        return redirect()->route('categories-vehicle.index')->with('success', 'Kategori Kendaraan Berhasil Ditambahkan');
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
        $data = CategoryVehicle::findOrFail($id);
        return view('admin.categoriesvehicle.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesVehicleRequest $request, $id)
    {
        $data = $request->all();
        $item = CategoryVehicle::findOrFail($id);
        $item->update($data);
        return redirect()->route('categories-vehicle.index')->with('success', 'Kategori Kendaraan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CategoryVehicle::findOrFail($id);
        $data->delete();

        return response()->json($data);
    }
}
