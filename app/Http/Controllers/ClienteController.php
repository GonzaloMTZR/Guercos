<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClientesRequest;

class ClienteController extends Controller
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
        $clientes = Cliente::all();
        return view('modules.clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Cliente $cliente, StoreClientesRequest $request)
    {
        $cliente->nombre = $request->input('nombrePapa');
        $cliente->nombreNiño = $request->input('nombreNiño');
        $cliente->fechaNacNiño = $request->input('fechaNacNiño');
        $cliente->telefonoCasa = $request->input('telefonoCasa');
        $cliente->telefonoCelular = $request->input('telefonoCelular');
        $cliente->correo = $request->input('correo');
        $cliente->ciudad = $request->input('ciudad');
        $cliente->colonia = $request->input('colonia');
        $cliente->calle = $request->input('calle');

        $cliente->save();

        return redirect('/clientes')->with('success-message', 'Cliente agregado con exito!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
  
    /**
    * Funcion para poder enviar los correos a los clientes
    */
    public function sendEMail(){
      
    }
}
