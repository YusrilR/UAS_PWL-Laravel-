<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFormCustomer extends Model
{
    protected $table = "customer";

    protected $fillable = [
    'id_customer',
    'nama_customer',
    'notelp',
    'alamat'];
}