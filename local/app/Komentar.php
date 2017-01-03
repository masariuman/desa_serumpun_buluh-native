<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    //field
    protected $table = 'komentar';

    protected $fillable = [
    	'id_artikel',
    	'nama',
    	'isi',
        'status',
    ];

    public function kategori() {
		return $this->belongsTo('App\Artikel', 'id_artikel');
	}
}
