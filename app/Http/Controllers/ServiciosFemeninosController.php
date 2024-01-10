<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiciosFemeninosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function PromocionFemenina()
    {
        //
        $promociones = DB::table('detalle_servicios')
        ->crossJoin('servicios')
        ->select('*')
        ->where('servicios.id', '=', DB::raw('detalle_servicios.servicios_id'))
        ->where('servicios.sexo', '=', '2')
        ->where('servicios.tipo_id', '=', '2')
        ->get();

    return view('serviciosFemeninos.promociones', compact('promociones'));
  /* 

        if ($promociones->count() >= 1) {
            return view('serviciosMasculinos.promociones', compact('promociones'));
        } else {
            return view('serviciosMasculinos.promociones', compact('promociones'));

            return redirect()->back();
        } */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function IndividualesFemenino()
    {
        //
        $individuales = DB::table('detalle_servicios')
        ->crossJoin('servicios')
        ->select('*')
        ->where('servicios.id', '=', DB::raw('detalle_servicios.servicios_id'))
        ->where('servicios.sexo', '=', '2')
        ->where('servicios.tipo_id', '=', '4')
        ->get();

    return view('serviciosFemeninos.individuales', compact('individuales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
