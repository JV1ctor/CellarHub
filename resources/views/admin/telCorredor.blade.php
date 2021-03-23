@extends('layout.site') <!-- chama template site.blade.php -->

@section('titulo','Porão {nome do corredor} &mdash; CellarHub')

@section('conteudo') <!-- section que leva até yield do site.blade.php -->

<br><br><br><br><h1 align="center">Tela corredor</h1>

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nomenclatura</th>
        <th scope="col">Porão</th>
        <th scope="col">Editar</th>
        <th scope="col">Deletar</th>
      </tr>
    </thead>
    <tbody>
  @foreach( $corredors as $c )

      <tr>
        <th scope="row">{{ $c->id }}</th>
        <td>{{ $c->nomenclatura }}</td>
        <td>{{ $c->porao_id }}</td>
        <td>
            <a href="corredors/{{ $c->id }}/edit" class="btn btn-info">Editar</button>
        </td>
        <td>
              <form action="corredors/delete/{{ $c->id }}" method="post">
              @csrf
              @method('delete')
              <button class="btn btn-danger">Deletar</button>
              </form>
        </td>
      </tr>
    
  @endforeach
<a href="{{ url('corredors/add') }}">Novo corredor</a>

@endsection