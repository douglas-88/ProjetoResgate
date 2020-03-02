{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">CRIANDO NOVO ASSISTIDO</h1>
@stop

@section('content')
  <div class="row">
      <div class="container">
      <div class="col-8">
      <form action="{{ route("assistidos.store")  }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="nome">Nome</label>
              <input id="nome" name="nome" placeholder="Informe o nome" type="text" value="{{ old('nome') }}" class="form-control @error('nome') is-invalid @enderror">
              @foreach($errors->get('nome') as $message)
                 {{ $message }}
              @endforeach
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input id="email" name="email" value="{{ old('email') }}" placeholder="Informe o e-mail , por exemplo: maria@gmail.com" type="text" class="form-control @error('nome') is-invalid @enderror">
              @foreach($errors->get('email') as $message)
                  {{ $message }}
              @endforeach
          </div>
          <div class="form-group">
              <label for="foto">Foto</label>
              <div class="input-group">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name="foto" id="foto" aria-describedby="inputGroupFileAddon04">
                      <label class="custom-file-label" for="inputGroupFile04"></label>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <label for="cpf">CPF</label>
              <input id="cpf" name="cpf" placeholder="Informe seu CPF" type="text" value="{{ old('cpf') }}" class="form-control @error('cpf') is-invalid @enderror">
              @foreach($errors->get('cpf') as $message)
                  {{ $message }}
              @endforeach
          </div>
          <div class="form-group">
              <label for="rg">R.G</label>
              <input id="rg" name="rg" placeholder="Informe seu RG" type="text" class="form-control" aria-describedby="rgHelpBlock">
              <span id="rgHelpBlock" class="form-text text-muted">O campo R.G deve ter até 8 números.</span>
          </div>
          <div class="form-group">
              <label for="orgao_emissor">Orgão Emissor</label>
              <input id="orgao_emissor" name="orgao_emissor" placeholder="Informe o órgão emissor do R.G" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="endereco">Endereço:</label>
              <input id="endereco" name="endereco" placeholder="Informe o seu endereço" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="bairro">Bairro:</label>
              <input id="bairro" name="bairro" placeholder="Informe o Bairro" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="cidade">Cidade</label>
              <input id="cidade" name="cidade" placeholder="Informe a Cidade" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="cep">CEP</label>
              <input id="cep" name="cep" placeholder="Informe o CEP" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="naturalidade">Naturalidade</label>
              <input id="naturalidade" name="naturalidade" placeholder="Informe a sua Naturalidade, ex: Brasileira ... " type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="nome_da_mae">Nome da Mãe</label>
              <input id="nome_da_mae" name="nome_da_mae" placeholder="Informe o nome da Mãe" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="nome_do_pai">Nome do Pai</label>
              <input id="nome_do_pai" name="nome_do_pai" placeholder="Informe o nome do Pai" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="nome_do_responsavel">Nome do Responsável</label>
              <input id="nome_do_responsavel" name="nome_do_responsavel" placeholder="Informe o responsável" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label>Sexo</label>
              <div>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input name="sexo" id="sexo_0" type="radio" class="custom-control-input" value="M">
                      <label for="sexo_0" class="custom-control-label">Masculino</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input name="sexo" id="sexo_1" type="radio" class="custom-control-input" value="F">
                      <label for="sexo_1" class="custom-control-label">Feminino</label>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <label for="nascimento">Data de Nascimento</label>
              <input id="nascimento" name="nascimento" type="date" class="form-control">
          </div>
          <div class="form-group">
              <label for="civil">Estado Civil</label>
              <div>
                  <select id="civil" name="civil" class="custom-select">
                      <option value="">--SELECIONE--</option>
                      <option value="CASADO">CASADO</option>
                      <option value="SOLTEIRO">SOLTEIRO</option>
                      <option value="VIUVO">VIUVO</option>
                      <option value="DIVORCIADO">DIVORCIADO</option>
                      <option value="UNIAO_ESTAVEL">UNIAO_ESTAVEL</option>
                  </select>
              </div>
          </div>
          <div class="form-group">
              <label for="escolaridade">Escolaridade</label>
              <div>
                  <select id="escolaridade" name="escolaridade" class="custom-select">
                      <option value="">--SELECIONE--</option>
                      <option value="FUNDAMENTAL">FUNDAMENTAL</option>
                      <option value="MEDIO">MEDIO</option>
                      <option value="SUPERIOR">SUPERIOR</option>
                      <option value="POS_GRADUACAO">POS_GRADUACAO</option>
                  </select>
              </div>
          </div>
          <div class="form-group">
              <label for="renda_familiar_total">Renda Familiar</label>
              <input id="renda_familiar_total" name="renda_familiar_total" placeholder="Informe a Renda Familiar Total" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="renda_familiar_total">Ocupação Atual:</label>
              <input id="ocupacao" name="ocupacao" placeholder="Informe a ocupação" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="doenca">Doença</label>
              <textarea id="doenca" name="doenca" cols="40" rows="5" aria-describedby="doencaHelpBlock" class="form-control"></textarea>
              <span id="doencaHelpBlock" class="form-text text-muted">*Caso possua alguma doença crônica, favor descrevê-la acima.</span>
          </div>
          <div class="form-group">
              <label for="beneficio_social">Benefício Social</label>
              <textarea id="beneficio_social" name="beneficio_social" cols="40" rows="5" class="form-control" aria-describedby="beneficio_socialHelpBlock"></textarea>
              <span id="beneficio_socialHelpBlock" class="form-text text-muted">*Caso receba algum Benefício Social, como por exemplo "Bolsa Família", favor descrever acima.</span>
          </div>
          <div class="form-group">
              <label for="tel1">Telefone Fixo 1</label>
              <input id="tel1" name="tel1" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="tel2">Telefone fixo 2</label>
              <input id="tel2" name="tel2" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="cel1">Celular 1</label>
              <input id="cel1" name="cel1" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="cel2">Celular 2</label>
              <input id="cel2" name="cel2" type="text" class="form-control">
          </div>
          <div class="form-group">
              <label for="como_conheceu_projeto">De que forma ficou sabendo do Projeto ?</label>
              <textarea id="como_conheceu_projeto" name="como_conheceu_projeto" cols="40" rows="5" class="form-control"></textarea>
          </div>
          <div class="form-group">
              <label for="observacao">Observações Gerais:</label>
              <textarea id="observacao" name="observacao" cols="40" rows="5" class="form-control"></textarea>
          </div>
          <div class="form-group">
              <button name="submit" type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
      </form>
      </div>
      </div>
  </div>
@stop
