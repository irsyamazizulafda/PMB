<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KabupatenKota extends Model
{
    use HasFactory;
    protected $table = 'kabupaten_kota';
    protected $fillable = [
        'id', 'id_provinsi','name','created_at','update_at',
    ] ;
    // Di dalam model User
    public function formulirs()
    {
        return $this->hasMany(Formulir::class);
    }

}
