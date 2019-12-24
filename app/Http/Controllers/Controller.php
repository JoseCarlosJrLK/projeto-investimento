<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $variavel = ' Homepage do system';
        return view('welcome', [
            'title' => $variavel
        ]);
    }
    public function cadastro()
    {
        echo 'tela de cadastro';
    }
    public function fazerlogin()
    {
        return view('user.login');
    }
}
