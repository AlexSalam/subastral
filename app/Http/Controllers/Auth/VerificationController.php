<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Verification;

class VerificationController extends controller {

    public function verify($code) {

        $verification = Verification::where('code', $code);

        if ($verification) {

        }

    }

    public function resend(Request $request) {



    }

}