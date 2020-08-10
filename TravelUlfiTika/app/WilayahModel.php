<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WilayahModel extends Model
{
    protected $table = 'wilayah';
    protected $fillable = ['kota_id','nama_wilayah','deskripsi'];
}
