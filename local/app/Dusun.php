<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    //field
    protected $table = 'dusun';

    protected $fillable = [
		'nama_dusun',
		'nama_kepala',
	];

	public function rw() {
		return $this->hasMany('App\Rw', 'id_dusun');
	}
}
