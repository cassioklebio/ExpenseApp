@extends('layouts.app')

@section('content')

    <pagina-component tamanho="12">

        <painel-component subtitulo="Cadastro de despesas">

            <hr>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form>
                            <div class="form-row">
                                <div class="form-group multiple-form-group input-group">
                                    <div class="col-7">
                                        <label for="colFormLabel" class="col col-form-label">Despesa</label>
                                        <input type="text" class="form-control" name="despesa" placeholder="Despesa">
                                      </div>
                                      <div class="col">
                                        <label for="colFormLabel" class="col col-form-label">tipo</label>
                                        <select id="inputEstado" class="form-control">
                                            <option selected>Escolher...</option>
                                            <option>Energia</option>
                                            <option>Aliemntação</option>
                                            <option>Transporte</option>
                                            <option>Educação</option>
                                        </select>
                                      </div>
                                      <div class="col">
                                        <label for="colFormLabel" class="col col-form-label">Valor</label>
                                        <input type="text" class="form-control" name="valor" placeholder="Valor">
                                      </div>
                                      <div class="col">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-sm btn-add">+</button>
                                        </span>
                                      </div>

                                </div>
                            </div>

                        </form>

                    </div>
                  </div>
            </div>



        </painel-component>
    </pagina-component>


@endsection


