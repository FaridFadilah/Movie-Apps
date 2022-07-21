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
            "title" => "Movie Popular",
            "data" => $getData,
            "genre" => $genres
        ];

        return view("resource", $array);
    }
    public function Details($id){
        $token = HTTP::withToken(config("services.tmdb.token"));
        $getData = $token->get("https://api.themoviedb.org/3/tv/" . $id)->json();
        $genre = $token->get("https://api.themoviedb.org/3/genre/tv/list")->json()["genres"];
        $genres = collect($genre)->mapWithKeys(fn($genres) => [$genres["id"] => $genres["name"]]);
        // dd($getData);
        $getData["release_date"] = $getData["first_air_date"];
        $getData["original_title"] = $getData["name"];
        $array = [
            "title" => $getData["original_name"],
            "data" => $getData,
            "genres" => $genres,
        ];
        return view("details", $array);
    }
    public function Trendings(){
        $token = HTTP::withToken(config("services.tmdb.token"));
        $getData = $token->get("https://api.themoviedb.org/3/trending/tv/week")->json();

        $array = [
            "title" => "Tv Series trending",
            "data" => $getData,
            // "genre" => $genre,
        ];
        return view("resource", $array);
    }
    public function upcoming(){
        $token = HTTP::withToken(config("services.tmdb.token"));
        $getData = $token->get("https://api.themoviedb.org/3/tv/upcoming")->json();

        dd($getData);
        $array = [
            "title" => "Tv Series trending",
            "data" => $getData,
            // "genre" => $genre,
        ];
        return view("resource", $array);
    }
}