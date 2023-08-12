<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemController extends Controller
{
    public function index()
    {
        $token = session('bearer_token');
        if (!$token) {
            return redirect('');
        } else {
            $response = Http::get('http://192.168.1.109:8000/api/items');
            $data = $response->json();

            return view('item.item_table', ['data' => $data]);
        }
    }

    public function create()
    {
        $token = session('bearer_token');
        if (!$token) {
            return redirect('');
        } else {
            $response = Http::get('http://192.168.1.109:8000/api/categories');
            $data = $response->json();
            return view('item.item_create', ['data' => $data]);
        }
    }

    public function create_process(Request $request)
    {
        $request['file'] = $request->file('file');
        $response = Http::post('http://192.168.1.109:8000/api/items', $request->all());
        $data = $response->json();

        return $request;
    }

    public function detail($id)
    {
        $token = session('bearer_token');
        if (!$token) {
            return redirect('');
        } else {
            $response = Http::get('http://192.168.1.109:8000/api/items/' . $id);
            $data = $response->json();
            $responseCat = Http::get('http://192.168.1.109:8000/api/categories/');
            $dataCat = $responseCat->json();
            return view('item.item_detail', ['data' => $data, 'dataCat' => $dataCat]);
        }
    }

    public function item_process($id, Request $request)
    {
        $endpoint = 'http://192.168.1.109:8000/api/items/' . $id;

        $response = Http::patch($endpoint, $request);

        if ($response->successful()) {
            return redirect()->route('items')->with('success', 'Data meja berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data meja. Silakan coba lagi.');
        }
    }

    public function delete($id)
    {
        $token = session('bearer_token');
        if (!$token) {
            return redirect('');
        } else {
            $response = Http::delete('http://192.168.1.109:8000/api/tables/' . $id);

            if ($response->successful()) {
                return redirect()->route('items')->with('success', 'Data meja berhasil diperbarui.');
            } else {
                return redirect()->back()->with('error', 'Gagal memperbarui data meja. Silakan coba lagi.');
            }
        }
    }
}
