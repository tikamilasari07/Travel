@extends('layouts.admin')
@section('content')
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Data Kota</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('store.kota') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama kota</label></div>
                    <div class="col-12 col-md-9"><input required type="text" id="text-input" name="nama_kota" placeholder="kota" class="form-control"></div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Photo</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="photo" class="form-control-file"></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Deskripsi</label></div>
                    <div class="col-12 col-md-9"><textarea required name="deskripsi" id="textarea-input" rows="9" placeholder="Deskripsi..." class="form-control"></textarea></div>
                </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
            </form>
        </div>
        
    </div>
</div>
@endsection