<?php

namespace App\Http\Controllers;

use App\Promociones;
use Cliente;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\StorePromocionesRequest;

class PromocionesController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }
  
   
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promociones = Promociones::all();
        return view('modules.promociones.index', compact('promociones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.promociones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromocionesRequest $request)
    {
      $promociones = new Promociones();
      
      if ($request->hasFile('imagen')) {
          $file = $request->file('imagen');
          $name = time().$file->getClientOriginalName();
          $public_path = public_path();
          $file->move($public_path.'/imagenes/promociones/', $name);
      }else{
          $name ='logo-guercos.png';
      }
      
      
      $promociones->nombre = $request->input('nombre');
      $promociones->descripcion = $request->input('descripcion');
      $promociones->dias = $request->input('dias');
      $promociones->fechaInicio = $request->input('fechaInicio');
      $promociones->fechaTermino = $request->input('fechaTermino');
      $promociones->imagen = $name;
      $promociones->save();
      
      return redirect('/promociones')->with('success-message', 'Promocion creada con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function show(Promociones $promociones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promocion = Promociones::FindOrFail($id);
        return view('modules.promociones.edit', compact('promocion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $promociones = Promociones::FindOrFail($id);
        
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $public_path = public_path();
            $file->move($public_path.'/imagenes/promociones/', $name);
        }else{
            $name =$promociones->imagen;
        }
        
        
        $promociones->nombre = $request->input('nombre');
        $promociones->descripcion = $request->input('descripcion');
        $promociones->dias = $request->input('dias');
        $promociones->fechaInicio = $request->input('fechaInicio');
        $promociones->fechaTermino = $request->input('fechaTermino');
        $promociones->imagen = $name;
        $promociones->save();
        
        return redirect('/promociones')->with('success-message', 'Promocion editada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $promociones = Promociones::findOrFail($id);
       $promociones->delete();
       return redirect('/promociones');
    }
    
}
