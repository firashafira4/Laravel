<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $fillable = [
        'nama_kamar',
        'tipe_kamar',
        'harga_permalam',
        'deskripsi'
    ];
}
