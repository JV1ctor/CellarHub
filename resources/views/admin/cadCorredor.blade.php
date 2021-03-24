@extends('layout.site') <!-- chama template site.blade.php -->

@section('titulo','Cadastro de vinho &mdash; CellarHub')

@section('conteudo') <!-- section que leva até yield do site.blade.php -->

<br><br><br><br><h1 align="center">Tela cadastro de corredor</h1>

    @if ( Request::is('*/edit'))
    <form action="{{ url('corredors/update') }}/{{ $corredor->id }}" method="post">
    @csrf
        <div>
            <label>Nomenclatura:</label>
            <input type="text" name="nomenclatura" value="{{ $corredor->nomenclatura }}">
        </div>
        <div>
            <label>Porão:</label>
            <input type="number" name="porao_id" value="{{ $corredor->porao_id }}">
        </div>    
        
        <input type="submit">
    </form>
    @else

    <form action="{{ url('corredors/save') }}" method="post">
        @csrf
        <div>
            <label>Nomenclatura:</label>
            <input type="text" name="nomenclatura">
        </div>
        <div>
            <label>Porão:</label>
            <input type="number" name="porao_id">
        </div>    
            
        <input type="submit">
    </form>
    @endif

@endsection