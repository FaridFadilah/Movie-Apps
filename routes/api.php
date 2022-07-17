<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| 947198d61448df6d720d7072e9ff17fc -> Token to API v3
| eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5NDcxOThkNjE0NDhkZjZkNzIwZDcwNzJlOWZmMTdmYyIsInN1YiI6IjYyYzU1YmVmYzAzNDhiMDQxM2UwMjFiMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OFyXx1Am4_FpBmLSjbVzIX1BjxImQXyRWKBLgcCc-uU -> Token to API v4
|
|https://api.themoviedb.org/3/movie/550?api_key=947198d61448df6d720d7072e9ff17fc -> xample for V3
| https://api.themoviedb.org/3/movie/76341'  -> xample for V4
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});