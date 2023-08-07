<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemController extends Controller
{
    public function index()
    {
        $response = Http::get('http://192.168.1.111:8000/api/items');
        $data = $response->json();

        return view('item_table', ['data' => $data]);
    }
}
