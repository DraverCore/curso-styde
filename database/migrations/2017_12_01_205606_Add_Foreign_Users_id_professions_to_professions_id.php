<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\MySqlBuilder;
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
                ->on('professions')
                ->onDelete('cascade');//puede ser en 'cascada' tambien
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
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            $table->dropForeign('users_profession_id_foreign');
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');
            });
    }
}
