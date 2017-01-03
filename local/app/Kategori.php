<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //pilihan field table
	protected $table = 'kategori';

	protected $fillable = [
		'nama_kategori',
		'deskripsi_kategori',
	];

	public function artikel() {
		return $this->hasMany('App\Artikel', 'id_kategori');
	}
}
