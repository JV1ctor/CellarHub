<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Redirect;

use App\Models\Corredor;

class CorredorController extends Controller
{
    public function corredors(){
        $corredors = Corredor::get();
        return view('admin.telCorredor', ['corredors'=> $corredors]);
    }

    public function add(){
        return view('admin.cadCorredor');
    }

    public function save( Request $request ){

        $corredor = new Corredor;
        $corredor = $corredor->create( $request->all() );
        return Redirect::to('/corredors');
    }

    public function edit( $id ){
        $corredor = Corredor::findOrFail( $id );
        return view('admin.cadCorredor', ['corredor' => $corredor]);
    }

    public function update( $id, Request $request ){
        $corredor = Corredor::findOrFail( $id );
        $corredor->update( $request->all() );
        return Redirect::to('/corredors');
    }

    public function delete( $id ){
        $corredor = Corredor::findOrFail( $id );
        $corredor ->delete();
        return Redirect::to('/corredors');
    }
}
