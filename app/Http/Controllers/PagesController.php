<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    public function play_games(){

     return view('games.play_games');

   }
   public function contactExpert(){

     return view('pages.contactexpert');

   }
   public function dislexiyachildquestion(){

     return view('pages.dislexiyachildquestion');

   }
   public function dislexiyateenquestion(){

     return view('pages.dislexiyateenquestion');

   }

}
