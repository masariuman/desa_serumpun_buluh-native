<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_web', 255);
            $table->string('nama_desa', 255);
            $table->string('copyright', 255);
            $table->text('sejarah_desa');
            $table->text('visi_misi');
            $table->text('geografis');
            $table->text('ekonomi');
            $table->text('prasarana');
            $table->text('pemerintahan');
            $table->string('alamat_kantor_desa', 255);
            $table->string('peta');
            $table->string('gambar', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('desa');
    }
}
