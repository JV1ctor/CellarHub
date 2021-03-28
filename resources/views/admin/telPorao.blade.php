@extends('layout.site') <!-- chama template site.blade.php -->

@section('titulo','Porão {nome do porão} &mdash; CellarHub')

@section('conteudo') <!-- section que leva até yield do site.blade.php -->

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Nomenclatura</th>
            <th>Usuário</th>
            <th>Editar</th>
            <th>Deletar</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $poraos as $p )

            <tr>
              <td>{{ $p->id }}</td>
              <td>{{ $p->nomenclatura }}</td>
              <td>{{ $p->user_id }}</td>
              <td>
                <button>
                  <a href="poraos/{{ $p->id }}/edit" class="btn btn-info">Editar</a>
                </button>
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
  
        </tbody>
      </table>
    </div>
  </div>
  <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
    <a class="btn btn-primary" href="{{ url('poraos/add') }}">Novo porão</a>
  </div>

@endsection