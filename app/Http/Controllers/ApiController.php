<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function get_all()
    {
        $response = Http::get('http://127.0.0.1:8001/all');

        $predictions = $response->json();

        dump($response->json());

        return view('all', ['predictions' => $predictions]);
    }
}
