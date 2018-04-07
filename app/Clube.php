<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clube extends Model
{
	protected $table = 'clube';
	protected $fillable = ['nome', 'situacao'];

}
