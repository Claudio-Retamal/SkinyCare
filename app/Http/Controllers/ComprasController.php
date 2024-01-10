<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function Carro()
    {
        return view('layouts.compras.carro');
    }
}
