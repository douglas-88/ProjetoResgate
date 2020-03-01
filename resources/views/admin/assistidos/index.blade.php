{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bem vindo {{ auth()->user()->name }}</h1>
@stop

@section('content')
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de Assistidos</h3>

                    <div class="card-tools">

                            <form action="/assistidos/{search}" method="GET">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                {{csrf_field()}}
                                <input type="text" name="s" class="form-control float-right" placeholder="Procurar">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                                </div>
                            </form>

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
                            <th>CPF</th>
                            <th>CADASTRO</th>
                            <th>POR</th>
                            <th>OPÇÔES</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($assistidos as $assistido)
                            <tr>
                                <td>{{ $assistido->id  }}</td>
                                <td>{{ $assistido->nome  }}</td>
                                <td>{{ $assistido->email ?? "dcdouglas64@gmail.com" }}</td>
                                <td>{{ $assistido->cpf  }}</td>
                                <td>{{ $assistido->created_at->format("d/m/Y")  }}</td>
                                <td>Alciléia</td>
                                <td>
                                    <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                    <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        @empty
                            <p>No users</p>
                        @endforelse
                        </tbody>

                    </table>
                    <div class="card-footer clearfix">
                        <div class="float-right">
                            {{ $assistidos->links() }}
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
