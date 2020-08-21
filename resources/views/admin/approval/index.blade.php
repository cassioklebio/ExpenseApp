@extends('layouts.app')

@section('content')

    <pagina-component tamanho="12">


        <painel-component subtitulo="Despesas para aprovação">

            <a type="button" class="btn btn-link" href="{{url('admin/aproval/create')}}">
                Cadastrar
            </a>
            <a type="button" class="btn btn-link" href="{{url('/home')}}">
                voltar
            </a>
            </a>
            <hr>

            <table class="table table-striped">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Despesa</th>
                      <th scope="col">Valor</th>
                      <th scope="col">status</th>


                    </tr>
                  </thead>
                <tbody>

                    <tr>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                    </tr>

                </tbody>
            </table>



        </painel-component>
    </pagina-component>


@endsection
