<?php

namespace App\Http\Controllers;

use App\Cocina;
use Illuminate\Http\Request;

class CocinaController extends Controller
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
        return view('modules.cocina.index');
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
     * @param  \App\Cocina  $cocina
     * @return \Illuminate\Http\Response
     */
    public function show(Cocina $cocina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cocina  $cocina
     * @return \Illuminate\Http\Response
     */
    public function edit(Cocina $cocina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cocina  $cocina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cocina $cocina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cocina  $cocina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cocina $cocina)
    {
        //
    }
}
