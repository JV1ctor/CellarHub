<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArmarioController extends Controller
{
    public function armario(){
        return view('admin.telArmario');
    }
}
