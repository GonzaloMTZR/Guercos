<?php

namespace App\Http\Controllers;

use App\Promociones;
use Cliente;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\StorePromocionesRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
        $promociones = Promociones::orderBy('descripcion', 'asc')->get();
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
          $name = time().'-'.$file->getClientOriginalName();
          $public_path = public_path();
          $file->move($public_path.'/imagenes'.'/promociones/', $name);
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
         $public_path = public_path(); //Variable del public path

        try{
          $promociones->delete();
          $image_path = $public_path.'/imagenes/promociones/'.$promociones->imagen; //Concatena el public path con las carpetas y el nombre de la imagen
          if(File::exists($image_path)) 
              File::delete($image_path); //Elimina la imagen de la carpeta

        }catch(\Exception $e){
            return redirect('/promociones')->with('error-message', 'La promoción no se ha podido eliminar');
        }

        return redirect('/promociones')->with('success-message', 'Promocion eliminada con exito!');
    }
    
}
