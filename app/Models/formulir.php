<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formulir extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'nama_lengkap',
        'alamat_ktp',
        'alamat_lengkap',
        'alamat_ktp',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'no_telepon',
        'no_hp',
        'email',
        'kewarganegaraan',
        'tenggal lahir',
        'tempat_lahir',
        'kabupaten_lahir',
        'provinsi_lahir',
        'jenis_kelamin',
        'status_menikah',
        'agama',
    ];
}
