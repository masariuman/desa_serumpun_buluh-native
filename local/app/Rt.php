<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    //field
    protected $table = 'rt';

    protected $fillable = [
    	'id_rw',
		'nama_rt',
		'nama_kepala',
	];

	public function rw() {
		return $this->belongsTo('App\Rw', 'id_rw');
	}
}
