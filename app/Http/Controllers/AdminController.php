<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
      $halaman = 'siswa';
      $siswa = ['Rasmus Lerdorf','Taylor Otwell','Brendan Eich','Jhon Resig'];
      return view('admin.index',compact('halaman','siswa'));
    }

    public function create()
    {
      return view('admin.create');
    }

    public function store(Request $request)
    {
      $siswa = $request->all();
      return $siswa;
    }

    public function about()
    {
      $halaman = 'about';
      return view('admin.about', compact('halaman'));
    }
}
