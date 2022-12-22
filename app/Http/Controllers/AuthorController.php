<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authorResponse = HttpClient::fetch(
            "GET",
            "http://127.0.0.1:8000/api/author/all"
        );

        // mengambil data author
        $authors = $authorResponse["data"];

        return view('author/index', [
            "authors" => $authors
        ]);
    }
}
