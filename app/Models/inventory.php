<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    protected $table ='inventory';
    protected $guarded;

    public function users()
    {
        return $this->hasOne(users::class, 'id_users');
    }
}