@extends('layout.site') <!-- chama template site.blade.php -->

@section('titulo','Porão {nome do armario} &mdash; CellarHub')

@section('conteudo') <!-- section que leva até yield do site.blade.php -->

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Quant. de garrafas</th>
            <th>Nomenclatura</th>
            <th>Corredor</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $armarios as $a )

            <tr>
              <td>{{ $a->id }}</td>
              <td>{{ $a->quant_garrafa }}</td>
              <td>{{ $a->nomenclatura }}</td>
              <td>{{ $a->corredor_id }}</td>
              <td>
                <button>
                  <a href="armarios/{{ $a->id }}/edit" class="btn btn-info">Editar</a>
                </button>
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
  
        </tbody>
      </table>
    </div>
  </div>
  <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
    <a class="btn btn-primary" href="{{ url('poraos/add') }}">Novo armário</a>
  </div>

@endsection