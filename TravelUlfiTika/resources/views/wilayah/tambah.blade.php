@extends('layouts.admin')

@section('content')

<div class="content mt-3">

    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah Data</strong>
                            </div>
                            <div class="card-body">

                                <form action="/wilayah/store" method="post">
                                    {{csrf_field()}}
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <tr>
                                        <td>Kota </td>
                                        <td>:</td>
                                        <td>
                                        <select name="kota_id" id="kota_id" class="form-control">
                                            @foreach($kota as $value)
                                            <option value="{{ $value->id }}">{{ $value->nama_kota }}</option>
                                            @endforeach
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Wilayah</td>
                                        <td>:</td>
                                        <td>
                                        <input type="text" id="text-input" name="nama_wilayah" class="form-control">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td>
                                        <input type="text" id="text-input" name="deskripsi" class="form-control">
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

