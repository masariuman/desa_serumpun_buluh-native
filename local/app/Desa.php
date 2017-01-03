<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    //pilihan field table
	protected $table = 'desa';

	protected $fillable = [
		'judul_web',
		'nama_desa',
		'copyright',
		'sejarah_desa',
		'visi_misi',
		'geografis',
		'ekonomi',
		'prasarana',
		'pemerintahan',
		'peta',
		'alamat_kantor_desa',
		'gambar',
	];
}
