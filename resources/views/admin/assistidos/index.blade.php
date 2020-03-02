{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listando Assistidos Cadastrados:</h1>
@stop

@section('content')
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ">
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Filtros
                    </a>
                    <div class="collapse" id="collapseExample">
                        <div class="card-tools">
                            <form action="{{ route("assistidos.search")  }}" method="POST" class="form">
                                @csrf
                                <label>Faixa de Renda:</label><br>
                                <input type="text" class="form-control mr-1" name="renda_ini" value="{{ old('renda_ini') }}" placeholder="Renda Inicial">
                                <input type="text" class="form-control mr-1" name="renda_fin" value="{{ old('renda_fin') }}" placeholder="Renda Final">
                                <label>Nome:</label><br>
                                <input type="text" class="form-control mr-1" name="nome" value="{{ old('nome') }}" placeholder="Nome">

                                <input type="submit" value="PESQUISAR">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>EMAIL</th>
                            <th>CEL1</th>
                            <th>CPF</th>
                            <th>RENDA</th>
                            <th>CRIADO</th>
                            <th>OPÇÔES</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($assistidos as $assistido)
                            <tr>
                                <td>{{ $assistido->id  }}</td>
                                <td>{{ $assistido->nome  }}</td>
                                <td>{{ $assistido->email ?? "Não informado/Não há" }}</td>
                                <td>{{ $assistido->cel1 ?? "Não informado/Não há" }}</td>
                                <td>{{ $assistido->cpf  }}</td>
                                <td>R$ {{ number_format($assistido->renda_familiar_total,2)  }}</td>
                                <td>{{ $assistido->created_at->format("d/m/Y")  }}</td>
                                <td>
                                    <a href="{{ route("assistidos.show",["id" => $assistido->id]) }}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
                                    <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="7">Nenhum Assistido Localizado</td>
                        </tr>
                        @endforelse
                        </tbody>

                    </table>
                    <div class="card-footer clearfix">
                        <div class="float-right">
                            @if(isset($data))
                                {{ $assistidos->appends($data)->links() }}
                            @else
                                {{ $assistidos->links() }}
                            @endif
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
