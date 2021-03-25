@extends('layout.site') <!-- chama template site.blade.php -->

@section('titulo','Vinhos &mdash; CellarHub')

@section('conteudo') <!-- section que leva até yield do site.blade.php -->

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Marca</th>
            <th scope="col">Nacionalidade</th>
            <th scope="col">Vinhedo</th>
            <th scope="col">P. de venda</th>
            <th scope="col">P. de compra</th>
            <th scope="col">Nota de degustação</th>
            <th scope="col">Teor Alcoólico</th>
            <th scope="col">Ano</th>
            <th scope="col">Armário</th>
            <th scope="col">Usuário</th>
            <th scope="col">Editar</th>
            <th scope="col">Deletar</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $vinhos as $v )

            <tr>
              <td>{{ $v->id }}</td>
              <td>{{ $v->marca }}</td>
              <td>{{ $v->nacionalidade }}</td>
              <td>{{ $v->vinhedo }}</td>
              <td>{{ $v->preco_venda }}</td>
              <td>{{ $v->preco_compra }}</td>
              <td>{{ $v->nota_degustacao }}</td>
              <td>{{ $v->teor_alcoolico }}</td>
              <td>{{ $v->ano }}</td>
              <td>{{ $v->armario_id }}</td>
              <td>{{ $v->user_id }}</td>
              <td>
                  <a href="vinhos/{{ $v->id }}/edit" class="btn btn-info">Editar</button>
              </td>
              <td>
                    <form action="vinhos/delete/{{ $v->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Deletar</button>
                    </form>
              </td>
            </tr>

          @endforeach
  
        </tbody>
      </table>
    </div>
  </div>

  <a href="{{ url('vinhos/add') }}">Novo vinho</a>

@endsection