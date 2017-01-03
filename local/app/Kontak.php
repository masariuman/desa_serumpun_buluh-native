<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    //field
    protected $table = 'kontak';

    protected $fillable = [
    	'nama',
    	'alamat',
    	'gambar',
    	'email',
    	'telepon',
    	
    ];
}
