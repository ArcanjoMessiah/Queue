<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeystoAtendimento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atendimento', function(Blueprint $table)
        {
            $table->foreign('atendente_id')->references('id')->on('atendente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('chamada_id')->references('id')->on('chamada')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::table('atendimento', function(Blueprint $table)
        {
            $table->dropForeign('atendente_id_foreign');
            $table->dropForeign('chamada_id_foreign');
        });
    }
}
