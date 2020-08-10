<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarModel;
use Validator;
  
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CarModel::all();
        return view('car',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'merk_mobil' => 'required|max:65',
            'plat_nomor' => 'required|max:255',
            'jumlah_kursi' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/car')->with('error', 'Ada kesalahan! Data tidak berhasil ditambahkan');
        }

        CarModel::create([
            'merk_mobil'=>$request->merk_mobil,
            'plat_nomor'=>$request->plat_nomor,
            'jumlah_kursi'=>$request->jumlah_kursi
        ]);

        return redirect('/car')->with('success', 'Data berhasil ditambahkan');
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
        $car = CarModel::find($id);
        if (!$car) {
            return redirect('/car')->with('error', 'Ada kesalahan! Data tidak ditemukan');
        }

        return view('car.edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'merk_mobil' => 'required|max:65',
            'plat_nomor' => 'required|max:255',
            'jumlah_kursi' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/car')->with('error', 'Ada kesalahan! Data tidak berhasil ditambahkan');
        }

        $car = CarModel::find($id);
        $car->merk_mobil = $request->merk_mobil;
        $car->plat_nomor = $request->plat_nomor;
        $car->jumlah_kursi = $request->jumlah_kursi;
        $car->save();
        return redirect('/car')->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = CarModel::find($id);
        if (!$car) {
            return redirect('/car')->with('error', 'Ada kesalahan! Data tidak ditemukan');
        }

        $car->delete();

        return redirect('/car')->with('success', 'Data berhasil dihapus');

    }
}
