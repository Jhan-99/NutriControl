<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function calendario()
    {
        return view('paginas.calendario');
    }
    public function datos()
    {
        return view('paginas.datos');
    }

        public function documentacion()
    {
        return view('paginas.documentacion');
    }


    public function homebanner()
    {
        return view('home');
    }
}
