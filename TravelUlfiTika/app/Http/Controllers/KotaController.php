<?php

namespace App\Http\Controllers;
use Validator;
use App\KotaModel;
use Illuminate\Http\Request;
use File;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = KotaModel::select("*")->orderBy('id', 'asc')->get();
        return view('listkota', ['kota' => $kota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createkota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_kota' => 'required|max:65',
            'deskripsi' => 'required|max:255',
            'photo' => 'file|mimetypes:image/jpeg,image/png,image/jpg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->route('kota')->with('error', 'Ada kesalahan! Data tidak berhasil ditambahkan');
        }
        
        $kota = new KotaModel;
        $file = $this->uploadImage($request->photo, 'images/kota');
        $kota->photo = $file;
        $kota->nama_kota = $request->nama_kota;
        $kota->deskripsi = $request->deskripsi;
        $kota->save();

        
        return redirect()->route('kota')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KotaModel  $kotaModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kota = KotaModel::where('id', $id)->first();
        if (!$kota) {
            return redirect()->route('kota')->with('error', 'Ada kesalahan! Data tidak ditemukan');
        }
        //return view('viewkota', ['kota' => $kota]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KotaModel  $kotaModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kota = KotaModel::where('id', $id)->first();
        //dd($kota);
        if (!$kota) {
            return redirect()->route('kota')->with('error', 'Ada kesalahan! Data tidak ditemukan');
        }
        return view('editkota', ['kota' => $kota]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KotaModel  $kotaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_kota' => 'required|max:65',
            'deskripsi' => 'required|max:255',
            'photo' => 'file|mimetypes:image/jpeg,image/png,image/jpg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->route('kota')->with('error', 'Ada kesalahan! Data tidak berhasil diubah');
        }

        $kota = KotaModel::where('id', $id)->first();
        if (!$kota) {
            return redirect()->route('kota')->with('error', 'Ada kesalahan! Data tidak ditemukan');
        }

        if ($request->photo && $request->photo != NULL){
            $itemImage = public_path("images/kota/{$kota->photo}");
            if (File::exists($itemImage)) {
                unlink($itemImage);
            }
            $file = $this->uploadImage($request->photo, 'images/kota');
            $kota->photo = $file;
        }
        $kota->nama_kota = $request->nama_kota;
        $kota->deskripsi = $request->deskripsi;
        $kota->save();

        return redirect()->route('kota')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KotaModel  $kotaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kota = KotaModel::where('id', $id)->first();
        if (!$kota) {
            return redirect()->route('kota')->with('error', 'Ada kesalahan! Data tidak ditemukan');
        }
        if ($kota->photo && $kota->photo != NULL){
            $itemImage = public_path("images/kota/{$kota->photo}");
            if (File::exists($itemImage)) {
                unlink($itemImage);
            }
        }
        $kota->delete();
        return redirect()->route('kota')->with('success', 'Data berhasil dihapus');
    }

    function uploadImage($file,$path)
    {   
        $image = $file;
        $fileName = str_random(30).'.'.$image->guessClientExtension();
        $image->move($path, $fileName);
        
        return $fileName;
    }
}
