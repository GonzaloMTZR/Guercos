@extends('layouts.template')
@section('title', '- Agendar fiesta')
@section('css')
    <link rel="stylesheet" href="{{asset('admin/bower_components/select2/css/select2.min.css')}}"/>
    
    <style>
        .StripeElement {
        box-sizing: border-box;
      
        height: 40px;
      
        padding: 10px 12px;
      
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;
      
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
        }
      
        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }
        
        .StripeElement--invalid {
            border-color: #fa755a;
        }
      
        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
@endsection

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-plus bg-c-lite-green"></i>
                    <div class="d-inline">
                        <h4>Agendar fiesta</h4>
                        <span>Formulario para agendar una fiesta.</span>
                        <!--<form action="POST">
                            <div class="input-group input-group-button input-group-primary">
                                <input type="text" class="form-control" placeholder="Buscar empleado...">
                                <button type="submit " class="btn btn-primary input-group-addon" id="basic-addon1">Buscar</button>
                            </div>
                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">

        <div class="card-block">
            <form action="/fiestas" method="post" enctype="multipart/form-data">
                @csrf

                <h4 class="sub-title">Datos Personales</h4>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="my-input">Nombre del festejado <label class="text-danger">*</label></label>
                        <input name="nombreNino" class="form-control" type="text">
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Fecha de cumpleaños <label class="text-danger">*</label></label>
                        <input name="fechaCumpleanos" class="form-control" type="date">
                    </div>    

                    <div class="col-sm-3">
                        <label for="my-input">Edad <label class="text-danger">*</label></label>
                        <input name="edadNino" class="form-control" type="number">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="my-input">Nombre del padre (Cliente) <label class="text-danger">*</label></label>
                        <input name="nombrePapa" class="form-control" type="text">
                    </div>

                    <div class="col-sm-6">
                        <label for="my-input">Número telefónico de casa <label class="text-danger">*</label></label>
                        <input name="telefonoCasa" class="form-control" type="text">
                    </div>    
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="my-input">Número celular</label>
                        <input name="telefonoCel" class="form-control" type="text">
                    </div>

                    <div class="col-sm-6">
                        <label for="my-input">Correo electrónico </label>
                        <input name="correo" class="form-control" type="text">
                    </div>    
                </div>

                <div class="form-group row">

                    <div class="col-sm-3">
                        <label for="my-input">Municipio <label class="text-danger">*</label></label>
                        <input name="ciudad" class="form-control" type="text">
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Colonia <label class="text-danger">*</label></label>
                        <input name="colonia" class="form-control" type="text">
                    </div>

                    <div class="col-sm-6">
                        <label for="my-input">Calle y número <label class="text-danger">*</label></label>
                        <input name="calle" class="form-control" type="text">
                    </div>    
                </div>
                <br>


                <h4 class="sub-title">Datos de la fiesta</h4>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="my-input">Fecha del evento <label class="text-danger">*</label></label>
                        <input name="fechaFiesta" class="form-control" type="date">
                    </div>

                    <div class="col-sm-3">
                            <label for="my-input">Día de reservación <label class="text-danger">*</label></label>
                            <input name="fechaReservacion" class="form-control" type="date">
                        </div>

                    <div class="col-sm-3">
                        <label for="my-input">Hora de inicio <label class="text-danger">*</label></label>
                        <input name="horaInicio" class="form-control" type="time">
                        
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="my-input">Hora de termino <label class="text-danger">*</label></label>
                        <input name="horaFinal" class="form-control" type="time">
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-sm-3">
                        <label for="my-input">Pastel </label>
                        <input name="pastel" class="form-control" type="text">
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Hora de servir <label class="text-danger">*</label></label>
                        <input name="horaComida" class="form-control" type="time">
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Salón <label class="text-danger">*</label></label>
                        <select name="salon" class="form-control">
                            <option selected disable>Seleccione el salón</option>
                            <option value="Salon 1">Salón 1</option>
                            <option value="Salon 2">Salon 2</option>
                            <option value="Pasillo">Pasillo</option>
                        </select>
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="my-input">Estatus de la fiesta <label class="text-danger">*</label></label>
                        <select name="estatusFiesta" class="form-control">
                            <option selected disable>Seleccione el estatus</option>
                            <option value="Activo">Activo</option>
                            <option value="Cancelado">Cancelado</option>
                            <option value="Terminado">Terminado</option>
                        </select>
                    </div>

                    
                </div>

                <div class="form-group row">

                    <div class="col-sm-3">
                        <label for="my-input">Piñata </label>
                        <input name="piñata" class="form-control" type="text">
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="my-input">Manteles </label>
                        <input name="manteles" class="form-control"  type="text">
                    </div>

                    <div class="col-sm-6">
                        <label for="my-input">Instrucciones especiales</label>
                        <textarea name="notas" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <br>

                <h4 class="sub-title">Paquetes</h4>

                <div class="form-group row">

                    <div class="col-sm-3">
                        <label for="my-input">Paquete <label class="text-danger">*</label></label>
                        <select name="idPaquete" class="form-control">
                            <option selected disable>Seleccione el paquete</option>
                            @foreach ($paquetes as $paquete)
                                <option value="{{$paquete->id}}">{{$paquete->descripcionPaquete}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Días <label class="text-danger">*</label></label>
                        <select name="idPeriodo" class="form-control">
                            <option selected disable>Seleccione los dias</option>
                            @foreach ($periodos as $periodo)
                                <option value="{{$periodo->id}}">{{$periodo->descripcionPeriodo}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label for="my-input">Comida Niño <label class="text-danger">*</label></label>
                        <select name="comidaNino" class="js-example-basic-sigle">
                            <option selected disable>Seleccione la comida de niños</option>
                            @foreach ($comidas as $comida)
                                <option value="{{$comida->id}}">{{$comida->descripcion}}</option>
                            @endforeach
                        </select>
                        <!--<input type="number" name="cantidadAdulto" class="form-control" placeholder="Cantidad" id="">-->
                    </div>   

                    <div class="col-sm-3">
                        <label for="my-input">Comida Adulto <label class="text-danger">*</label></label>
                        <select name="comidaAdulto" class="js-example-basic-sigle">
                            <option selected disable>Seleccione la comida de adulto</option>
                            @foreach ($comidas as $comida)
                                <option value="{{$comida->id}}">{{$comida->descripcion}}</option>
                            @endforeach
                        </select>
                        <!--<input type="number" name="cantidadAdulto" class="form-control" placeholder="Cantidad" id="">-->
                    </div> 
                </div>

                <hr>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="">Total: 6,500</label>
                        <div class="checkbox">
                            <label><input name="pago" type="checkbox" value="1"> Pagar en efectivo</label>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="{{ config('services.stripe.key') }}"
                            data-amount="6500"
                            data-name="Compra"
                            data-description="Prueba compra"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto">
                        </script>
                    </div>


                </div>


                <div class="form-group">
                    <button type="submit" class="col-sm-12 btn btn-success">Agregar</button>
                </div>

                
            </form>

            
        </div>
    </div>

    @section('javascripts')
        <script src="https://js.stripe.com/v3/"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/select2/js/select2.full.min.js')}}"></script>
        <script>
            $(document).ready(function() {
                $('.js-example-basic-sigle').select2();
            });
        </script>

        <script>
            var stripe = Stripe('pk_test_qJtbWYkIACUJ2fhYPIREnbcP00zxxxMuKx');
            var elements = stripe.elements();
            // Custom styling can be passed to options when creating an Element.
            var style = {
            base: {
                // Add your base input styles here. For example:
                fontSize: '16px',
                color: "#32325d",
            }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
            });

            // Create a token or display an error when the form is submitted.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                // Inform the customer that there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
                } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
                }
            });
            });

            function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
            }

        </script>
    @endsection

@endsection