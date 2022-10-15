<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFormPenjualan extends Model
{
	protected $table = "transaksi_jual";

    protected $fillable = [
    'id_jual',
    'id_roti',
    'id_customer',
    'nama_roti',
    'nama_customer',
    'harga',
    'jumlah',
    'total_harga',
    'bayar'];
}
