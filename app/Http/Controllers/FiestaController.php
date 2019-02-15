<?php

namespace App\Http\Controllers;

use App\Fiesta;
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
    {
        return view ('modules.fiestas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('modules.fiestas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Fiesta $fiesta)
    {
        $fiesta->folioFiesta = request('folioFiesta');
        $fiesta->fechaFiesta = request('fechaFiesta');
        $fiesta->horaInicio = request('horaInicio');
        $fiesta->horaFinal = request('horaFinal');
        $fiesta->horaComida = request('horaComida');
        $fiesta->idSalon = request('idSalon');
        $fiesta->nombrePapa = request('nombrePapa');
        $fiesta->nombreNiño = request('nombreNiño');
        $fiesta->fechaNacimiento = request('fechaNacimiento');
        $fiesta->edadNiño = request('edadNiño');
        $fiesta->calle = request('calle');
        $fiesta->colonia = request('colonia');
        $fiesta->telefonoCasa = request('telefonoCasa');
        $fiesta->telefonoCelular = request('telefonoCelular');
        $fiesta->correo = request('correo');
        $fiesta->fechaReservacion = request('fechaReservacion');
        $fiesta->idPaquete = request('idPaquete');
        $fiesta->idPeriodo = request('idPeriodo');
        $fiesta->idComidaNiño = request('idComidaNiño');
        $fiesta->idComidaAdulto = request('idComidaAdulto');
        $fiesta->cantidadComidaNiños = request('cantidadComidaNiños');
        $fiesta->cantidadComidaAdulto = request('cantidadComidaAdulto');
        $fiesta->totalPaquete = request('totalPaquete');
        $fiesta->total = request('total');
        $fiesta->notas = request('notas');
        $fiesta->idPartyStatus = request('idPartyStatus');
        $fiesta->piñata = request('piñata');
        $fiesta->pastel = request('pastel');
        $fiesta->chargeSheetNotes = request('chargeSheetNotes');
        $fiesta->porcentajeDescuento = request('porcentajeDescuento');

        $fiesta->save();

        return $fiesta;

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
        //
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
