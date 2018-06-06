<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06/06/18
 * Time: 14:26
 */

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard() {

        return view('dashboard');

    }
}