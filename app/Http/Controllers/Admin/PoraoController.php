<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoraoController extends Controller
{
    public function porao(){
        return view('admin.telPorao');
    }
}
