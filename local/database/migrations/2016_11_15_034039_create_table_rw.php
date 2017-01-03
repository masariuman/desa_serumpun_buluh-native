<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rw', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_dusun')->unsigned();
            $table->string('nama_rw');
            $table->string('nama_kepala');
            $table->timestamps();

            $table->foreign('id_dusun')
                    ->references('id')
                    ->on('dusun')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rw', function (Blueprint $table) {
            $table->dropForeign('rw_id_dusun_foreign');
        });
        Schema::drop('rw');
    }
}
