<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index()
    {
        $response = Http::get('http://192.168.1.111:8000/api/categories');
        $data = $response->json();

        return view('category_table', ['data' => $data]);
    }
}
