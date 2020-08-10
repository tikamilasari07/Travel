<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\WilayahModel;
use App\KotaModel;
use Validator;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = WilayahModel::all();
        return view('wilayah',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = KotaModel::all();
        return view('wilayah.tambah', ['kota' => $kota]);
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
            'nama_wilayah' => 'required|max:65',
            'kota_id' => 'required',
            'deskripsi' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/wilayah')->with('error', 'Ada kesalahan! Data tidak berhasil ditambahkan');
        }

         WilayahModel::create([
            'kota_id'=>$request->kota_id,
            'nama_wilayah'=>$request->nama_wilayah,
            'deskripsi'=>$request->deskripsi
        ]);

        return redirect('/wilayah')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WilayahModel  $wilayahModel
     * @return \Illuminate\Http\Response
     */
    public function show(WilayahModel $wilayahModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WilayahModel  $wilayahModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wilayah = WilayahModel::find($id);
        $kota = KotaModel::all();
        if (!$wilayah) {
        
        }
        return view('wilayah.edit', ['wilayah' => $wilayah, 'kota' =>$kota ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WilayahModel  $wilayahModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_wilayah' => 'required|max:65',
            'kota_id' => 'required',
            'deskripsi' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/wilayah')->with('error', 'Ada kesalahan! Data tidak berhasil ditambahkan');
        }
        $wilayah = WilayahModel::find($id);
        $wilayah->kota_id = $request->kota_id;
        $wilayah->nama_wilayah = $request->nama_wilayah;
        $wilayah->deskripsi = $request->deskripsi;
        $wilayah->save();
        return redirect('/wilayah')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WilayahModel  $wilayahModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $wilayah = WilayahModel::find($id);
        if (!$wilayah) {
            return redirect('/wilayah')->with('error', 'Ada kesalahan! Data tidak ditemukan');
        }

        $wilayah->delete();

        return redirect('/wilayah')->with('success', 'Data berhasil dihapus');

    }
}
