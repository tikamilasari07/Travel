<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupirModel extends Model
{
    protected $table = 'supir';
    protected $fillable = ['nama_supir','no_tlp'];
}
