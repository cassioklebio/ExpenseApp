@extends('layouts.app')

@section('content')

    <pagina-component tamanho="12">


        <painel-component subtitulo="Tipos de Despesas">

            <a type="button" class="btn btn-link" href="{{url('admin/typeExpense/create')}}">
                Cadastrar
            </a>
            <a type="button" class="btn btn-link" href="{{url('/home')}}">
                voltar
            </a>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Slug</th>
                      <th scope="col">Ações</th>


                    </tr>
                  </thead>
                <tbody>

                </tbody>
            </table>



        </painel-component>
    </pagina-component>



@endsection
