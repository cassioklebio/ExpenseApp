@extends('layouts.app')

@section('content')

    <pagina-component tamanho="12">

        <painel-component subtitulo="Cadastro de Tipos de despesas">

            <hr>
            <div class="col-md-8">
                <form action="{{route('admin.typeExpense.store')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label for="nome">Despesa</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="digite o nome da despesa">
                    </div>

                    <div class="form-group">
                        <label for="nome">Slug</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="digite o slug da despesa">
                    </div>
                    <div class="form-group">
                        <a href="{{route('admin.typeExpense.index')}}" type="button" class="btn btn-danger">
                            Cancelar
                        </a>
                        <button  type="submit" class="btn btn-primary">
                            Cadastrar
                        </button>
                  </form>
            </div>



        </painel-component>
    </pagina-component>


@endsection
