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

        public function inventario()
    {
        return view('paginas.inventario');
    }
        public function categorias()
    {
        return view('paginas.categorias');
    }

          public function facturas()
    {
        return view('paginas.facturas');
    }
          public function creditos()
    {
        return view('paginas.creditos');
    }


    public function proveedores()
    {
        return view('paginas.proveedores');
    }

        public function clientes()
    {
        return view('paginas.clientes');
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
