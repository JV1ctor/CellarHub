<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Redirect;

use App\Models\Armario;

class ArmarioController extends Controller
{
    public function armarios(){
        $armarios = Armario::get();
        return view('admin.telArmario', ['armarios'=> $armarios]);
    }

    public function add(){
        return view('admin.cadArmario');
    }

    public function save( Request $request ){

        $armario = new Armario;
        $armario = $armario->create( $request->all() );
        return Redirect::to('/armarios');
    }

    public function edit( $id ){
        $armario = Armario::findOrFail( $id );
        return view('admin.cadArmario', ['armario' => $armario]);
    }

    public function update( $id, Request $request ){
        $armario = Armario::findOrFail( $id );
        $armario->update( $request->all() );
        return Redirect::to('/armarios');
    }

    public function delete( $id ){
        $armario = Armario::findOrFail( $id );
        $armario ->delete();
        return Redirect::to('/armarios');
    }
}
