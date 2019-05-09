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
                    <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{asset('admin/assets/images/widget/Group-user.jpg')}} " alt="" class="img-fluid p-b-10">
                                <input type="file" name="imagenPerfil" id="">
                            </div>
                            <div class="col-sm-8 user-detail">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-user"></i>Nombre :</h6>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="name" class="form-control" required id="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-calendar"></i>Fecha de nacimiento :</h6>
                                    </div>
                                    <div class="col-sm-7">
                                            <input type="date" name="fechaNacimiento" class="form-control" required id="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-email"></i>Correo electrónico :</h6>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="email" name="email" class="form-control" required id="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-lock"></i>Contraseña :</h6>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="password" value="secret" class="form-control" readonly>
                                        <input type="hidden" name="password_confirmation" value="secret" class="form-control" placeholder="Confirmar contraseña">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-home"></i>Dirección :</h6>
                                    </div>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" name="direccion" required id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-touch-phone"></i>Numero de telefono :</h6>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="telefono" class="form-control mob_no" required data-mask="999-999-9999">
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="f-w-400 m-b-30"><i class="icofont icofont-fax"></i>Puesto de trabajo :</h6>
                                    </div>
                                    <div class="col-sm-7">
                                        <select class="form-control" required name="role" id="">
                                            <option selected disabled>Seleccione el puesto del empleado</option>

                                            @foreach ($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" class="btn btn-success">Agregar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




























<!--@ extends('layouts.app')
@ ection('title', 'Registro')
    
@ section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="signup-card card-block auth-body mr-auto ml-auto">
                
                <form method="POST" action="{ { route('register') }}" class="md-float-material">
                    @ csrf

                    <div class="text-center">
                        <img src="{ {asset('admin/assets/images/logotipo-guercos.png')}}" width="150px" alt="logo.png">
                    </div>
                    <div class="auth-box">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">Llene los campos para registrar un usuario.</h3>
                            </div>
                        </div>
                        <hr/>
                        <div class="input-group">
                            <input type="text" name="name" class="form-control{ { $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nombre completo" value="{ { old('name') }}" required autofocus>
                            <span class="md-line"></span>
                            
                        </div>

                        <div class="input-group">
                            <input type="text" name="email" class="form-control{ { $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo electrónico" value="{ { old('email') }}" required>
                            <span class="md-line"></span>
                            
                        </div>

                        <div class="input-group">
                            <input type="text" name="password" value="secret" class="form-control{ { $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña - secret" readonly>
                            <span class="md-line"></span>
                        </div>

                        <div class="input-group">
                            <input type="text" name="password_confirmation" value="secret" class="form-control" placeholder="Confirmar contraseña - secret" readonly>
                            <span class="md-line"></span>
                        </div>

                        <input type="hidden" name="password_confirmation" value="secret" class="form-control" placeholder="Confirmar contraseña - secret" readonly>


                        <div class="input-group">
                            <select class="form-control" name="role" id="" required>
                                <option selected disabled>Seleccione el rol para este usuario</option>
                                @ foreach ($ roles as $ role)
                                    <option value="{ {$role->id}}">{ {$role->name}}</option>
                                @ endforeach
                            </select>                            
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Registrarse</button>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Gracias por registrarse.</p>
                                    <p class="text-inverse text-left"><b>Güercos</b></p>
                            </div>
                            <div class="col-md-2">
                                <img src="{ {asset('admin/assets/images/logoG.png')}}" width="50px" alt="small-logo.png">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@ endsection-->