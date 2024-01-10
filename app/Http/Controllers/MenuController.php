<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
   
    public function Contacto()
    {
        return view('menu.contacto');
    }

    public function  Nosotros()
    {
        return view('menu.nosotros');
    }
    public function Carrito()
    {
        return view('menu.carrito');
    }
    
    public function Checkout()
    {
        return view('menu.checkout');
    }
 
    public function Detalle()
    {
        return view('menu.detalle');
    }
}
