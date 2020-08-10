<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['supir_id','car_id','tanggal','dari','tujuan','jam','harga_tiket'];

    public function getDataSupir()
    {
    	return $this->hasOne('App\SupirModel', 'id', 'supir_id');
    }

    public function getDataCar()
    {
    	return $this->hasOne('App\CarModel', 'id', 'car_id');
    }

    public function getDataWilayahAsal()
    {
        return $this->hasOne('App\WilayahModel','id','dari');
    }

    public function getDataWilayahTujuan()
    {
        return $this->hasOne('App\WilayahModel','id','tujuan');
    }
}
