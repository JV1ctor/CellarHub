<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function entrar(Request $req){
        $dados = $req->all();

        if(Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])){
            return redirect() -> route('admin.dashboard');
        }

        return redirect() -> route('login');
    }

    public function sair(){
        Auth::logout();
        return redirect() -> route('home');
    }
}
