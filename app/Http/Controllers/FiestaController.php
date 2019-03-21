<?php

namespace App\Http\Controllers;

use App\Fiesta;
use App\Paquetes;
use App\Periodo;
use App\Producto;
use App\Cliente;
use Illuminate\Http\Request;

class FiestaController extends Controller
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
    {   $fiestas = Fiesta::All();
        return view ('modules.fiestas.index', compact('fiestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$paquetes = Paquetes::pluck('descripcionPaquete', 'id');
        $periodos = Periodo::pluck('descripcionPeriodo', 'id');
        $comidas = Producto::pluck('descripcion', 'id');*/

        $paquetes = Paquetes::all();
        $periodos = Periodo::all();
        $comidas = Producto::all();

        return view ('modules.fiestas.create', compact('paquetes','periodos', 'comidas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Fiesta $fiesta)
    {
        $fiesta->fechaFiesta = request('fechaFiesta');
        $fiesta->fechaReservacion = request('fechaReservacion');
        $fiesta->horaInicio = request('horaInicio');
        $fiesta->horaFinal = request('horaFinal');
        $fiesta->horaComida = request('horaComida');
        $fiesta->salon = request('salon');
        $fiesta->partyStatus = request('estatusFiesta');
        $fiesta->piñata = request('piñata');
        $fiesta->pastel = request('pastel');
        $fiesta->notas = request('notas');

        $fiesta->nombreNiño = request('nombreNino');
        $fiesta->fechaNacNiño = request('fechaCumpleanos');
        $fiesta->edadNiño = request('edadNino');
        $fiesta->nombrePapa = request('nombrePapa');
        $fiesta->telefonoCasa = request('telefonoCasa');
        $fiesta->telefonoCelular = request('telefonoCel');
        $fiesta->correo = request('correo');
        $fiesta->ciudad = request('ciudad');
        $fiesta->colonia = request('colonia');
        $fiesta->calle = request('calle');
        
        $fiesta->idPaquete = request('idPaquete');
        $fiesta->idPeriodo = request('idPeriodo');
        $fiesta->comidaNiños = request('comidaNiño');
        $fiesta->comidaAdulto = request('comidaAdulto');
        $fiesta->cantidadComidaNiños = request('cantidadComidaNiños');
        $fiesta->cantidadComidaAdulto = request('cantidadComidaAdulto');
        /*$fiesta->totalPaquete = request('totalPaquete');
        $fiesta->total = request('total');
        $fiesta->chargeSheetNotes = request('chargeSheetNotes');
        $fiesta->porcentajeDescuento = request('porcentajeDescuento');*/


        $cliente = new Cliente();
        $cliente->nombre = request('nombrePapa');
        $cliente->nombreNiño = request('nombreNino');
        $cliente->fechaNacNiño = request('fechaCumpleanos');
        $cliente->telefonoCasa = request('telefonoCasa');
        $cliente->telefonoCelular = request('telefonoCel');
        $cliente->correo = request('correo');
        $cliente->ciudad = request('ciudad');
        $cliente->colonia = request('colonia');
        $cliente->calle = request('calle');

        $cliente->save();
        $fiesta->save();

        return redirect('/fiestas');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fiesta  $fiesta
     * @return \Illuminate\Http\Response
     */
    public function show(Fiesta $fiesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fiesta  $fiesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Fiesta $fiesta)
    {
        $paquetes = Paquetes::all();
        $periodos = Periodo::all();

        return view ('modules.fiestas.edit', compact('paquetes','periodos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fiesta  $fiesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fiesta $fiesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fiesta  $fiesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fiesta $fiesta)
    {
        //
    }
}
