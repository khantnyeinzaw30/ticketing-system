<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    public function notice()
    {
        return request()->user()->hasVerifiedEmail() ?
            redirect('/') :
            view('auth.verify-email');
    }

    public function verifyEmail(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/dashboard');
    }

    public function resendVerificationNotice(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('resent', 'Verification link sent!');
    }
}
