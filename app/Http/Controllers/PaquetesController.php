<?php

namespace App\Http\Controllers;

use App\Paquetes;
use Illuminate\Http\Request;

class PaquetesController extends Controller
{

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Paquetes $paquetes)
    {
        //
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
        //
    }
}
