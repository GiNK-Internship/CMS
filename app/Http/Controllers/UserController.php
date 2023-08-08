<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        $response = Http::get('http://192.168.1.113:8000/api/users');
        $data = $response->json();

        return view('user.user_table', ['data' => $data]);
    }

    public function homepage()
    {
        return view('homepage');
    }
}
