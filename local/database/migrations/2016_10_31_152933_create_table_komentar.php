<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKomentar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_artikel')->unsigned();
            $table->string('nama', 255);
            $table->string('isi', 255);
            $table->string('status', 20);
            $table->timestamps();

            $table->foreign('id_artikel')
                    ->references('id')
                    ->on('artikel')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

        // Schema::table('komentar', function (Blueprint $table) {

        // });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('komentar', function (Blueprint $table) {
            $table->dropForeign('komentar_id_artikel_foreign');
        });

        Schema::drop('komentar');
    }
}
