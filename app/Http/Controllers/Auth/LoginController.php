<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'max:255', 'email'],
            'password' => ['required'],
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (auth()->attempt($data)) {
            return to_route('dashboard');       
        } else {
            return redirect()->back()->withErrors('Gagal login, silahkan coba lagi')->withInput();
        }
    }
}
