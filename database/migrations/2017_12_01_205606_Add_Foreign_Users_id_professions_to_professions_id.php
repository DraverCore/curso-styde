<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignUsersIdProfessionsToProfessionsId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //LA PRIMER PARTE DEL PROCEDIMIENTO ES PARA SUSTITUIR LA TABLA POR UNA DIFERENTE
            //$table->foreign('id_profession')-> references('id')->on('profession');
            //$table->dropColumn('id_profession');
            //$table->unsignedInteger('profession_id')->after('id'); 
            $table->foreign('profession_id')
                ->references('id')
                ->on('professions');//puede ser en 'cascada' tambien
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //$table -> unsignedInteger('id_profession')->after('id');
            //$table->dropForeign('id_profession');
            $table->dropForeign('users_profession_id_foreign'); //LA LLAVE NO SE HA ELIMINADO EN LA BASE DE DATOS
            //$table->dropColumn('profession_id');
        });
    }
}
