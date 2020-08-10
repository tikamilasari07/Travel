@extends('layouts.admin')
  
@section('content')

<div class="content mt-3">

    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Edit Data Car</strong>
                            </div>
                            <div class="card-body">
                    
                    <form method="post" action="{{ url('/car/update/'.$car->id) }}">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered" border="1">
                        <tr>
                            <td>Merk Mobil</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="merk_mobil" value="{{ $car->merk_mobil }}">
                            </td>
                        </tr>
                        <tr>
                            <td>Plat Nomor</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="plat_nomor" value="{{ $car->plat_nomor}}">
                            </td>
                        </tr> 
                        <tr>
                            <td>Jumlah Kursi</td>
                            <td>:</td>
                            <td>
                            <input type="text" name="jumlah_kursi" value="{{ $car->jumlah_kursi}}">
                        </td>
                        </tr> 
                    </table>
                        <tr><td>
                                <button type="submit" name="submit" value="submit">Submit</button>
                            </td></tr>  
                    </form>
                    

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection

