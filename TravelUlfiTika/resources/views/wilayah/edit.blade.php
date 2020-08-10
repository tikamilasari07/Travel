@extends('layouts.admin')

@section('content')

<div class="content mt-3">

    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Ubah Data</strong>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('/wilayah/update/'.$wilayah->id) }}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <tr>
                                        <td>Kota</td>
                                        <td>:</td>
                                        <td>
                                        <select name="kota_id" id="kota_id" class="form-control">
                                            @foreach($kota as $value)
                                                @if($wilayah->kota_id == $value->id)
                                                <option selected value="{{ $value->id }}">{{ $value->nama_kota }}</option>
                                                @else
                                                <option value="{{ $value->id }}">{{ $value->nama_kota }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Wilayah</td>
                                        <td>:</td>
                                        <td>
                                        <input type="text" value="{{ $wilayah->nama_wilayah}}" name="nama_wilayah">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td>
                                        <input type="text" value="{{ $wilayah->deskripsi }}" name="deskripsi">
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

