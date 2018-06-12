<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\EmailVerification;
use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class VerificationController extends controller {

    public function verify($code, Request $request) {

        $verification = Verification::where('code', $code);
        if (empty($verification)) {
            return abort(404);
        }
        if (Carbon::parse($verification->created_at)->lt(Carbon::yesterday())) {
            $verification->delete();
            $request->session()->flash('msg', [
                'msg' => 'This verification token has expired, please resend the email and try again.',
                'class' => 'warning'
            ]);
            return view('home');
        }
        $user = User::where('id', $verification->user_id);
        $user->verified = true;
        $user->save();
        $verification->delete();

        $request->session()->flash('msg', [
            'msg' => 'This verification token has expired, please resend the email and try again.',
            'class' => 'success'
        ]);
        return view('home');

    }

    public function resend(Request $request) {

        $code = Uuid::uuid4();

        $verification = new Verification();
        $verification->user_id = Auth::user()->id;
        $verification->code = $code;
        $verification->save();

        Mail::to($verification->User()->email)->send(new EmailVerification($code));

        $request->session()->flash('msg', [
            'msg' => 'Verification email sent.',
            'class' => 'success'
        ]);
        return view('home');

    }

    public function form() {
        return view('auth.form-resend');
    }

}