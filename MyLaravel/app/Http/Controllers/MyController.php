<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movies;

class MyController extends Controller
{
    public function home(){

        $movies = Movies::all();
        // dd($movies);


        return view('pages.home', compact('movies'));
    }

    public function movie($id){

        $movie = Movies::findOrFail($id);

        return view('pages.movie', compact('movie'));
    }
}
