@extends('layout.site') <!-- chama template site.blade.php -->

@section('titulo','Cadastro de vinho &mdash; CellarHub')

@section('conteudo') <!-- section que leva até yield do site.blade.php -->

<br><br><br><br><h1 align="center">Tela cadastro de armário</h1>

    @if ( Request::is('*/edit'))
    <form action="{{ url('armarios/update') }}/{{ $armario->id }}" method="post">
    @csrf
        <div>
            <label>Quantidade de garrafas:</label>
            <input type="number" name="quant_garrafa" value="{{ $armario->quant_garrafa }}">
        </div>
        <div>
            <label>Nomenclatura:</label>
            <input type="text" name="nomenclatura" value="{{ $armario->nomenclatura }}">
        </div>
        <div>
            <label>Corredor:</label>
            <input type="number" name="corredor_id" value="{{ $armario->corredor_id }}">
        </div>    
        
        <input type="submit">
    </form>
    @else

    <form action="{{ url('armarios/save') }}" method="post">
        @csrf
        <div>
            <label>Quantidade de garrafas:</label>
            <input type="number" name="quant_garrafa">
        </div>
        <div>
            <label>Nomenclatura:</label>
            <input type="text" name="nomenclatura">
        </div>
        <div>
            <label>Corredor:</label>
            <input type="number" name="corredor_id">
        </div>    
            
        <input type="submit">
    </form>
    @endif

@endsection