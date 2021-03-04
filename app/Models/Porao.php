<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Corredor;

class Porao extends Model
{
    use HasFactory;

    public function corredor(){
        return $this->hasMany(Corredor::class);
    }
}
