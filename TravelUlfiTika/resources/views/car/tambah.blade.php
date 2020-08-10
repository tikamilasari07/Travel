@extends('layouts.admin')
  
@section('content')

<div class="content mt-3">

    <!-- <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div> -->
    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah Data Mobil</strong>
                            </div>
                            <div class="card-body">
                            	<form action="/car/store" method="post">
                                {{csrf_field()}}
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <tr>
                                        <td>Merk Mobil</td>
                                        <td>:</td>
                                        <td>
                                        <input type="text" name="merk_mobil">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Plat Nomor</td>
                                        <td>:</td>
                                        <td>
                                        <input type="text" name="plat_nomor">
                                    </td>
                                    </tr>  
                                    <tr>
                                        <td>Jumlah Kursi</td>
                                        <td>:</td>
                                        <td>
                                        <input type="text" name="jumlah_kursi">
                                    </td>
                                    </tr>
                                </table>
                                <button type="submit" name="submit" value="submit">Submit</button>
                            </form>

                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection

