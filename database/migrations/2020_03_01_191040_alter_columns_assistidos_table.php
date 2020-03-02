<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnsAssistidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function __construct()
    {
        DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }
    public function up()
    {
        Schema::table('assistidos', function (Blueprint $table) {
            $table->string("foto",400)->nullable()->after("email");
            $table->string("naturalidade",60)->change();
            $table->float("renda_familiar_total",8,2)->after("ocupacao");;
            $table->text("doenca")->nullable()->after("renda_familiar_total");
            $table->text("beneficio_social")->nullable()->after("doenca");;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assistidos', function (Blueprint $table) {
            //
        });
    }
}
