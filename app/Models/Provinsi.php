<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'provinsi';
    protected $fillable = [
        'id','name','created_at','update_at',
    ];
    public function formulirs()
    {
        return $this->hasMany(Formulir::class);
    }
}
