<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index()
    {
        $token = session('bearer_token');
        if (!$token) {
            return view('login');
        } else {
            return redirect('homepage');
        }
    }

    public function login_process(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password'  => 'required',
        ]);

        $response = Http::post('http://192.168.1.109:8000/api/users/login', $request->all());

        session(['bearer_token' => $response['data']['access_token']]);

        if ($response['status'] == 'success') {
            return redirect('homepage');
        } else {
            return back()->withErrors(['login' => 'Login gagal. Silakan cek kembali email dan password Anda.']);
        }
    }

    public function logout()
    {
        $token = session('bearer_token');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('http://192.168.1.109:8000/api/users/logout');
        session()->forget('bearer_token');

        return redirect('');
    }
}
