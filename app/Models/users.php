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

    public function divisi(){
        return $this->hasOne(divisi::class,'idd','idd');
    }

    public function lokasi(){
        return $this->hasOne(lokasi::class,'idl','idl');
    }

    public function inventory(){

        return $this->hasOne(inventory::class);
    }
}