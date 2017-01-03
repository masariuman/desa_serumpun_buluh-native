<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    //field
    protected $table = 'organisasi';

    protected $fillable = [
    	// 'gambar',
		// 'nip',
		'nama',
		// 'alamat',
		// 'telepon',
		'jabatan',
		'foto',
	];
}
