@extends('layout.site') <!-- chama template site.blade.php -->

@section('titulo','Cadastro de vinho &mdash; CellarHub')

@section('conteudo') <!-- section que leva até yield do site.blade.php -->

<br><br><br><br><h1 align="center">Tela cadastro de porao</h1>

    @if ( Request::is('*/edit'))
    <form action="{{ url('poraos/update') }}/{{ $porao->id }}" method="POST">
    @csrf
        <div>
            <label>Nomenclatura:</label>
            <input type="text" name="nomenclatura" value="{{ $porao->nomenclatura }}">
        </div>
        <div>
            <label>Usuário:</label>
            <input type="number" name="user_id" value="{{ $porao->user_id }}">
        </div>    
        
        <input type="submit">
    </form>
    @else

    <form action="{{ url('poraos/save') }}" method="POST">
        @csrf
        <div>
            <label>Nomenclatura:</label>
            <input type="text" name="nomenclatura">
        </div>
        <div>
            <label>Usuário:</label>
            <input type="number" name="user_id">
        </div>    
            
        <input type="submit">
    </form>
    @endif

@endsection