<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;




class HomeController extends Controller
{
    public function index()
{
    $response = Http::get('http://tes-web.landa.id/intermediate/menu');

    if ($response->successful()) {
        $data = $response->json();
        return view('home', ['data' => $data]);
    } else {
        abort(500, 'Gagal mengambil data dari API.');
    }
}
}
