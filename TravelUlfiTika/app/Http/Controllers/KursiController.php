<?php

namespace App\Http\Controllers;

use App\KursiModel;
use App\CarModel;
use Illuminate\Http\Request;

class KursiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $mobil = CarModel::all();
        $kursi = KursiModel::where(array())->with('relasi_car')->get();
        //dd($kursi);

        return view('kursi.index', ['kursi' => $kursi]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KursiModel  $kursiModel
     * @return \Illuminate\Http\Response
     */
    public function show(KursiModel $kursiModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KursiModel  $kursiModel
     * @return \Illuminate\Http\Response
     */
    public function edit(KursiModel $kursiModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KursiModel  $kursiModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KursiModel $kursiModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KursiModel  $kursiModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(KursiModel $kursiModel)
    {
        //
    }
}
