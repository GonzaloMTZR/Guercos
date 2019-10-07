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

        $paquete->descripcionPaquete = $request->input('descripcionPaquete');
        $paquete->cantidad = $request->input('cantidad'); 
        $paquete->precio = $request->input('precio');
        $paquete->periodo = $request->input('periodo');
        $paquete->save();                                         
        
        $producto_id = $request->input('comidaPaquete');         //Se obtiene el id de los productos 

        $paquete->productos()->sync((array)$producto_id);       //Se guardan los datos en la tabla de muchos a muchos de "paquete_producto"
      
        return redirect('/paquetes')->with('success-message', 'Paquete creado con éxito!');
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
        $productos = DB::table('productos')
          ->select('id','descripcion')
          ->where('area', 'Cocina')
          ->orderBy('descripcion', 'ASC')
          ->get();
        return view ('modules.paquetes.edit', compact('productos', 'paquete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function update(StorePaquetesRequest $request, $id)
    {
        $paquete = Paquetes::findOrFail($id);
        $paquete->descripcionPaquete = $request->input('descripcionPaquete');
        $paquete->cantidad = $request->input('cantidad'); 
        $paquete->precio = $request->input('precio');
        $paquete->periodo = $request->input('periodo');
        $paquete->save();                                         
        
        $producto_id = $request->input('comidaPaquete');
        $id = $paquete->id;
        $paquete->find($id)->productos()->sync((array)$producto_id);
      
        return redirect('/paquetes')->with('success-message', 'Paquete editado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paquetes  $paquetes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $paquetes = Paquetes::findOrFail($id);
      $paquetes->productos()->detach();
      $paquetes->delete();
      return redirect('/paquetes')->with('success-message', 'Paquete eliminado con éxito!');;
    }
  
    /**
    * Funcion para el select dinamico de los paquetes
    * este obtiene el periodo del paquete
    */
    public function getDias(){      
      $paquete = Input::get('paquete');
      $dias = DB::table('paquetes')
      ->select('periodo')
      ->groupBy('periodo')->where('id', '=', $paquete)->get();
      return response()->json($dias);
      
    }
  
    /**
    * Funcion para el select dinamico de los paquetes
    * este obtiene las comidas del paquete
    */
    public function getComida(){
      $paquete = Input::get('paquete');
      $comida = DB::table('paquete_producto')
      ->select('producto_id', 'productos.descripcion')
      ->Join('productos', 'productos.id', '=', 'paquete_producto.producto_id')
      ->where('paquete_id', '=', $paquete)
      ->get();
      return response()->json($comida);

    }
}
