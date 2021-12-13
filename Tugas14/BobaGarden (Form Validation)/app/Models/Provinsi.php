<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Kabupaten;

class Provinsi extends Model
{
    protected $table = 'provinsi';

    function kabupaten(){
        return $this->hasMany(Kabupaten::class, 'provinsi_id');
    }
}
