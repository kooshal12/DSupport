<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    public function play_games(){

     return view('games.play_games');

   }
}
