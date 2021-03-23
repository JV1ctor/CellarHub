<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Redirect;

use App\Models\Vinho;

class VinhoController extends Controller
{
    public function vinhos(){
        $vinhos = Vinho::get();
        return view('admin.telVinhos', ['vinhos'=> $vinhos]);
    }

    public function add(){
        return view('admin.cadVinho');
    }

    public function save( Request $request ){
        $vinho = new Vinho;
        $vinho = $vinho->create( $request->all() );
        return Redirect::to('/vinhos');
    }

    public function edit( $id ){
        $vinho = Vinho::findOrFail ( $id );
        return view('admin.cadVinho', ['vinho' => $vinho]);
    }

    public function update( $id, Request $request ){
        $vinho = Vinho::findOrFail( $id );
        $vinho->update( $request->all() );
        return Redirect::to('/vinhos');
    }

    public function delete( $id ){
        $vinho = Vinho::findOrFail( $id );
        $vinho->delete();
        return Redirect::to('/vinhos');
    }
}
