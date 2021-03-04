<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Vinho;
use App\Models\Corredor;

class Armario extends Model
{
    use HasFactory;

    public function vinho(){
        return $this->hasMany(Vinho::class);
    }

    public function corredor(){
        return $this->bellongsTo(Corredor::class);
    }
}
