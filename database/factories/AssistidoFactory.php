<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Admin\Assistido::class, function (Faker $faker) {

         return [
             'nome' => $faker->name,
             'email' => $faker->email,
             'cpf'  => $faker->numerify("###########"),
             'rg'   => $faker->numerify("#########"),
             'orgao_emissor' => $faker->lexify('??????????'),
             'doenca' => $faker->text(500),
             'beneficio_social' => $faker->text(500),
             'endereco' => $faker->address(400),
             'bairro' => $faker->address(300),
             'cidade' => $faker->city(60),
             'cep' => $faker->numerify("########"),
             'uf' => $faker->lexify('??'),
             'naturalidade' => $faker->lexify('???????'),
             'renda_familiar_total' => $faker->randomFloat(2,4,8),
             'nome_da_mae' => $faker->name(255),
             'nome_do_pai' => $faker->name(255),
             'nome_do_responsavel' => $faker->name(255),
             'sexo' => $faker->randomElement(['M','F']),
             'nascimento' => $faker->date("Y-m-d"),
             'civil' => $faker->randomElement(['CASADO', 'SOLTEIRO','VIUVO','DIVORCIADO','UNIAO_ESTAVEL']),
             'escolaridade' => $faker->randomElement(['FUNDAMENTAL', 'MEDIO','SUPERIOR','POS_GRADUACAO']),
             'ocupacao' => $faker->randomElement(['DESEMPREGADO', "TRABALHANDO"]),
             'cel1' => $faker->numerify("##########"),
             'como_conheceu_projeto' => $faker->text(),

         ];

});

/*
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
*/
