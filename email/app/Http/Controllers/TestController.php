<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class TestController extends Controller
{
    //
    public function index()
    {
        Mail::to('manishmishra.shg@gmail.com')->send(new TestMail());
        echo "Success!";
    }
}
