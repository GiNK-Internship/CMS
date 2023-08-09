<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TableController extends Controller
{
    public function index()
    {
        $response = Http::get('http://192.168.1.110:8000/api/tables');
        $data = $response->json();

        return view('table.table_table', ['data' => $data]);
    }

    public function create()
    {
        return view('table.table_create');
    }

    public function create_process(Request $request)
    {
        $response = Http::post('http://192.168.1.110:8000/api/tables', $request->all());
        $data = $response->json();

        if ($response->successful()) {
            return redirect()->route('tables')->with('success', 'Data meja berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data meja. Silakan coba lagi.');
        }
    }

    public function detail($id)
    {
        $response = Http::get('http://192.168.1.110:8000/api/tables/' . $id . '/detail');
        $data = $response->json();
        return view('table.table_detail', ['data' => $data]);
    }

    public function table_process($id, Request $request)
    {
        $endpoint = 'http://192.168.1.110:8000/api/tables/' . $id;

        $data = [
            'number' => $request->input('number'),
            'status' => $request->input('status'),
        ];

        $response = Http::patch($endpoint, $data);

        if ($response->successful()) {
            return redirect()->route('tables')->with('success', 'Data meja berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data meja. Silakan coba lagi.');
        }
    }

    public function delete($id)
    {
        $response = Http::delete('http://192.168.1.110:8000/api/tables/' . $id);

        if ($response->successful()) {
            return redirect()->route('tables')->with('success', 'Data meja berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data meja. Silakan coba lagi.');
        }
    }
}
