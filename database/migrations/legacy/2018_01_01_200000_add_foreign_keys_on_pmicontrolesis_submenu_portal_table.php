<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysOnPmicontrolesisSubmenuPortalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pmicontrolesis.submenu_portal', function (Blueprint $table) {
            $table->foreign('ref_funcionario_exc')
               ->references('ref_cod_pessoa_fj')
               ->on('portal.funcionario');

            $table->foreign('ref_funcionario_cad')
               ->references('ref_cod_pessoa_fj')
               ->on('portal.funcionario');

            $table->foreign('ref_cod_menu_portal')
               ->references('cod_menu_portal')
               ->on('pmicontrolesis.menu_portal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pmicontrolesis.submenu_portal', function (Blueprint $table) {
            $table->dropForeign(['ref_funcionario_exc']);
            $table->dropForeign(['ref_funcionario_cad']);
            $table->dropForeign(['ref_cod_menu_portal']);
        });
    }
}
