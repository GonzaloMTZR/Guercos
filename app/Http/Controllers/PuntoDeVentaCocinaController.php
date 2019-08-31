<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Producto;
use App\Venta;
use Illuminate\Support\Facades\Validator;


class PuntoDeVentaCocinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $productos = Producto::orderBy('descripcion','ASC')->get();
        //$productos = Producto::all();
        return view('modules.POVC.create', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $productos = Producto::all();
        return view('modules.POVC.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venta = new Venta;
        $venta->user_id = $request->get('user_id');
        $venta->tipoComprobante = $request->get('tipo_comprobante');
        $venta->serieComprobante = $request->get('serie_comprobante');
        $venta->folio = $request->get('num_comprobante');
        $venta->totalVenta = $request->get('total_venta');
        $venta -> save();
        
	      $cantidad = $request->get('cantidad');
        $descuento = $request->get('descuento');
        $producto_id = $request->get('id_articulo');

        $sync_data = [];
        for($i = 0; $i < count($producto_id); $i++){
            $sync_data[$producto_id[$i]] = ['descuento' => $descuento[$i], 'cantidad' => $cantidad[$i]];
        }
        if($venta->productos()->sync($sync_data)){
            return redirect()->back()->with('success-message', 'Venta realizada con exito!');
        }else{
            return redirect()->back()->with('danger-message', 'No se pudo realizar la venta');
        }
        
        //dd($venta);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
