{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">FICHA DE CADASTRO</h1>
    <h2 class="text-center"><b>{{ $assistido->nome }}</b></h2>
@stop

@section('content')

    <div class="card-body table-responsive p-0">
        <ul class="list-group list-group-flush">
            <li class="list-group-item list-group-item-action"><b>ID</b>:   {{  $assistido->id }}</li>
            <li class="list-group-item list-group-item-action"><b>NOME</b>: {{  $assistido->nome ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>EMAIL</b>: {{  $assistido->email ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>CPF</b>: {{  $assistido->cpf ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>R.G</b>: {{  $assistido->rg ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Órgão Emissor</b>: {{  $assistido->orgao_emissor ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Endereço</b>: {{  $assistido->endereco ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Bairro</b>: {{  $assistido->bairro ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Cidade</b>: {{  $assistido->cidade ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>CEP</b>: {{  $assistido->cep ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>UF</b>: {{  $assistido->uf ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Naturalidade</b>: {{  $assistido->naturalidade ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Nome da Mãe</b>: {{  $assistido->nome_da_mae ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Nome do Pai</b>: {{  $assistido->nome_do_pai ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Nome do Responsável</b>: {{  $assistido->nome_do_responsavel ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Sexo</b>: {{  $assistido->sexo ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Nascimento</b>: {{  $assistido->nascimento ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Estado Civil</b>: {{  $assistido->civil ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Escolaridade</b>: {{  $assistido->escolaridade ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Ocupação</b>: {{  $assistido->ocupacao ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Telefone 1</b>: {{  $assistido->tel1 ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Telefone 2</b>: {{  $assistido->tel2 ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Celular 1</b>: {{  $assistido->cel1 ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Celular 2</b>: {{  $assistido->cel2 ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Como conheceu o projeto ?</b>: {{  $assistido->como_conheceu_projeto ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Doença </b>: {{  $assistido->doenca ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Renda Familiar</b>: R$ {{  number_format($assistido->renda_familiar_total,2) ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Beneficio Social</b>: {{  $assistido->beneficio_social ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Observações</b>: {{  $assistido->observacao ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Criado por</b>: {{  $assistido->user_id ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Criado em</b>: {{  $assistido->created_at->format("d/m/Y") ?? "Não informado/Não há"}}</li>
            <li class="list-group-item list-group-item-action"><b>Atualizado em</b>: {{  $assistido->updated_at->format("d/m/Y") ?? "Não informado/Não há"}}</li>
        </ul>
    </div>
@stop
