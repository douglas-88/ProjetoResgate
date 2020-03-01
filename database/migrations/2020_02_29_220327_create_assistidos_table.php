<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nome",255);
            $table->string("cpf",11)->unique();
            $table->string("rg",9)->unique();
            $table->string("orgao_emissor",255)->nullable();
            $table->string("endereco",400);
            $table->string("bairro",300);
            $table->string("cidade",60);
            $table->string("cep",8);
            $table->string("uf",2);
            $table->string("naturalidade",2);
            $table->string("nome_da_mae",255);
            $table->string("nome_do_pai",255);
            $table->string("nome_do_responsavel",255)->nullable();
            $table->enum('sexo', ['M', 'F']);
            $table->date("nascimento");
            $table->enum('civil', ['CASADO', 'SOLTEIRO','VIUVO','DIVORCIADO','UNIAO_ESTAVEL']);
            $table->enum('escolaridade', ['FUNDAMENTAL', 'MEDIO','SUPERIOR','POS_GRADUACAO']);
            $table->string("ocupacao",255);
            $table->string("tel1",10)->nullable();
            $table->string("tel2",10)->nullable();
            $table->string("cel1",10);
            $table->string("cel2",10)->nullable();
            $table->text("como_conheceu_projeto")->nullable();
            $table->text("observacao")->nullable();
            $table->unsignedInteger("user_id")->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }




    /*
     * user_id foreingkey references user
        doencacronica_id, foreingkey references doencacronica
        Nome,
        CPF,
        RG,
        Orgao Emissor,
        Endereço,
        Bairro,
        Cidade,
        CEP,
        UF,
        Naturalidade,
        Nome da Mãe,
        Nome do Pai,
        Nome do responsavel(se menor de 18 anos),
        Sexo,
        Nascimento,
        Estado Civil,
        Escolaridade,
        Ocupação
        Celular,
        WhatsApp,
        como conheceu o projeto,
        observação
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assistidos');
    }
}
