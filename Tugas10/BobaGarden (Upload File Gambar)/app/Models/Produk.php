<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Decimal;
use Illuminate\Support\Str;

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
    
    function handleUploadFoto(){
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destinaton = "images/produk";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destinaton, $filename);
            $this->foto = "app/".$url;
            $this->save();
        }
    }

    // function handleDelete(){
    //     $foto = $this->foto;
    //     $path = public_path($foto);
    //     if(file_exists($path)){
    //         unlink($path);
    //     }
    //     return true;
    // }
}
