<?php
  
namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table = 'car';
    protected $fillable = ['merk_mobil','plat_nomor','jumlah_kursi'];

}
