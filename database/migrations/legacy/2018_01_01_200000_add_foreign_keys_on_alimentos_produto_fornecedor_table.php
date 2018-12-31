<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysOnAlimentosProdutoFornecedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alimentos.produto_fornecedor', function (Blueprint $table) {
            $table->foreign('idpro')
               ->references('idpro')
               ->on('alimentos.produto');

            $table->foreign('idfor')
               ->references('idfor')
               ->on('alimentos.fornecedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alimentos.produto_fornecedor', function (Blueprint $table) {
            $table->dropForeign(['idpro']);
            $table->dropForeign(['idfor']);
        });
    }
}
