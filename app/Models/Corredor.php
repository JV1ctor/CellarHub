<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Porao;
use App\Models\Armario;

class Corredor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomenclatura',
        'porao_id',
    ];

    public function porao(){
        return $this->bellongsTo(Porao::class);
    }

    public function armario(){
        return $this->hasMany(Armario::class);
    }
}
