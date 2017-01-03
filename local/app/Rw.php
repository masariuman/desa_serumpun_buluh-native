<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    //field
    protected $table = 'rw';

    protected $fillable = [
    	'id_dusun',
		'nama_rw',
		'nama_kepala',
	];

	public function dusun() {
		return $this->belongsTo('App\Dusun', 'id_dusun');
	}

	public function rt() {
		return $this->hasMany('App\Rt', 'id_rw');
	}
}
