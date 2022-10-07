<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function _construct()//On ne peut accéder à la page que si on est connecté
    {
        $this->middleware('auth');
    }
    public function show()
    {
        return view('co.userpage');
    }
    public function bar()
    {
        return view('test.bar');
    }
}
