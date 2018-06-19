<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::check()) {
            $user = $request->user();
        } else {
            $user = null;
        }
        return view('home', [
            'user' => $user
        ]);
    }
}
