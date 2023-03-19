<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
          $loginField = filter_var(
            $request->input('login'), FILTER_VALIDATE_EMAIL) 
              ? 'email' 
              : 'username';
          $request->merge([$loginField => $request->input('login')]);
          $request->validate([
            'email' => 'required_without:username|email|exists:users,email',
            'username' => 'required_without:email|string|exists:users,username'
          ]);
          $status = Password::sendResetLink(
            $request->only($loginField)
          );
          if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', __($status));
          }
          throw ValidationException::withMessages([
            $loginField => [trans($status)],
          ]);
    }
}
