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
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Kota</th>
                                    <th>Photo</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($kota as $value)
                                <tr>
                                    <td>{{ $value->nama_kota }}</td>
                                    <td class="center"><img src="{{ asset('images/kota/'.$value->photo)}}" width="50px" height="60px"></td>
                                    <td>{{ $value->deskripsi }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('editkota', $value->id) }}">Edit</a>
                                        <form action="{{ route('delete.kota', $value->id)}}" method="POST">
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