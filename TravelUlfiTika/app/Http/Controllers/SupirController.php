<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SupirModel;
use Validator;


class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SupirModel::all();
        return view('supir',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('/supir.tambah');
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
            'nama_supir' => 'required',
            'no_tlp' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect('/supir')->with('error', 'Ada kesalahan! Data tidak berhasil ditambahkan');
        }
        SupirModel::create([
            'id'=>$request->id,
            'nama_supir'=>$request->nama_supir,
            'no_tlp'=>$request->no_tlp
        ]);
        return redirect('/supir')->with('success', ' Data berhasil ditambahkan');;
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
        $supir = SupirModel::find($id);
        return view('supir.edit', ['supir' => $supir]);
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
            'nama_supir' => 'required',
            'no_tlp' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect('/supir')->with('error', 'Ada kesalahan! Data tidak berhasil ditambahkan');
        }

        $supir = SupirModel::find($id);
        $supir->id = $request->id;
        $supir->nama_supir = $request->nama_supir;
        $supir->no_tlp = $request->no_tlp;
        $supir->save();
        return redirect('/supir')->with('success', ' Data berhasil ditambahkan');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supir = SupirModel::find($id);
        if (!$supir) {
            return redirect('/supir')->with('error', 'Ada kesalahan! data tidak ditemukan');
        }

        $supir->delete();
        
        return redirect('/supir')->with('success', 'Data berhasil dihapus');
    }
}
