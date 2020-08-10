<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KursiModel extends Model
{
    protected $table = 'kursi';
    protected $fillable = ['car_id','nomor_kursi','status'];

    public function relasi_car()
    {
    	return $this->hasMany('App\CarModel', 'id' ,'car_id');
    }
}
