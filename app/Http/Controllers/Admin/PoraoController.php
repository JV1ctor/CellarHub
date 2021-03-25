<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Redirect;

use App\Models\Porao;

class PoraoController extends Controller
{
    public function poraos(){
        $poraos = Porao::get();
        return view('admin.telPorao', ['poraos' => $poraos]);
    }

    public function add(){
        return view('admin.cadPorao');
    }

    public function save( Request $request ){
        $porao = new Porao;
        $porao = $porao->create( $request->all() );
        return Redirect::to('/poraos');
    }

    public function edit( $id ){
        $porao = Porao::findOrFail ( $id );
        return view('admin.cadPorao', ['porao' => $porao]);
    }

    public function update( $id, Request $request ){
        $porao = Porao::findOrFail( $id );
        $porao->update( $request->all() );
        return Redirect::to('/poraos');
    }

    public function delete( $id ){
        $porao = Porao::findOrFail( $id );
        $porao->delete();
        return Redirect::to('/poraos');
    }
}
