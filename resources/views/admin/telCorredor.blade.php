@extends('layout.site') <!-- chama template site.blade.php -->

@section('titulo','Porão {nome do corredor} &mdash; CellarHub')

@section('conteudo') <!-- section que leva até yield do site.blade.php -->

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Nomenclatura</th>
            <th>Porão</th>
            <th>Editar</th>
            <th>Deletar</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $corredors as $c )

          <td>{{ $c->id }}</td>
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

          @endforeach
  
        </tbody>
      </table>
    </div>
  </div>
  <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
    <a class="btn btn-primary" href="{{ url('poraos/add') }}">Novo corredor</a>
  </div>

@endsection