<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $fillable = ['pemesanan_id','no_invoice','total_pembayaran','bukti_pembayaran'];
}
