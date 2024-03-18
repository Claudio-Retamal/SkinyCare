<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiciosFemeninosController extends Controller
{
    
    public function PromocionFemenina()
    {
        //
        $promociones = DB::table('detalle_servicios')
            ->crossJoin('servicios')
            ->select('*')
            ->where('servicios.id', '=', DB::raw('detalle_servicios.servicios_id'))
            ->where('servicios.sexo', '=', '2')
            ->where('servicios.tipo_id', '=', '1')
            ->get();

        return view('serviciosFemeninos.promociones', compact('promociones'));
    }

    
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

    
    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
