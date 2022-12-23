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
        $payload = $request->all();
        
        $payload['image'] = $request->file("image")->store("images", "public");
        // dd($payload);
        $response = Http::post(
            "http://127.0.0.1:8000/api/author/add",
            $payload
        );

        return redirect('author');
    }

    public function edit($id) {
        $author = Http::get(
            "http://127.0.0.1:8000/api/author/detail/{$id}"
        )->json("data");

        return view('author/edit', [
            "author" => $author
        ]);
    }

    public function update(Request $request, $id) {
        $payload = $request->all();

        $response = Http::put(
            "http://127.0.0.1:8000/api/author/edit/{$id}",
            $payload
        );

        return redirect('author');
    }

    public function delete($id) {
        $response = Http::delete(
            "http://127.0.0.1:8000/api/author/delete/{$id}"
        );

        return redirect('author');
    }
}
