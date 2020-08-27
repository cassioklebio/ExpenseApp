@extends('layouts.app')

@section('content')

    <pagina-component tamanho="12">

        <painel-component subtitulo="Aprovação de Despesa">

            <hr>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputCity">Despesa</label>
                                <input type="text" class="form-control" id="inputCity" value="Energia Predial" disabled>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputEstado">Valor</label>
                                <input type="text" class="form-control" id="inputCity" value="R$ 123,00" disabled>
                              </div>
                              <div class="form-group col-md-2">
                                <label for="inputCEP">Status</label>
                                <select id="inputEstado" class="form-control">
                                    <option selected>Escolher...</option>
                                    <option>Aprovado</option>
                                    <option>Reprovado</option>
                                  </select>
                              </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Salvar</button>
                          </form>

                    </div>
                  </div>
            </div>



        </painel-component>
    </pagina-component>


@endsection


