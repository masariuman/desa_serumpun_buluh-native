<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKategorii extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('kategori', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('nama_kategori', 255);
        //     $table->string('deskripsi_kategori', 255);
        //     $table->timestamps();
        // });

        // // set FK di artikel utk id_kategori
        // Schema::table('artikel', function (Blueprint $table) {
        //     $table->foreign('id_kategori')
        //             ->references('id')
        //             ->on('kategori')
        //             ->onDelete('cascade')
        //             ->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // // Drop FK di kolom id_artikel di tabel artikel
        // Schema::table('artikel', function (Blueprint $table) {
        //     $table->dropForeign('artikel_id_kategori_foreign');
        // });
        // Schema::drop('kategori');
    }
}
