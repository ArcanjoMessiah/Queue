<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Atendimento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('atendimento', function (Blueprint $table) {
            $table->id();
            $table->date('created_at');
            $table->date('finish_at');
            $table->date('started_at');
            $table->bigInteger('atendente_id')->unsigned();
            $table->bigInteger('chamada_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('atendimento');
    }
    
}
