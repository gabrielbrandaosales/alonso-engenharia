<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proposta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposta', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('cliente_id');
            $table->string('nm_endereco_obra', 55);
            $table->double('qt_valor_total');
            $table->double('qt_sinal');
            $table->integer('qt_parcelas');
            $table->integer('qt_valor_parcelas');
            $table->date('dt_inicio_pgt');
            $table->date('dt_parcelas');
            $table->string('nm_anexo', 155);
            $table->string('nm_status', 20);
            $table->timestamps();
        });

        Schema::table('proposta', function($table){
            $table->foreign('cliente_id')
            ->references('id')
            ->on('cliente')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proposta', function($table)
        {
            $table->dropForeign('proposta_cliente_foreign');
        });
    }
}
