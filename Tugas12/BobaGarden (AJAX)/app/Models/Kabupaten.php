<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Kecamatan;
use app\Models\Provinsi;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';

    function kecamatan(){
        return $this->hasMany(Kecamatan::class, 'kabupaten_id');
    }

    function provinsi(){
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }
}
