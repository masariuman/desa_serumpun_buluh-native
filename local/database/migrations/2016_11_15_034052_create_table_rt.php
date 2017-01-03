<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rt', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_rw')->unsigned();
            $table->string('nama_rt');
            $table->string('nama_kepala');
            $table->timestamps();

            $table->foreign('id_rw')
                    ->references('id')
                    ->on('rw')
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
        Schema::table('rt', function (Blueprint $table) {
            $table->dropForeign('rt_id_rw_foreign');
        });
        Schema::drop('rt');
    }
}
