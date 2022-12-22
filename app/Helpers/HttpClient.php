<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class HttpClient
{
    static function fetch($method, $url, $body = [], $files = []) {
        if ($method == "GET") {
            return Http::get($url)->json(); // response dengan method get
        }

        // memeriksa apakah terdapat file
        if (sizeof($files) > 0) {
            $client = Http::asMultipart();

            foreach ($files as $key => $file) {
                $path = $file->getPathname();
                $name = $file->getClientOriginalFileName();
                
                // attach file pada client
                $client->attach($key, file_get_contents($path), $name);
            }

            // fetch api
            return $client->post($url, $body)->json();
        }

        // fetch post
        return Http::post($url, $body)->json();

    }
}