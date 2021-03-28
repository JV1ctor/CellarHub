<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Redirect;

use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function save( Request $request ){
        $user = new User;
        $user = $user->create( $request->all() );
        return Redirect::to('/login');
    }
}
