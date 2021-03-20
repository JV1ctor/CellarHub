<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VinhoController extends Controller
{
    public function vinhos(){
        return view('admin.telVinhos');
    }

    public function addVinho(){
        return view('admin.cadVinho');
    }
}
