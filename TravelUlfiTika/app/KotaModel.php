<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KotaModel extends Model
{
    protected $table = 'kota';
    protected $fillable = ['nama_kota','photo','deskripsi'];
}
