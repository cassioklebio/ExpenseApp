@extends('layouts.app')

@section('content')

    <pagina-component tamanho="12">


        <painel-component subtitulo="Dashboard">
            <hr>
            <div class="row">

                <div class="col-md-6">
                    <caixa-component subtitulo="Despesas" url="{{route('admin.expense.index')}}" cor="blue"></caixa-component>
                </div>

                <div class="col-md-6">
                    <caixa-component subtitulo="Aprovação" url="{{route('admin.approval.index')}}" cor="Gold"></caixa-component>
                </div>
                <div class="col-md-6">
                    <caixa-component subtitulo="Histórico"   cor="Gold"></caixa-component>
                </div>
                <div class="col-md-6">
                    <caixa-component subtitulo="Tipos de despesas" url="{{route('admin.typeExpense.index')}}" cor="orange"></caixa-component>
                </div>

            </div>

        </painel-component>
    </pagina-component>
@endsection
