<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index()
    {
        $response = Http::get('http://192.168.1.113:8000/api/categories');
        $data = $response->json();

        return view('category.category_table', ['data' => $data]);
    }

    public function create()
    {
        return view('category.category_create');
    }

    public function create_process(Request $request)
    {
        $response = Http::post('http://192.168.1.113:8000/api/categories', $request->all());
        $data = $response->json();

        if ($response->successful()) {
            return redirect()->route('categories')->with('success', 'Data category berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data category. Silakan coba lagi.');
        }
    }

    public function detail($id)
    {
        $response = Http::get('http://192.168.1.113:8000/api/categories/' . $id);
        $data = $response->json();
        return view('category.category_detail', ['data' => $data]);
    }

    public function category_process($id, Request $request)
    {
        $endpoint = 'http://192.168.1.113:8000/api/categories/' . $id;

        $data = [
            'name' => $request->input('name')
        ];

        $response = Http::patch($endpoint, $data);

        if ($response->successful()) {
            return redirect()->route('categories')->with('success', 'Data category berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data category. Silakan coba lagi.');
        }
    }

    public function delete($id)
    {
        $response = Http::delete('http://192.168.1.113:8000/api/categories/' . $id);

        if ($response->successful()) {
            return redirect()->route('categories')->with('success', 'Data category berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data category. Silakan coba lagi.');
        }
    }
}
