<?php
namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller{
    public function upcoming(){
        $token = HTTP::withToken(config("services.tmdb.token"));
        $data = $token->get("https://api.themoviedb.org/3/movie/upcoming")->json();
        $genre = $token->get("https://api.themoviedb.org/3/genre/movie/list")->json()["genres"];
        $genres = collect($genre)->mapWithKeys(fn($genres) => [$genres["id"] => $genres["name"]]);
        
        $array = [
            "title" => "Movie Upcoming",
            "data" => $data,
            "genre" => $genres
        ];

        // dd($latest);
        return view("resource", $array);
    }
    public function popular(){
        $token = HTTP::withToken(config("services.tmdb.token"));
        $data = $token->get("https://api.themoviedb.org/3/movie/popular?region=")->json();
        $genre = $token->get("https://api.themoviedb.org/3/genre/movie/list")->json()["genres"];
        $genres = collect($genre)->mapWithKeys(fn($genres) => [$genres["id"] => $genres["name"]]);

        $array = [
            "title" => "Movie Popular",
            "data" => $data,
            "genre" => $genres
        ];

        // dd($data);
        return view("resource", $array);
    }
    public function topRated(){
        $token = HTTP::withToken(config("services.tmdb.token"));
        $data = $token->get("https://api.themoviedb.org/3/movie/top_rated?region=us")->json();
        $genre = $token->get("https://api.themoviedb.org/3/genre/movie/list")->json()["genres"];
        $genres = collect($genre)->mapWithKeys(fn($genres) => [$genres["id"] => $genres["name"]]);

        $array = [
            "title" => "Movie Top Rated",
            "data" => $data,
            "genre" => $genres
        ];

        // dd($data);
        return view("resource", $array);
    }
    public function details($id){
        $token = HTTP::withToken(config("services.tmdb.token"));
        $getData = $token->get("https://api.themoviedb.org/3/movie/" . $id);

        return view("details.blade.php", [
            "Data" => $getData,
        ]);
    }
    public function search(SearchRequest $search){
        $validated = $search->validated();

        $token = HTTP::withToken(config("services.tmdb.token"));
        $getData = $token->get("https://api.themoviedb.org/3/search/multi?query=" . $validated["search"])->json();
        // dd($getData);
        $data =  [
            "title" => "Movie Search",
            "data" => $getData
        ];
        return view("resource", $data);
    }

    public function trendings(){
        $token = HTTP::withToken(config("services.tmdb.token"));
        $getData = $token->get("https://api.themoviedb.org/3/trending/movie/week")->json();
        $dataGenre = $token->get("https://api.themoviedb.org/3/genre/movie/list")->json()["genres"];
        $genre = collect($dataGenre)->mapWithKeys(fn ($genres) => [$genres["id"] => $genres["name"]]);

        $array = [
            "title" => "Movie trending",
            "data" => $getData,
            "genre" => $genre,
        ];
        return view("resource", $array);
    }
}