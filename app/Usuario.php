<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $table = 'usuario';
    protected $fillable = ['nome', 'login', 'senha', 'tipo', 'situacao'];

    public function clube()
    {
        return $this->belongsTo('App\Clube');
    }

}
