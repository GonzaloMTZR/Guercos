<?php

namespace App\Http\Controllers;

use App\Producto;
use App\User;
use Auth;
use Alert;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductosRequest;

class ProductoController extends Controller
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
        $productos = Producto::all();
        return view('modules.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductosRequest $request)
    {
        if ($request->hasFile('imagenProducto')) {
            $file = $request->file('imagenProducto');
            $name = time().$file->getClientOriginalName();
            $public_path = public_path();
            $file->move($public_path.'/imagenes/productos/', $name);
            //$file->move('images/',$name);
            //return $name;
        }else{
            $name ='logo-guercos.png';
        } 

        $producto = Producto::create([
            'codigo' => $request->codigo,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'stock' => $request->cantidad,
            'area' => $request->area,
            'infinito' => $request->infinito,
            'tipoUnidad' => $request->tipoUnidad,
            'categoria' => $request->categoria,
            'imagenProducto' => $name,
        ]);
        
        return redirect('/productos')->with('success-message', 'Producto agregado con exito!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('modules.productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        if ($request->hasFile('imagenProducto')) {
            $file = $request->file('imagenProducto');
            $name = time().$file->getClientOriginalName();
            $public_path = public_path();
            $file->move($public_path.'/imagenes/productos/', $name);
        }else{
            $name = $producto->imagenProducto;
        }

        $producto->codigo = $request->input('codigo');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('cantidad');
        $producto->area = $request->input('area');
        $producto->infinito = $request->input('infinito');
        $producto->tipoUnidad = $request->input('tipoUnidad');
        $producto->categoria = $request->input('categoria');
        $producto->imagenProducto = $name;
        $producto->save();
        
        //return $producto;
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect('/productos');
    }


    /**
     * Funcion para agregar stock en el inventario
     * 
     * @param Recibe el request del formulario y el id del producto 
     */
    public function addStock(Request $request, Producto $producto)
    {

    }
}
