<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;


class TestController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
    public function foo()
    {
        //return view('test.foo');
        return 'foo';
    }
    public function bar()
    {
        return view('test.bar');
    }

    public function bar1(){
        //Mail::to('test@mail.test')->send(new TestMail());

        return 'bar1';
    }
}
