<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index(Request $request) {
        $request->session()->flash('msg', ['class' => 'success', 'msg' => 'You are now logged in!']);
        return view('home');
    }
}
