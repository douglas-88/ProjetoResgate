{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">FICHA DE CADASTRO</h1>
    <h2 class="text-center"><b>{{ $assistido->nome }}</b></h2>
@stop
<style>
    @media print {
       .thead-dark{
           background-color: #0b2e13;
           color:#ffffff;
       }
    }
</style>
@section('content')
    <table class="table table-bordered bg-white">
        <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="6" class="text-center text-uppercase">Síntese Cadastral</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td><b>ID:</b> {{ $assistido->id }}</td>
              <td><b>Nome:</b> {{ $assistido->nome ?? "Não informado/Não há"}}</td>
              <td><b>Email:</b> {{ $assistido->email ?? "Não informado/Não há"}}</td>
              <td><b>CPF:</b> {{ $assistido->cpf ?? "Não informado/Não há"}}</td>
            </tr>
            <tr>
                <td><b>R.G:</b> {{ $assistido->rg }}</td>
                <td><b>Órgão Emissor</b>: {{ $assistido->orgao_emissor }}</td>
                <td><b>Endereço</b>: {{  $assistido->endereco ?? "Não informado/Não há"}}</td>
                <td><b>Bairro</b>: {{  $assistido->bairro ?? "Não informado/Não há"}}</td>
            </tr>
            <tr>
                <td><b>Cidade</b>: {{  $assistido->cidade ?? "Não informado/Não há"}}</td>
                <td><b>CEP</b>: {{  $assistido->cep ?? "Não informado/Não há"}}</td>
                <td><b>UF</b>: {{  $assistido->uf ?? "Não informado/Não há"}}</td>
                <td><b>Naturalidade</b>: {{  $assistido->naturalidade ?? "Não informado/Não há"}}</td>
            </tr>
            <tr>
                <td><b>Nome da Mãe</b>: {{  $assistido->nome_da_mae ?? "Não informado/Não há"}}</td>
                <td><b>Nome do Pai</b>: {{  $assistido->nome_do_pai ?? "Não informado/Não há"}}</td>
                <td><b>Nome do Responsável</b>: {{  $assistido->nome_do_responsavel ?? "Não informado/Não há"}}</td>
                <td><b>Sexo</b>: {{  $assistido->sexo ?? "Não informado/Não há"}}</td>
            </tr>
            <tr>
                <td><b>Nascimento</b>: {{  $assistido->nascimento ?? "Não informado/Não há"}}</td>
                <td><b>Estado Civil</b>: {{  $assistido->civil ?? "Não informado/Não há"}}</td>
                <td><b>Escolaridade</b>: {{  $assistido->escolaridade ?? "Não informado/Não há"}}</td>
                <td><b>Ocupação</b>: {{  $assistido->ocupacao ?? "Não informado/Não há"}}</td>
            </tr>
            <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="6" class="text-center text-uppercase">Contato</th>
            </tr>
            </thead>
            <tr>
                <td><b>Telefone 1</b>: {{  $assistido->tel1 ?? "Não informado/Não há"}}</td>
                <td><b>Telefone 2</b>: {{  $assistido->tel2 ?? "Não informado/Não há"}}</td>
                <td><b>Celular 1</b>: {{  $assistido->cel1 ?? "Não informado/Não há"}}</td>
                <td><b>Celular 2</b>: {{  $assistido->cel2 ?? "Não informado/Não há"}}</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered bg-white">
        <thead class="thead-dark">
        <tr>
            <th scope="col" colspan="6" class="text-center text-uppercase">Observações</th>
        </tr>
        </thead>
        <tr>
            <td><b>Como conheceu o projeto ?</b>: {{  $assistido->como_conheceu_projeto ?? "Não informado/Não há"}}</td>
            <td><b>Doença </b>: {{  $assistido->doenca ?? "Não informado/Não há"}}</td>
            <td colspan="3"><b>Observações</b>: {{  $assistido->observacao ?? "Não informado/Não há"}}</td>
        </tr>
        <tr>

            <td><b>Renda Familiar</b>: R$ {{  number_format($assistido->renda_familiar_total,2) ?? "Não informado/Não há"}}</td>
            <td><b>Beneficio Social</b>: {{  $assistido->beneficio_social ?? "Não informado/Não há"}}</td>
            <td><b>Criado por</b>: {{  $assistido->user_id ?? "Não informado/Não há"}}</td>
            <td><b>Criado em</b>: {{  $assistido->created_at->format("d/m/Y") ?? "Não informado/Não há"}}</td>
            <td><b>Atualizado em</b>: {{  $assistido->updated_at->format("d/m/Y") ?? "Não informado/Não há"}}</td>
        </tr>
    </table>
@stop
