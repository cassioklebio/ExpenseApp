@extends('layouts.app')

@section('content')

    <pagina-component tamanho="12">
        {{-- <breadcrumb-component v-bind:lista="{{$listaBreadCrumb}}"></breadcrumb-component> --}}

        <painel-component subtitulo="Lista de Estados">
            <!-- Button trigger modal -->

                Cadastrar
            </a>
            <hr>

            <table class="table table-striped">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Sigla</th>
                      <th scope="col">Ações</th>


                    </tr>
                  </thead>
                <tbody>

                    <tr>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>



        </painel-component>
    </pagina-component>


@endsection
