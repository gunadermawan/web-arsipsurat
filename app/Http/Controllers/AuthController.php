<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function gagal()
    {
        return view('Login.login');
    }
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('username','password')))
        {
            return redirect()->intended('home');
        }
        return redirect()->route('login')->with('pesan','username dan password tidak terdaftar!!!');
    }
    public function add()
	{
		return view('Login.registrasi');
	}
	public function tambah(Request $request)
    {   
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users,email|min:8|max:20',
            'password' => 'required',
    
		],[
			// custome pesan
			'username.required' => 'Username Wajib di isi',
            'email.required' => 'Email Wajib Di Isi !!!',
            'email.unique' => 'Email sudah terdaftar, gunakan username yang lain !!!',
            'email.min' => 'Email minimal 8 karakter !!!',
            'email.max' => 'Email maximal 20 karakter !!!',
			'password.required' => 'Password Wajib Di Isi !!!',
         
		]);
 
        $user = User::create(request(['username', 'email', 'password']));
        
        auth()->login($user);
        return redirect()->route('register')->with('pesan','Registrasi Berhasil, Silhkan Login !!!');
    }
    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }
}
