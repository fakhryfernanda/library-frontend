<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        // $response = HttpClient::fetch(
        //     "GET",
        //     "http://127.0.0.1:8000/api/author/all"
        // );

        $response = Http::get(
            "http://127.0.0.1:8000/api/author/all"
        )->json();

        // mengambil data author
        $authors = $response["data"];
        
        // Gak jalan
        // foreach($authors as $author) {
        //     $author["gender"] = $author["gender"] == 'M' ? "Pria" : "Wanita";
        // }
        
        return view('author/index', [
            "authors" => $authors
        ]);
    }

    public function detail($id) {
        $author = Http::get(
            "http://127.0.0.1:8000/api/author/detail/{$id}"
        )->json("data");

        $author["gender"] = $author["gender"] == 'M' ? "Pria" : "Wanita";

        return view('author/detail', [
            "author" => $author
        ]);
    }

    public function add() {
        return view('author/add');
    }

    public function store(Request $request) {
        // dd($request->all());

        $paylaod = $request->all();

        $response = Http::post(
            "http://127.0.0.1:8000/api/author/add",
            $paylaod
        );

        return redirect('author');
    }
}
