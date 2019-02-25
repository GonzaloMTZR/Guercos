@extends('layouts.template')
@section('title', '- Crear un empleado')


@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont icofont-plus bg-c-lite-green"></i>
                <div class="d-inline">
                    <h4>Creación de empleados</h4>
                    <span>Creación de empleados, comlpete los campos para poder dar de alta a un nuevo empleado.</span>
                </div>
            </div>
        </div>
    </div>
</div>    

<div class="card">
    <div class="col-md-12 col-xl-12 mt-3 mb-3">
        <div class="card">
            <div class="card-block user-detail-card">
                <form method="POST" action="/empleados" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{asset('admin/assets/images/widget/Group-user.jpg')}} " alt="" class="img-fluid p-b-10">
                            <input type="file" name="" id="">
                        </div>
                        <div class="col-sm-8 user-detail">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-user"></i>Nombre :</h6>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" name="nombre" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-calendar"></i>Fecha de nacimiento :</h6>
                                </div>
                                <div class="col-sm-7">
                                        <input type="date" name="fechaNacimiento" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-email"></i>Correo electrónico :</h6>
                                </div>
                                <div class="col-sm-7">
                                    <input type="email" name="email" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-home"></i>Dirección :</h6>
                                </div>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="direccion" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-touch-phone"></i>Numero de telefono :</h6>
                                </div>
                                <div class="col-sm-7">
                                        <input type="text" name="numeroTelefonico" class="form-control mob_no" data-mask="999-999-9999">
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-fax"></i>Puesto de trabajo :</h6>
                                </div>
                                <div class="col-sm-7">
                                    <select class="form-control" name="idPuesto" id="">
                                        <option selected disabled>Seleccione el puesto del empleado</option>

                                        <!--@ foreach ($puestos as $puesto)
                                            <option value="{ {$puesto['id']}}">{ {$puesto['puesto']}}</option>
                                        @ endforeach-->
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-primary">Agregar</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>





@endsection