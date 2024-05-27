<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parents',
        'gender',
        'lahir',
        'jenjang',
        'alamat',
        'telepon',
        'berkas',
    ];

    protected $table = 'daftar';
}
