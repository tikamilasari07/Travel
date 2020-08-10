@extends('layouts.admin')
@section('content')
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Ubah Data Jadwal</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ url('/jadwal/update/'.$jadwal->id) }}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                {{method_field('PUT')}}
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Supir</label></div>
                    <div class="col-12 col-md-9">
                        <select name="supir_id" id="supir_id" class="form-control">
                            <option value="0" disabled>Pilih Supir</option>
                            @foreach ($supir as $data)
                                @if($jadwal->supir_id == $data->id)
                                <option value="{{ $data->id }}" selected>{{$data->nama_supir}}</option>
                                @else
                                <option value="{{ $data->id }}">{{$data->nama_supir}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Mobil</label></div>
                    <div class="col-12 col-md-9">
                        <select name="car_id" id="car_id" class="form-control">
                            <option value="0" disabled>Pilih Mobil</option>
                              @foreach ($car as $data)
                              @if($jadwal->car_id == $data->id)
                            <option value="{{ $data->id }}" selected>{{$data->merk_mobil}}</option>
                                @else
                                <option value="{{ $data->id }}">{{$data->merk_mobil}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Dari</label></div>
                    <div class="col-12 col-md-9">
                        <select name="dari" id="dari" class="form-control">
                            <option value="0" disabled>Pilih Wilayah</option>
                               @foreach ($wilayah as $data)
                               @if($jadwal->dari == $data->id)
                            <option value="{{ $data->id }}" selected>{{$data->nama_wilayah}}</option>
                                @else
                            <option value="{{ $data->id }}">{{$data->nama_wilayah}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Tujuan</label></div>
                    <div class="col-12 col-md-9">
                        <select name="tujuan" id="tujuan" class="form-control">
                            <option value="0" disabled>Pilih Tujuan</option>
                             @foreach ($wilayah as $data)
                             @if($jadwal->tujuan == $data->id)
                            <option value="{{ $data->id }}" selected>{{$data->nama_wilayah}}</option>
                            @else
                            <option value="{{ $data->id }}">{{$data->nama_wilayah}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal</label></div>
                    <div class="col-12 col-md-9"><input value="{{ $jadwal->tanggal}}" required type="date" id="text-input" name="tanggal" placeholder="tanggal" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jam</label></div>
                    <div class="col-12 col-md-9"><input value="{{ $jadwal->jam }}" required type="time" id="text-input" name="jam" placeholder="jam" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Harga Tiket</label></div>
                    <div class="col-12 col-md-9"><input value="{{ $jadwal->harga_tiket }}" required type="number" id="text-input" name="harga_tiket" placeholder="harga_tiket" class="form-control"></div>
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