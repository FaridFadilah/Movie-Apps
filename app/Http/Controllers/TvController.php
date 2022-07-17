<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller{
    public function popular(){
        $token = HTTP::withToken(config("services.tmdb.token"));
        $getData = $token->get("https://api.themoviedb.org/3/tv/popular")->json();
        $genre = $token->get("https://api.themoviedb.org/3/genre/tv/list")->json()["genres"];
        $genres = collect($genre)->mapWithKeys(fn($genres) => [$genres["id"] => $genres["name"]]);
        // dd($getData);

        $array = [
            "title" => "Movie Upcoming",
            "data" => $getData,
            "genre" => $genres
        ];

        return view("resource", $array);
    }
}