<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        return view('index');
    }

    public function dash(){
        return view('layoutDash');
    }
    public function admin(){
        return view('layoutAdmin');
    }

    public function logAdmin(){
        return view('loginAdmin');
    }

}
