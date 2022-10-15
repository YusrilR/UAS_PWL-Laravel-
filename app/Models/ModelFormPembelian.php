<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFormPembelian extends Model
{
    protected $table = "transaksi_beli";

    protected $fillable = [
    'id_beli',
    'id_roti',
    'id_supplier',
    'nama_roti',
    'nama_supplier',
    'harga',
    'jumlah',
    'total_harga',
    'bayar'];
}
