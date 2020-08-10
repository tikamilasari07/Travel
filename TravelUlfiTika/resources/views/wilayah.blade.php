@extends('layouts.admin')
@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
            @if(Session::has('success'))
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Success</span>
                {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                </button>
            </div>
            @elseif(Session::has('error'))
            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                <span class="badge badge-pill badge-danger">Error</span>
                {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div>
            @endif
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Wilayah</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Kota Id</th>
                                    <th>Nama Wilayah</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $value)
                                <tr>
                                    <td>{{ $value->kota_id }}</td>
                                    <td>{{ $value->nama_wilayah }}</td>
                                    <td>{{ $value->deskripsi }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ url('/wilayah/edit/'.$value->id) }}">Edit</a>
                                        <form action="{{ url('/wilayah/delete/'.$value->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" class="btn btn-danger btn-sm" value="Delete"/>
                                        </form>  
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div>    
    
@endsection
