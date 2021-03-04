<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Armario;

class Vinho extends Model
{
    use HasFactory;

    public function user(){
        return $this->bellongsTo(Vinho::class);
    }

    public function armario(){
        return $this->bellongsTo(Corredor::class);
    }
}
