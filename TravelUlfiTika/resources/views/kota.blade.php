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
                                <strong class="card-title">Data Kota</strong>
                                <tr>
                                <div class="row form-group">
                                <div class="col col-md-8" align="right">
                                    <div class="input-group">
                                        <div class="input-group-btn">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                            <button class="btn btn-primary">
                                                <i class="fa fa-search"></i> Search
                                            </button>

                                        </div>
                                        <input type="text" id="input1-group2" name="input1-group2" placeholder="Username" class="form-control"> &nbsp; &nbsp; &nbsp; &nbsp;
                                        <th><a href="{{URL('/kota/tambah')}}"> <button>Tambah</button></a></th>
                                    </div>
                                </div></tr>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
											<th> Id </th>
											<td> Nama Kota </td>
											<td> Deskripsi </td>
                                            <th colspan="5">Aksi</th>
										</tr>
										@foreach($data as $kota)
										<tr>
											<td>{{$kota->id}}</td>
											<td>{{$kota->nama_kota}}</td>
											<td>{{$kota->deskripsi}}</td>
                                            <th> <a href='/kota/edit/{{ $kota->id }}'><button>Edit</button></th>
                                            <th> <button>Hapus</button></th>
										</tr>
										@endforeach
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection

