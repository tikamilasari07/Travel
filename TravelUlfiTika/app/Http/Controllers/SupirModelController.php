<?php

namespace App\Http\Controllers;

use App\SupirModel;
use Illuminate\Http\Request;

class SupirModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CarModel::all();
        dd($data);
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
     * @param  \App\SupirModel  $supirModel
     * @return \Illuminate\Http\Response
     */
    public function show(SupirModel $supirModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SupirModel  $supirModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SupirModel $supirModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupirModel  $supirModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupirModel $supirModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupirModel  $supirModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupirModel $supirModel)
    {
        //
    }
}
