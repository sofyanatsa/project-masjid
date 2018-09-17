<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function homepage()
    {
      return view('homepage');
    }

    public function about()
    {
      $halaman = 'about';
      return view('about', compact('halaman'));
    }
}
