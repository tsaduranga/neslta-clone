<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Log;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function sendFailedLoginResponse(Request $request)
    {

        $email_check = User::where('email', $request->email)->first();

        if ($email_check) {
            $log_error['ip'] = request()->ip();
            $log_error['status'] = 0;
            $log_error['users_id'] = $email_check['id'];

            Log::create($log_error);
        }


        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }





    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);


        $email_check = User::where('email', $request->email)->first();

        if ($email_check) {
            $log_error['ip'] = request()->ip();
            $log_error['status'] = 1;
            $log_error['users_id'] = $email_check['id'];

            Log::create($log_error);
        }


        return $this->authenticated($request, $this->guard()->user())
            ?: redirect()->intended($this->redirectPath());
    }
}
