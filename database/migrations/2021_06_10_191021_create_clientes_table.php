<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id');
            $table->string('nm_razao_social', 55);
            $table->string('nm_fantasia', 55);
            $table->char('cd_cnpj', 14);
            $table->string('ds_endereco');
            $table->text('nm_email');
            $table->text('cd_telefone');
            $table->string('nm_responsavel', 55);
            $table->text('cd_cpf', 11);
            $table->text('cd_celular');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
