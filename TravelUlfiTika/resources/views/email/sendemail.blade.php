<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@extends('layouts.app')

    @section('content')
	<h1>Send Email</h1>

	@if(\Session::has('alert-failed'))
		{{Session::get('alert-failed')}}
	@endif
	@if(\Session::has('alert-succes'))
		{{Session::get('alert-succes')}}
	@endif

		
	<div class="card-body card-block">
            <form action="http://127.0.0.1:8000" method="post" enctype="multipart/form-data" class="form-horizontal">
                <center><input type="hidden" name="_token" value="nGncbFLyFRzvnlXy9veMciAfFGbJQzJuqa6svxqU">
                <div class="row form-group">
                    <div class="col col-md-1"><label for="text-input" class=" form-control-label">Email :</label></div>
                    <div class="col-5 col-md-2"><input required="" type="emailt" id="email" name="email" placeholder="email" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1"><label for="text-input" class=" form-control-label">Nama :</label></div>
                    <div class="col-5 col-md-2"><input required="" type="text" id="nama" name="nama" placeholder="nama" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1"><label for="text-input" class=" form-control-label">Informasi :</label></div>
                    <div class="col-5 col-md-2"><input required="" type="text" id="Informasi" name="Informasi" placeholder="Informasi" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1"><label for="textarea-input" class=" form-control-label">Deskripsi</label></div>
                    <div class="col-5 col-md-2"><textarea required="" name="deskripsi" id="textarea-input" rows="9" placeholder="Deskripsi..." class="form-control">Anda Belum Melakukan Transaksi Pembayaran, silakan cek detail pembayaran terlebih dahulu <a href=""></a></textarea></div>
                </div></center>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
            </form>
        </div>
        @endsection
	<!--<form action="{{url('/send')}}" method="post">
		{{csrf_field()}}
		<table border="2">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email" id="email"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama"></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><input type="text" name="judul" id="judul"></td>
		</tr>
		<tr>
			<td>Pesan</td>
			<td><textarea  type="pesan" name="pesan"></textarea></td>
		</tr>
		</table>
		<tr>
			<button type="submit">Send Mail</button>
		</tr>
	</form>-->

</body>
</html>