<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Mail;

class AdminAuthController extends Controller
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


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return view('backend.inc.login');
    }

    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('admin')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->remember_me)) {
            return redirect()->route('admin.dashboard')->with('success', 'You are Login successfully!!');
        } else {
            return redirect()->back()->with('error', 'your username and password are wrong.');
        }
    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        \Session::flush();
        \Session::put('success', 'You are logout successfully');
        return redirect(route('admin.login'));
    }

    public function password(Request $request)
    {
        $lists = Auth::guard('admin')->user();
        $data  = compact('lists');

        // return data to view
        return view('backend.inc.changepassword', $data);
    }

    public function changepassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
        ]);

        $admin = auth()->guard('admin')->user();

        $admin->update(['password' => Hash::make($request->new_password)]);

        return redirect()->back()->with('success', 'Your password has been changed successfully.');
    }

    public function getEmail()
    {
        return view('backend.inc.forgetpassword');
    }

    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins',
        ]);

        $token = Str::random(64);

        $user = Admin::where('email', $request->email)->first();
        
        $user->fill([
            'remember_token' => $token
        ]);

        
        Mail::send('backend.inc.email', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password Notification');
            $message->from(env('MAIL_USERNAME'));
        });
        
        $user->save();

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function getPassword($token)
    {
        return view('backend.inc.resetpassword', ['token' => $token]);
    }

    public function updatePassword(Request $request)
    {

        $request->validate([
            'token' => 'required',
            'password' => 'required|string|min:7',
            'password_confirmation' => 'required_with:password|same:password|min:7'
        ]);

        $user = Admin::where('remember_token', $request->token)
            ->update(['password' => Hash::make($request->password)]);

        return redirect(route('account.login'))->with('message', 'Your password has been changed!');
    }
}
