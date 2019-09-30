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
      
        $cantidadPersonas->cantidad = $request->input('cantidad'); //Cantidad de personas del paquete
        $cantidadPersonas->precio = $request->input('precio');     //Precio del paquete
        $cantidadPersonas->periodo = $request->input('periodo');  //Dias en los que esta disponible
        $paquete->descripcionPaquete = $request->input('descripcionPaquete'); //Nombre del paquete
        $cantidadPersonas->save();                                 //Se guardan los registros en la tabla de cantidad de personas
        $paquete->save();                                         //Se guarda el nombre del paquete
        $paquete->cantidadPersonas()->sync($cantidadPersonas); //Se insertan los registros en la tablde muchos a muchos de "cantidad_persona_paquete"
        
        $producto_id = $request->input('comidaPaquete');         //Se obtiene el id de los productos 

        $paquete->productos()->sync((array)$producto_id);       //Se guardan los datos en la tabla de muchos a muchos de "paquete_producto"
      
        return redirect('/paquetes')->with('success-message', 'Paquete creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function show(Paquetes $paquete)
    {   
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
        $cantidadPersonas = CantidadPersonas::findOrFail($paquete->id);
        $productos = DB::table('productos')
          ->select('id','descripcion')
          ->where('area', 'Cocina')
          ->orderBy('descripcion', 'ASC')
          ->get();
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
        $paquete = new Paquetes();
        $cantidadPersonas = new CantidadPersonas();
      
        $cantidadPersonas->cantidad = $request->input('cantidad'); //Cantidad de personas del paquete
        $cantidadPersonas->precio = $request->input('precio');     //Precio del paquete
        $cantidadPersonas->periodo = $request->input('periodo');  //Dias en los que esta disponible
        $paquete->descripcionPaquete = $request->input('descripcionPaquete'); //Nombre del paquete
        $cantidadPersonas->save();                                 //Se guardan los registros en la tabla de cantidad de personas
        $paquete->save();                                         //Se guarda el nombre del paquete
        $paquete->cantidadPersonas()->updateExistingPivot($paquete->id, $cantidadPersonas); //Se insertan los registros en la tablde muchos a muchos de "cantidad_persona_paquete"
        
        $producto_id = $request->input('comidaPaquete');         //Se obtiene el id de los productos 

        $paquete->productos()->updateExistingPivot($paquete->id, (array)$producto_id);       //Se guardan los datos en la tabla de muchos a muchos de "paquete_producto"
      
        return redirect('/paquetes')->with('success-message', 'Paquete editado con exito!');
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
