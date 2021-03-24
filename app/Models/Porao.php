<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Corredor;
use App\Models\User;

class Porao extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomenclatura',
        'user_id',
    ];

    public function corredor(){
        return $this->hasMany(Corredor::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
