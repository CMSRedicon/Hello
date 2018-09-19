<?php

namespace Redicon\Hello;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    public function index(){

       $message = "Wiadomość z paczki Redicon/Hello";
      return view('hello::index', compact('message'));
    }
}
