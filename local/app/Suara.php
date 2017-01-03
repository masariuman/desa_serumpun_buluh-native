<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suara extends Model
{
    //field
    protected $table = 'suara_warga';

    protected $fillable = [
    	'nama_warga',
    	'isi',
    	'status',
    ];
}
