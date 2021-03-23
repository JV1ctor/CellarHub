@extends('layout.site') <!-- chama template site.blade.php -->

@section('titulo','Porão {nome do porão} &mdash; CellarHub')

@section('conteudo') <!-- section que leva até yield do site.blade.php -->

<br><br><br><br><h1 align="center">Tela porão</h1>

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nomenclatura</th>
        <th scope="col">Usuário</th>
        <th scope="col">Editar</th>
        <th scope="col">Deletar</th>
      </tr>
    </thead>
    <tbody>
  @foreach( $poraos as $p )

      <tr>
        <th scope="row">{{ $p->id }}</th>
        <td>{{ $p->nomenclatura }}</td>
        <td>{{ $p->user_id }}</td>
        <td>
            <a href="poraos/{{ $p->id }}/edit" class="btn btn-info">Editar</button>
        </td>
        <td>
              <form action="poraos/delete/{{ $p->id }}" method="post">
              @csrf
              @method('delete')
              <button class="btn btn-danger">Deletar</button>
              </form>
        </td>
      </tr>
    
  @endforeach
<a href="{{ url('poraos/add') }}">Novo porão</a>

@endsection