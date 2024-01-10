<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TratamientosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Tratamientos()
    {
        $servicios = DB::table('detalle_servicios')
            ->crossJoin('servicios')
            ->select('*')
            ->where('servicios.id', '=', DB::raw('detalle_servicios.servicios_id'))

            ->where('servicios.tipo_id', '=', '3')
            ->get();

        return view('tratamientos.tratamientos', compact('servicios'));

        /* 

        if ($promociones->count() >= 1) {
            return view('serviciosMasculinos.promociones', compact('promociones'));
        } else {
            return view('serviciosMasculinos.promociones', compact('promociones'));

            return redirect()->back();
        } */
    }
}
