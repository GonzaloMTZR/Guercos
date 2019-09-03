<?php

namespace App\Http\Controllers;

use App\Paquetes;
use App\Producto;
use DB;
use Illuminate\Support\Facades\Input;
use App\CantidadPersonas;
use Illuminate\Http\Request;
use App\Http\Requests\StorePaquetesRequest;

class PaquetesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dias(){
          
      $paquete = Input::get('paquete');
      $dias = DB::table('cantidad_personas')
      ->select('periodo')
      ->groupBy('periodo')->where('paquete_id', '=', $paquete)->get();
      return response()->json($dias);
    }
  
    public function index()
    {
        $paquetes = Paquetes::all();
        return view ('modules.paquetes.index', compact('paquetes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = DB::table('productos')
          ->select('id','descripcion')
          ->where('area', 'Cocina')
          ->orderBy('descripcion', 'ASC')
          ->get();
        return view ('modules.paquetes.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaquetesRequest $request)
    {
        $paquete = new Paquetes();
        $cantidadPersonas = new CantidadPersonas();
      
        $cantidadPersonas->cantidad = $request->input('cantidad');
        $cantidadPersonas->precio = $request->input('precio');
        $cantidadPersonas->periodo = $request->input('periodo');
        $cantidadPersonas->save();
      
        $paquete->descripcionPaquete = $request->input('descripcionPaquete');
        $paquete->save();

        $paquete->cantidadPersonas()->attach($cantidadPersonas);
        //dd($paquete);

        $producto_id = $request->get('comidaNino');

        $sync_data = [];
        for($i = 0; $i < count($producto_id); $i++){
            $sync_data[$producto_id[$i]];
        }

        $paquete->productos()->sync($sync_data);
        //return redirect()->back();
        dd($paquete);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function show(Paquetes $paquete)
    {   //$paquetes = Paquetes::findOrFail($id);
        return view('modules.paquetes.show', compact('paquete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function edit(Paquetes $paquete)
    {   
        $cantidadPersonas = CantidadPersonas::all();
        $productos = Producto::all();
        return view ('modules.paquetes.edit', compact('cantidadPersonas', 'productos', 'paquete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paquetes $paquetes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paquetes $paquetes)
    {
        
    }
}
