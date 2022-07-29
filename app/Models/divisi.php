<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class divisi extends Model
{
    protected $table='divisi';
    protected $guarded;

    public function users(){
        return $this->belongsTo(users::class);
    }
}