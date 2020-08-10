<?php

namespace App\Http\Controllers;

use App\JadwalModel;
use Illuminate\Http\Request;
use Validator;
use App\WilayahModel;
use App\SupirModel;
use App\CarModel;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = JadwalModel::where(array())->with('getDataSupir','getDataCar','getDataWilayahAsal', 'getDataWilayahTujuan')->get();
        
        return view('jadwal.jadwal',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wilayah=WilayahModel::all();
        $car=CarModel::all();
        $supir=SupirModel::all();
        return view('jadwal.tambah',['wilayah'=>$wilayah,'car'=>$car,'supir'=>$supir]);
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
            'supir_id' => 'required',
            'car_id' => 'required',
            'dari' => 'required',
            'tujuan' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'harga_tiket' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect('/jadwal')->with('error', 'Ada kesalahan! Data tidak berhasil ditambahkan');
        }

        JadwalModel::create([  
        'supir_id'=>$request->supir_id,
        'car_id'=>$request->car_id,
        'dari'=>$request->dari,
        'tujuan'=>$request->tujuan,
        'tanggal'=>$request->tanggal,
        'jam'=>$request->jam,
        'harga_tiket'=>$request->harga_tiket    
        ]);

        return redirect('/jadwal')->with('success', 'Data berhasil ditambahkan');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\JadwalModel  $jadwalModel
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalModel $jadwalModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JadwalModel  $jadwalModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = JadwalModel::find($id);
        $wilayah = WilayahModel::all();
        $supir = SupirModel::all();
        $car = CarModel::all();
        if (!$jadwal) {
        
        }
         return view('jadwal.edit', ['jadwal' => $jadwal, 'wilayah' =>$wilayah,'supir' =>$supir,
            'car' =>$car ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JadwalModel  $jadwalModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $validator = Validator::make($request->all(), [
            'supir_id' => 'required',
            'car_id' => 'required',
            'dari' => 'required',
            'tujuan' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'harga_tiket' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect('/jadwal')->with('error', 'Ada kesalahan! Data tidak berhasil ditambahkan');
        }
        $jadwal = JadwalModel::find($id);
        $jadwal->supir_id = $request->supir_id;
        $jadwal->car_id = $request->car_id;
        $jadwal->dari = $request->dari;
        $jadwal->tujuan= $request->tujuan;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->jam = $request->jam;
        $jadwal->harga_tiket = $request->harga_tiket;
        $jadwal->save();
        return redirect('/jadwal')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JadwalModel  $jadwalModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = JadwalModel::find($id);
        if (!$jadwal) {
            return redirect('/jadwal')->with('error', 'Ada kesalahan! Data tidak ditemukan');
        }

        $jadwal->delete();

        return redirect('/jadwal')->with('success', 'Data berhasil dihapus');

    }
}
