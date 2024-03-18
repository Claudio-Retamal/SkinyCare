<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Zonas;
use Illuminate\Http\Request;
use McKenziearts\Notify\Notifications\Notification;



class ZonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $zonas = Zonas::all();
        return view('pages.laravel-examples.zonas', compact('zonas'));
    }
    
    public function store(Request $request)
    {

        if (!$request->input('nombre')) {
            drakify('error'); // for success alert
            return redirect('zonas-admin');
        } else {
            $new_zona = new Zonas();
            $new_zona->nombre = $request->input('nombre');
            $new_zona->save();
            drakify('success'); // for success aler
            return redirect('zonas-admin');
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
