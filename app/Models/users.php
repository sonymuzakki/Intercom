<?php

namespace App\Models;


use App\Models\divisi;
use App\Models\lokasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class users extends Model
{
    protected $table ='users_itc';
    protected $guarded;

    // public function divisi(){
    //     return $this->hasOne(divisi::class,'id','id');
    // }

    public function divisi(){
        return $this->hasOne(divisi::class,'id','id');
    }
    // public function lokasi(){
    //     return $this->hasOne(lokasi::class,'idl','id');
    // }

    public function lokasi(){
        return $this->hasOne(lokasi::class,'idl','id');
    }
}