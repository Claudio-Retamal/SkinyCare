<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Zonas;
use Illuminate\Http\Request;

class ZonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $zonas = Zonas::all();
        return view('layouts.zonas.index', compact('zonas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nombre' => 'required|max:255',
        ]);

        if ($validated) {
           
        $new_zona = new Zonas();
        $new_zona->nombre = $request->input('nombre');
        $new_zona->save();
        return redirect()->route('admin/zonas')->with('success','ALmacenado');
        } 
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