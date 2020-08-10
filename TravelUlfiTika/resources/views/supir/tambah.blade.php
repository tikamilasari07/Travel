@extends('layouts.admin')

@section('content')

<div class="content mt-3">

    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah Data Supir</strong>
                            </div>
                            <div class="card-body">

                            <form action="/supir/store" method="post">
                              {{csrf_field()}}
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <tr>
                                    <td>Nama Supir</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" name="nama_supir">
                                    </td>
                                </tr>
                                <tr>
                                    <td>No Tlp</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" name="no_tlp">
                                    </td>
                                </tr>  
                            </table>
                                <tr>
                                    <td><button type="submit" name="submit" value="submit">Submit</button></td>
                                </tr> 
                            </form>

                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection

