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

    public function create()
    {
        return view('user.user_create');
    }

    public function create_process(Request $request)
    {
        $response = Http::post('http://192.168.1.113:8000/api/users', $request->all());
        $data = $response->json();

        if ($response->successful()) {
            return redirect()->route('users')->with('success', 'Data user berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data user. Silakan coba lagi.');
        }
    }

    public function detail($id)
    {
        $response = Http::get('http://192.168.1.113:8000/api/users/' . $id);
        $data = $response->json();
        return view('user.user_detail', ['data' => $data]);
    }

    public function user_process($id, Request $request)
    {
        $endpoint = 'http://192.168.1.113:8000/api/users/' . $id;

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        $response = Http::patch($endpoint, $data);

        if ($response->successful()) {
            return redirect()->route('users')->with('success', 'Data user berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data user. Silakan coba lagi.');
        }
    }

    public function delete($id)
    {
        $response = Http::delete('http://192.168.1.113:8000/api/users/' . $id);

        if ($response->successful()) {
            return redirect()->route('users')->with('success', 'Data user berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data user. Silakan coba lagi.');
        }
    }

    public function homepage()
    {
        return view('homepage');
    }
}
