@extends('layout.site') <!-- chama template site.blade.php -->

@section('titulo','Cadastro de vinho &mdash; CellarHub')

@section('conteudo') <!-- section que leva até yield do site.blade.php -->

    @if ( Request::is('*/edit'))
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-lg mt-6">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">
                            Armário
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('armarios/update') }}/{{ $armario->id }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1">
                                    Quantidade de garrafas:
                                </label>
                                <input type="number" name="quant_garrafa" value="{{ $armario->quant_garrafa }}">
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">
                                    Nomenclatura:
                                </label>
                                <input type="text" name="nomenclatura" value="{{ $armario->nomenclatura }}">
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">
                                    Corredor:
                                </label>
                                <input type="number" name="corredor_id" value="{{ $armario->corredor_id }}">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <input class="btn btn-primary" type="submit" value="Editar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @else

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-lg mt-6">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">
                            Armário
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('armarios/save') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1">
                                    Quantidade de garrafas:
                                </label>
                                <input type="number" name="quant_garrafa">
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">
                                    Nomenclatura:
                                </label>
                                <input type="text" name="nomenclatura">
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">
                                    Corredor:
                                </label>
                                <input type="number" name="corredor_id">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <input class="btn btn-primary" type="submit" value="Cadastrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endif

@endsection