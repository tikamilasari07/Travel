@extends('layouts.admin')

@section('content')

<div class="content mt-3">

    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Edit Data Kota</strong>
                            </div>
                            <div class="card-body">
                    
                    <form method="post" action="{{ url('/kota/update/'.$kota->id) }}">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered" border="1">
                        <tr>
                            <td>Nama Kota</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nama_kota" value="{{ $kota->nama_kota }}">
                            </td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="deskripsi" value="{{ $kota->deskripsi }}">
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

