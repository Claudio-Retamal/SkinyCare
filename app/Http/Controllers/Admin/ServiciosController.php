<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetalleServicios;
use App\Models\Servicios;
use App\Models\Temporal;
use App\Models\TipoServicios;
use App\Models\Zonas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;



class ServiciosController extends Controller
{
    public function index()
    {

        $servicios =  DB::table('servicios')
            ->crossJoin('detalle_servicios')
            ->crossJoin('tipo_servicios')
            ->select('servicios.id', 'servicios.nombre', 'servicios.sexo', 'servicios.zonas', 'tipo_servicios.tipo_servicio', 'detalle_servicios.url_imagen', 'servicios.cantidad_min_sesion', 'servicios.cantidad_max_sesion', 'servicios.precio_min_sesion', 'servicios.precio_max_sesion', 'servicios.estado', 'servicios.created_at')
            ->where('servicios.id', '=', DB::raw('detalle_servicios.servicios_id'))
            ->where('servicios.tipo_id', '=', DB::raw('tipo_servicios.id'))
            ->paginate(3);
        //      dd($servicios);



        $tipo_servicios = TipoServicios::all();
        $zonas = Zonas::all();
        return view('pages.laravel-examples.servicios', compact('servicios', 'tipo_servicios', 'zonas'));
    }

    public function store(Request $request)
    {


        $validated = $request->validate([
            'imagen' => 'required|mimes:jpg,jpeg,bmp,png',
            'name' => 'required|',
            'tipo' => 'required',
            'sexo' => 'required',
            'descuento' => 'required|numeric',
            'zonas' => 'required',
            'min_price' => 'required|numeric',
            'max_price' => 'required|numeric',
            'descripcion' => 'required',
            'cant_min' => 'required|numeric',
            'cant_max' => 'required|numeric'
        ]);

        if ($validated) {
            $temporal = new Temporal();
            $image = $request->file('imagen')->store('public/images');

            $url = Storage::url($image);
            $zona =  $request->input('zonas');
            $zonas = implode('-', array_values($zona));
            $temporal->nombre = $request->input('name');
            $temporal->sexo = $request->input('sexo');
            $temporal->tipo_id = $request->input('tipo');
            $temporal->zonas = $zonas;
            $temporal->cantidad_min_sesion = $request->input('cant_min');
            $temporal->cantidad_max_sesion = $request->input('cant_max');
            $temporal->precio_min_sesion = $request->input('min_price');
            $temporal->precio_max_sesion = $request->input('max_price');
            $temporal->url_imagen = $url;
            $temporal->descuento = $request->input('descuento');
            $temporal->descripcion = $request->input('descripcion');
            $temporal->save();
            drakify('success');
            return redirect()->route('servicios-admin');
        } else {
            drakify('error');
            return redirect()->back();
        }
    }

    public function edit(string $id)
    {
        $decriptId =  Crypt::decrypt($id);

        $zonas =    DB::table('zonas')->get();
        $tipo_servicios = DB::table('tipo_servicios')->get();;

        $servicios = DB::table('servicios')
            ->crossJoin('detalle_servicios')
            ->select('*')
            ->where('servicios.id', '=', DB::raw('detalle_servicios.servicios_id'))
            ->where('servicios.id', '=', $decriptId)
            ->get();

        return view('pages.laravel-examples.servicios-edit', compact('servicios', 'zonas', 'tipo_servicios'));
    }

    public function update(Request $request, string $id)
    {

        $decriptId =  Crypt::decrypt($id);
        $data = request()->except(['_token', '_method']);

        # Update with contain image
        if ($request->hasFile('imagen')) {

            $servicio = DB::table('detalle_servicios')->crossJoin('servicios')
                ->select('detalle_servicios.url_imagen')
                ->where('servicios.id', '=', $decriptId)
                ->get();

            Storage::delete('public/images' . $servicio);
            $data = $request->file('imagen')->store('public/images');
            $url = Storage::url($data);

            //hacerlo tipo insert
            $zona =  $request->input('zonas');
            $zonas = implode(' ', array_values($zona));

            DB::table('servicios')
                ->where('id', $decriptId)
                ->update([
                    'nombre' => $request->input('nombre'),
                    'sexo' => $request->input('sexo'),
                    'cantidad_min_sesion' => $request->input('cantidad_min_sesion'),
                    'cantidad_max_sesion' => $request->input('cantidad_max_sesion'),
                    'precio_min_sesion' => $request->input('precio_min_sesion'),
                    'precio_max_sesion' => $request->input('precio_max_sesion'),
                    'zonas' => $zonas,
                    'tipo_id' => $request->input('tipo_id'),
                    // y ahi mas campose //  
                ]);

            //get image

            $detalle =  DB::table('detalle_servicios')->where('detalle_servicios.id', '=', $decriptId)
                ->update([
                    'url_imagen' => $url,
                    'descuento' => $request->input('descuento'),
                    'descripcion' => $request->input('descripcion')
                    // y ahi mas campose //  
                ]);


            $servicios =  DB::table('servicios')
                ->crossJoin('detalle_servicios')
                ->crossJoin('tipo_servicios')
                ->select('servicios.id', 'servicios.nombre', 'servicios.sexo', 'servicios.zonas', 'tipo_servicios.tipo_servicio', 'detalle_servicios.url_imagen', 'servicios.cantidad_min_sesion', 'servicios.cantidad_max_sesion', 'servicios.precio_min_sesion', 'servicios.precio_max_sesion', 'servicios.estado', 'servicios.created_at')
                ->where('servicios.id', '=', DB::raw('detalle_servicios.servicios_id'))
                ->where('servicios.tipo_id', '=', DB::raw('tipo_servicios.id'))
                ->paginate(5);

            $tipo_servicios = TipoServicios::all();
            $zonas = Zonas::all();
            return view('pages.laravel-examples.servicios', compact('servicios', 'tipo_servicios', 'zonas'));
        } else {


            //get image
            //hacerlo tipo insert
            $getZona =  $request->input('zonas');
            $getZonas = implode('+', array_values($getZona));

            DB::table('servicios')
                ->where('id', $decriptId)
                ->update([
                    'nombre' => $request->input('nombre'),
                    'sexo' => $request->input('sexo'),
                    'cantidad_min_sesion' => $request->input('cantidad_min_sesion'),
                    'cantidad_max_sesion' => $request->input('cantidad_max_sesion'),
                    'precio_min_sesion' => $request->input('precio_min_sesion'),
                    'precio_max_sesion' => $request->input('precio_max_sesion'),
                    'zonas' => $getZonas,
                    'tipo_id' => $request->input('tipo_id'),
                    // y ahi mas campose //  
                ]);

            $detalle =  DB::table('detalle_servicios')->where('detalle_servicios.id', '=', $decriptId)
                ->update([
                    'descuento' => $request->input('descuento'),
                    'descripcion' => $request->input('descripcion')
                    // y ahi mas campose //  
                ]);
            //get image

            $servicios =  DB::table('servicios')
                ->crossJoin('detalle_servicios')
                ->crossJoin('tipo_servicios')
                ->select('servicios.id', 'servicios.nombre', 'servicios.sexo', 'servicios.zonas', 'tipo_servicios.tipo_servicio', 'detalle_servicios.url_imagen', 'servicios.cantidad_min_sesion', 'servicios.cantidad_max_sesion', 'servicios.precio_min_sesion', 'servicios.precio_max_sesion', 'servicios.estado', 'servicios.created_at')
                ->where('servicios.id', '=', DB::raw('detalle_servicios.servicios_id'))
                ->where('servicios.tipo_id', '=', DB::raw('tipo_servicios.id'))
                ->paginate(5);

            $tipo_servicios = TipoServicios::all();
            $zonas = Zonas::all();
            return view('pages.laravel-examples.servicios', compact('servicios', 'tipo_servicios', 'zonas'));

            // y ahi mas campose //  

        }
    }

    public function destroy(string $id)
    {
        //
    }
}
