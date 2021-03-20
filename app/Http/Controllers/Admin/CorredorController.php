<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorredorController extends Controller
{
    public function corredor(){
        return view('admin.telCorredor');
    }
}
