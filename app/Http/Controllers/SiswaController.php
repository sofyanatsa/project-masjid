<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index()
    {
      $halaman = 'siswa';
      $siswa = ['Rasmus Lerdorf','Taylor Otwell','Brendan Eich','Jhon Resig'];
      return view('siswa.index',compact('halaman','siswa'));
    }

    public function create()
    {
      return view('siswa.create');
    }

    public function store(Request $request)
    {
      $siswa = $request->all();
      return $siswa;
    }
}
