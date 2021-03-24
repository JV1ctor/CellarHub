@extends('layout.site') <!-- chama template site.blade.php -->

@section('titulo','Porão {nome do armario} &mdash; CellarHub')

@section('conteudo') <!-- section que leva até yield do site.blade.php -->

<br><br><br><br><h1 align="center">Tela armário</h1>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Quant. de garrafas</th>
        <th scope="col">Nomenclatura</th>
        <th scope="col">Corredor</th>
      </tr>
    </thead>
    <tbody>
  @foreach( $armarios as $a )

      <tr>
        <th scope="row">{{ $a->id }}</th>
        <td>{{ $a->quant_garrafa }}</td>
        <td>{{ $a->nomenclatura }}</td>
        <td>{{ $a->corredor_id }}</td>
        <td>
            <a href="armarios/{{ $a->id }}/edit" class="btn btn-info">Editar</button>
        </td>
        <td>
              <form action="armarios/delete/{{ $a->id }}" method="post">
              @csrf
              @method('delete')
              <button class="btn btn-danger">Deletar</button>
              </form>
        </td>
      </tr>
    
  @endforeach
<a href="{{ url('armarios/add') }}">Novo armário</a>

@endsection