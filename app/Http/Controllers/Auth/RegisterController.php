<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register.index');
    } 

    public function store(Request $request)
    {
        $request->validate( [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required','unique:App\Models\User,email', 'string', 'max:255', 'email'],
            'password' => ['required', 'min:8'],
        ]);
        $data = [
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),   
        ];
        User::create($data);
        return to_route('login')->withSuccess('Pendaftaran berhasil, silahkan login');
    }
}
