<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemesananModel extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = ['jadwal_id','no_invoice','nama_pemesan','alamat','no_tlp','email','jumlah_pemesanan','nama_penumpang','status_pemesanan'];
}
