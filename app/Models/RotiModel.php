<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RotiModel extends Model
{
    use HasFactory;
    protected $table = "transaksi_jual";

    protected $fillable = [
    'id_jual',
    'id_customer',
    'nama_bahan',
    'harga_bahan',
    'jumlah_bahan'];
}
