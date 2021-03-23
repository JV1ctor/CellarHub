@extends('layout.site') <!-- chama template site.blade.php -->

@section('titulo','Cadastro de vinho &mdash; CellarHub')

@section('conteudo') <!-- section que leva até yield do site.blade.php -->

<br><br><br><br><h1 align="center">Tela cadastro de vinho</h1>

@if ( Request::is('*/edit'))
<form action="{{ url('vinhos/update') }}/{{ $vinho->id }}" method="post">
    @csrf
        <div>
            <label>Marca:</label>
            <input type="text" name="marca" value="{{ $vinho->marca }}">
        </div>
        <div>
            <label>Nacionalidade:</label>
            <input type="text" name="nacionalidade" value="{{ $vinho->nacionalidade }}">>
        </div>    
        <div> 
            <label>Vinhedo:</label>
            <input type="text" name="vinhedo" value="{{ $vinho->vinhedo }}">
        </div>
        <div>
            <label>Preço de venda:</label>
            <input type="number" min="0" step="any" name="preco_venda" value="{{ $vinho->preco_venda }}">
        </div>
        <div>
            <label>Preço de compra:</label>
            <input type="number" min="0" step="any" name="preco_compra" value="{{ $vinho->preco_compra }}">
        </div>
        <div>
            <label>Nota de degustação:</label>
            <input type="number" min="0" max="10" step="any" name="nota_degustacao" value="{{ $vinho->nota_degustacao }}">
        </div>
        <div>
            <label>Teor alcoólico:</label>
            <input type="number" min="0" step="any" name="teor_alcoolico" value="{{ $vinho->teor_alcoolico }}">
        </div>
        <div>
            <label>Ano:</label>
            <input type="number" name="ano" value="{{ $vinho->ano }}">
        </div>
        <div>
            <label>Código do armário:</label>
            <input type="number" name="armario_id" value="{{ $vinho->armario_id }}">
        </div>
        <div>
            <label>Código do usuário:</label>
            <input type="number" name="user_id" value="{{ $vinho->user_id }}">
        </div>
        <input type="submit" value="Atualizar">
    </form>

    @else

<form action="{{ url('vinhos/save') }}" method="POST">
    @csrf
        <div>
            <label>Marca:</label>
            <input type="text" name="marca">
        </div>
        <div>
            <label>Nacionalidade:</label>
            <input type="text" name="nacionalidade">
        </div>    
        <div> 
            <label>Vinhedo:</label>
            <input type="text" name="vinhedo">
        </div>
        <div>
            <label>Preço de venda:</label>
            <input type="number" min="0" step="any" name="preco_venda">
        </div>
        <div>
            <label>Preço de compra:</label>
            <input type="number" min="0" step="any" name="preco_compra">
        </div>
        <div>
            <label>Nota de degustação:</label>
            <input type="number" min="0" max="10" step="any" name="nota_degustacao">
        </div>
        <div>
            <label>Teor alcoólico:</label>
            <input type="number" min="0" step="any" name="teor_alcoolico">
        </div>
        <div>
            <label>Ano:</label>
            <input type="number" name="ano">
        </div>
        <div>
            <label>Código do armário:</label>
            <input type="number" name="armario_id">
        </div>
        <div>
            <label>Código do usuário:</label>
            <input type="number" name="user_id">
        </div>
        <input type="submit" value="Cadastrar">
    </form>
    @endif

@endsection