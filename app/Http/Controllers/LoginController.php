<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|min:8|max:50',
            'password' => 'required|string|min:8|max:32'
        ]);
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->where('status', 1)->first();
        if ($user) {
            if ($user->password == $password) {
                Session::put('username', $user->name);
                Session::put('user_id', $user->id);
                Session::put('email', $user->email);
                Session::put('/login', TRUE);
                return redirect('/');
            }
        }

        return redirect()->back()->withErrors(
            [
                'email' => 'Email Salah',
                'password' => 'Password Salah'
            ]
        );
    }

    public function logout()
    {
        if (!Session::get('/login')) {
            return redirect('/login');
        } else {
            Session::flush();
            return redirect('/login');
        }
    }
}
