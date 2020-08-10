<?php

namespace App\Http\Controllers;

use App\PemesananModel;
use Illuminate\Http\Request;
use App\JadwalModel;
use App\WilayahModel;
use Validator;
use DB;

class PemesananController extends Controller
{
    public function bayar(Request $request)
    {
        $harga = $request->harga;
        $jumlah_pemesanan = $request->jumlah_pemesanan;
        $total = $harga * $jumlah_pemesanan;
        return view('user.bayar',compact('total'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wilayah = WilayahModel::all();
        return view('user.user', ['wilayah' => $wilayah]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  //dd($request->all());
        //  $validator = Validator::make($request->all(), [
        //     'jadwal_id'=>'required',
        //     'nama_penumpang' => 'required',
        //     'alamat' => 'required',
        //     'email' => 'required',
        //     'no_tlp' => 'required'
        // ]);

        // if ($validator->fails()) {
        //     return redirect('/')->with('error', 'Ada kesalahan! Data tidak berhasil ditambahkan');
        // }

        // $data = new PemesananModel;
        // $data->jadwal_id = $request->jadwal_id;
        // $data->nama_pemesan = $request->nama_pemesan;
        // $data->nama_penumpang = implode(',', $request->nama_penumpang);
        // $data->alamat = $request->alamat;
        // $data->email = $request->email;
        // $data->no_tlp = $request->no_tlp;
        // $data->jumlah_pemesanan = $request->jumlah_pemesanan;
        // $data->save();

        // $harga = JadwalModel::select('harga')->where('id', $request->jadwal_id);
        // $total_harga = $harga*$request->jumlah_penumpang;

        // return redirect('/')->with('success', 'Pemesanan berhasil, harap cek email anda untuk konfirmasi pembayaran');        

        if($request->uang == $request->total_harga){
            echo "anda sudah membayar";
            
        }
        else if($request->uang > $request->total_harga){
            $tamp = $request->uang - $request->total_harga;
            echo "uang lebih".$tamp;
        }
        else if($request->uang < $request->total_harga){
            $tamp = $request->total_harga - $request->uang;
            echo "uang kurang".$tamp;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PemesananModel  $pemesananModel
     * @return \Illuminate\Http\Response
     */
    public function show(PemesananModel $pemesananModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PemesananModel  $pemesananModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PemesananModel $pemesananModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PemesananModel  $pemesananModel
     * @return \Illuminate\Http\Response
     */
    public function datadiri($id)
    {
        // $data_id = $id;
        // //$data = JadwalModel::where('dari' , $req->keberangkatan)->onWhere('tujuan', $req->tujuan)->get();
        // return view('user.datadiri', ['id_jadwal' => $data_id ]); 
        $cek = DB::table('jadwal')->where('id',$id)->get();
        foreach($cek as $data){
            $tamp = $data->harga_tiket;
        }
        return view('user/datadiri',compact('tamp'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PemesananModel  $pemesananModel
     * @return \Illuminate\Http\Response
     */
    public function searchjadwal(Request $req)
    {
        $data = JadwalModel::where('dari', $req->keberangkatan)->orWhere('tujuan', $req->tujuan)->get();
        
        //dd($data);
        return view('user.listjadwal', ['data' => $data]);
    }
}
