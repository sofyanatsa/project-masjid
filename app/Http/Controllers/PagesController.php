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

    public function praadzan()
    {
      return view('praadzan');
    }

    public function praiqomah()
    {
      return view('praiqomah');
    }

}
