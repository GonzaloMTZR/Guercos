<?php

namespace App\Http\Controllers;

use App\Fiesta;
use App\Paquetes;
use App\Producto;
use App\Cliente;
use App\abonos;
use Illuminate\Http\Request;

class FiestaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware(['role:AdminFiestas']);
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
        $comidas = Producto::all();

        return view ('modules.fiestas.create', compact('paquetes', 'comidas'));
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
        $fiesta->partyStatus = request('partyStatus');
        $fiesta->piñata = request('piñata');
        $fiesta->pastel = request('pastel');
        $fiesta->notas = request('notas');

        $fiesta->nombreNiño = request('nombreNiño');
        $fiesta->fechaNacNiño = request('fechaNacNiño');
        $fiesta->edadNiño = request('edadNiño');
        $fiesta->nombrePapa = request('nombrePapa');
        $fiesta->telefonoCasa = request('telefonoCasa');
        $fiesta->telefonoCelular = request('telefonoCelular');
        $fiesta->correo = request('correo');
        $fiesta->ciudad = request('ciudad');
        $fiesta->colonia = request('colonia');
        $fiesta->calle = request('calle');
        
        $fiesta->paquetes_id = 1;
        $fiesta->comidaNiños = 1;
        $fiesta->comidaAdulto = 1;
        $fiesta->cantidadComidaNiños = request('cantidadComidaNiños');
        $fiesta->cantidadComidaAdulto = request('cantidadComidaAdulto');
        $fiesta->manteles = request('manteles');
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
        
        return redirect('/fiestas')->with('success-message', 'Fiesta agendada con exito!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fiesta  $fiesta
     * @return \Illuminate\Http\Response
     */
    public function show(Fiesta $fiesta)
    {
        return view('modules.fiestas.show', compact('fiesta'));
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
        return view ('modules.fiestas.edit', compact('fiesta','paquetes'));
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
        $fiesta->fechaFiesta = request('fechaFiesta');
        $fiesta->fechaReservacion = request('fechaReservacion');
        $fiesta->horaInicio = request('horaInicio');
        $fiesta->horaFinal = request('horaFinal');
        $fiesta->horaComida = request('horaComida');
        $fiesta->salon = request('salon');
        $fiesta->partyStatus = request('partyStatus');
        $fiesta->piñata = request('piñata');
        $fiesta->pastel = request('pastel');
        $fiesta->notas = request('notas');

        $fiesta->nombreNiño = request('nombreNiño');
        $fiesta->fechaNacNiño = request('fechaNacNiño');
        $fiesta->edadNiño = request('edadNiño');
        $fiesta->nombrePapa = request('nombrePapa');
        $fiesta->telefonoCasa = request('telefonoCasa');
        $fiesta->telefonoCelular = request('telefonoCelular');
        $fiesta->correo = request('correo');
        $fiesta->ciudad = request('ciudad');
        $fiesta->colonia = request('colonia');
        $fiesta->calle = request('calle');
        
        //$fiesta->paquetes_id = 1;
        //$fiesta->comidaNiños = 1;
        //$fiesta->comidaAdulto = 1;
        $fiesta->cantidadComidaNiños = request('cantidadComidaNiños');
        $fiesta->cantidadComidaAdulto = request('cantidadComidaAdulto');
        $fiesta->manteles = request('manteles');
        /*$fiesta->totalPaquete = request('totalPaquete');
        $fiesta->total = request('total');
        $fiesta->chargeSheetNotes = request('chargeSheetNotes');
        $fiesta->porcentajeDescuento = request('porcentajeDescuento');*/


        $cliente = new Cliente();
        $cliente->nombre = request('nombrePapa');
        $cliente->nombreNiño = request('nombreNiño');
        $cliente->fechaNacNiño = request('fechaNacNiño');
        $cliente->telefonoCasa = request('telefonoCasa');
        $cliente->telefonoCelular = request('telefonoCelular');
        $cliente->correo = request('correo');
        $cliente->ciudad = request('ciudad');
        $cliente->colonia = request('colonia');
        $cliente->calle = request('calle');
        $fiesta->save();
        $cliente->save();
        
        
        return redirect('/fiestas')->with('success-message', 'Fiesta editada con exito!');
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
    
    /**
    * Los metodos addAbonoEfectivo y addAbonoTarjeta sirven para poder agregar los abonos a las fiestas
    * se usa una relacion de muchos a muchos en fiestas y abonos y el metodo attach para poder insertar 
    * los registros en la tabla intermedia.
    *
    * Ambas funciones reciben el id de la fiesta a la cual se desea agregar un abono.
    */
    public function addAbonoEfectivo(Request $request, Fiesta $fiesta)
    {
        $abono = new abonos();
        $abono->cantidadAbono = $request->input('cantidadAbono');
        $abono->save();
        
        $fiesta->abonos()->attach($abono->id, ['tipoPago' => $request->input('tipoPago')]); 
        return redirect()->back()->with('success-message', 'Pago de abono realizado con éxito!');
    }
  
    public function addAbonoTarjeta(Request $request, Fiesta $fiesta)
    {
        $abono = new abonos();
        $abono->cantidadAbono = $request->input('cantidadAbono');
        $abono->save();
        
        $fiesta->abonos()->attach($abono->id, ['tipoPago' => $request->input('tipoPago'),
                                              'pinConfirmacion' => $request->input('pinConfirmacion')] );
        return redirect()->back()->with('success-message', 'Pago de abono realizado con éxito!');
    }
    
    /**
    * Metodo para actualizar el campo de lo de liquidacion en la tabla de fiestas.
    * 
    * Recibe el id de la fiesta a la cual se va a liquidar el pago.
    */
    public function liquidarFiesta(Request $request, Fiesta $fiesta)
    { 
        //if($request->has())
        $fiesta->update(
            ['liquidacion' => $request->input('liquidacion')
        ]);
      
        return redirect()->back()->with('success-message', 'Fiesta liquidada con éxito!');
    }
}
