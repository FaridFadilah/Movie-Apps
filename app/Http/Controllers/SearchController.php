<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller{
    public function search(SearchRequest $search){
        $validated = $search->validated();

        $token = Http::withToken(config("services.tmdb.token"));
        $getData = $token->get("https://api.themoviedb.org/3/search/multi?query=" . $validated["search"])->json();
        // dd($getData);
        
        $data =  [
            "title" => "Movie Search",
            "data" => $getData
        ];
        return view("movieResource", $data);
    }
}