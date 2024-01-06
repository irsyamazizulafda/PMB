<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'nama_lengkap',
        'nik',
        'alamat_ktp',
        'alamat_lengkap',
        'provinsi',
        'kabupaten',
        'no_telepon',
        'no_hp',
        'email',
        'kewarganegaraan',
        'tanggal_lahir',
        'tempat_lahir',
        'provinsi_lahir',
        'kabupaten_lahir',
        'jenis_kelamin',
        'status_menikah',
        'agama',
    ];
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi');
    }

    public function kabupatenKota()
    {
        return $this->belongsTo(KabupatenKota::class, 'kabupaten');
    }

}
