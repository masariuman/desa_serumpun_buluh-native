<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableArtikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_kategori')->unsigned()->nullable();
            $table->string('judul_artikel', 255);
            $table->text('isi');
            $table->string('gambar')->nullable();
            $table->string('nama_gambar')->nullable();
            $table->string('status', 20);
            $table->timestamps();

            $table->foreign('id_kategori')
                    ->references('id')
                    ->on('kategori')
                    ->onDelete('set null')
                    ->onUpdate('cascade');
        });

        // Schema::table('artikel', function (Blueprint $table) {
            
        // });

        // // set FK di komentar utk id_komentar
        // Schema::table('komentar', function (Blueprint $table) {
        //     $table->foreign('id_artikel')
        //             ->references('id')
        //             ->on('artikel')
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
        Schema::table('artikel', function (Blueprint $table) {
            $table->dropForeign('artikel_id_kategori_foreign');
        });


        // // Drop FK di kolom id_artikel di tabel artikel
        // Schema::table('komentar', function (Blueprint $table) {
        //     $table->dropForeign('komentar_id_artikel_foreign');
        // });
        Schema::drop('artikel');
    }
}
