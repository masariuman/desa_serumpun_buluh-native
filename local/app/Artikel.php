<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //definisi table
    protected $table = 'artikel';

    protected $fillable = [
    	'id_kategori',
    	'judul_artikel',
    	'isi',
    	'gambar',
    	'status',
        'nama_gambar',
    ];

    public function kategori() {
		return $this->belongsTo('App\Kategori', 'id_kategori');
	}

	public function komentar() {
		return $this->hasMany('App\Komentar', 'id_artikel');
	}
}
