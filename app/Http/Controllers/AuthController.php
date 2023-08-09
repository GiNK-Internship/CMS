<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login_process(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password'  => 'required',
        ]);

        $response = Http::post('http://192.168.1.113:8000/api/users/login', $request->all());

        if ($response->successful()) {
            session()->put(['token' => $response['data']['access_token']]);
        } else {
        }
    }
}
