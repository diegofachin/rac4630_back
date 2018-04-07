<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $relationships = ['clube'];

    public function __construct(\App\Usuario $model)
    {
        $this->model = $model;
    }
}
