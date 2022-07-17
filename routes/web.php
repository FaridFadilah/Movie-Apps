<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TvController;
use App\Http\Controllers\MoviesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/", function(){
    $popularMovie = HTTP::withToken(config("services.tmdb.token"))->get("https://api.themoviedb.org/3/movie/popular")->json();

    $upcomingMovie = HTTP::withToken(config("services.tmdb.token"))->get("https://api.themoviedb.org/3/movie/upcoming")->json();
    $popularTv = HTTP::withToken(config("services.tmdb.token"))->get("https://api.themoviedb.org/3/tv/popular")->json();
        
    $genreArrayMovie = HTTP::withToken(config("services.tmdb.token"))->get("https://api.themoviedb.org/3/genre/movie/list")->json()["genres"];
    $genresMovie = collect($genreArrayMovie)->mapWithKeys(fn ($genre) => [$genre["id"] => $genre["name"]]);

    $genreArrayTV = HTTP::withToken(config("services.tmdb.token"))->get("https://api.themoviedb.org/3/genre/tv/list")->json()["genres"];
    $genresTV = collect($genreArrayTV)->mapWithKeys(fn ($genre) => [$genre["id"] => $genre["name"]]);

    // dump($upcomingMovie);
    return view("index", [
        "popular" => $popularMovie,
        "tv" => $popularTv,
        "genresMovie" => $genresMovie,
        "genresTv" => $genresTV,
        "upComingTv" => $upcomingMovie
    ]);  
})->name("home");
Route::get("/tags", function(){

})->name("Tags");

Route::controller(MoviesController::class)->name("movie")->group(function() {
    Route::get("/movies", "popular")->name("Popular");
    Route::get("/movies/trendings", "trendings")->name("Trending");
    Route::get("/movies/upcoming", "upcoming")->name("Upcoming");
    Route::get("/movies/details/{id}", "details")->name("Details");
    Route::post("/movies/search", "search")->name("Search");
});

Route::controller(TvController::class)->name("tv")->group(function(){
    Route::get("/tv", "popular")->name("Popular");
    Route::get("/tv/trendings", "trendings")->name("Trendings");
    Route::get("/tv/upcomings", "upcoming")->name("Upcoming");
    Route::get("/tv/details/{id}", "details")->name("Details");
});