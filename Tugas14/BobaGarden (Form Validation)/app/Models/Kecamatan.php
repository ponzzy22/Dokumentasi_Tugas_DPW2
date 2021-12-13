<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Desa;
use app\Models\Kabupaten;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';

    function desa(){
        return $this->hasMany(Desa::class, 'desa_id');
    }
 
    function kabupaten(){
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id');
    }

}
