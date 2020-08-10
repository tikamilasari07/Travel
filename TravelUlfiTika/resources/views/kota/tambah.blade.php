@extends('layouts.admin')

@section('content')

<div class="content mt-3">

    <div class="col-sm-12">
    </div>
    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah Data Kota</strong>
                            </div>
                            <div class="card-body">

                            	<form action="/kota/store" method="post">
                                {{csrf_field()}}
                       
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <tr>
                                        <td>ID</td>
                                        <td>:</td>
                                        <td>
                                        <input type="text" name="id" disable='true'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Kota</td>
                                        <td>:</td>
                                        <td>
                                        <input type="text" name="nama_kota" disable='true'>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td>
                                        <input type="text" name="deskripsi">
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

