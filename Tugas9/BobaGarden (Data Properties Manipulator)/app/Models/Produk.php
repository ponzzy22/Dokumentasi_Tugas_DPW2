<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Decimal;

class Produk extends Model
{

    protected $casts= [
        'created_at' => 'datetime',
        'harga' => 'decimal:2',
        'berat' => 'decimal:2',
    ];

    protected $table = 'produk';

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }

    function getTanggalProdukAttribute(){
        $tanggal =$this->created_at;
        return strftime("%d %b %Y", strtotime($this->created_at));
    }
    
}
