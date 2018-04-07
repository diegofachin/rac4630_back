<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClubeController extends Controller
{
    
   use \App\Http\Controllers\ApiControllerTrait;

    protected $model;

    public function __construct(\App\Clube $model)
    {
        $this->model = $model;
    }
/*
    public function index(Request $request)
    {
        return "Pegou do abstract";
    }

    public function teste()
    {
        return "Pegou do teste";
    }
*/

}
