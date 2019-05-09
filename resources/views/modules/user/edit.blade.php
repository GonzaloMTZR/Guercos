<!-- Perfil del usuario -->
@extends('layouts.template')
@section('content')
    <div class="col-md-12 col-xl-12 ">

        @if($errors)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger background-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="icofont icofont-close-line-circled text-white"></i>
                    </button>
                    {{ $error  }}
                </div>
            @endforeach
        @endif

        @if(session()->has('success-message'))
            <div class="alert alert-success background-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled text-white"></i>
                </button>
                {{ session()->get('success-message') }}
            </div>
        @endif


        <div class="card">
               
            <div class="card-block user-detail-card">

                <form method="POST" action="/user/{{$user->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="/imagenes/usuarios/{{$user->imagenPerfil}}" alt="" class="img-fluid p-b-10">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imagen">Cambiar imagen de perfil</button>
                        </div>
                       
                        <div class="col-sm-8 user-detail">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-user"></i>Nombre:</h6>
                                </div>
                                <div class="col-sm-7">
                                    <input class="form-control" name="name" value="{{$user->name}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-calendar"></i>Fecha de nacimiento:</h6>
                                </div>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" value="{{$user->fechaNacimiento}}" name="fechaNacimiento">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-email"></i>Correo electrónico :</h6>
                                </div>
                                <div class="col-sm-7">
                                    <input class="form-control" name="email" value="{{$user->email}}">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-home"></i>Dirección :</h6>
                                </div>
                                <div class="col-sm-7">
                                    <input class="form-control" name="direccion" value="{{$user->direccion}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-touch-phone"></i>Numero de telefono :</h6>
                                </div>
                                <div class="col-sm-7">
                                    <input class="form-control" name="telefono" value="{{$user->telefono}}">
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-fax"></i>Puesto de trabajo :</h6>
                                </div>
                                <div class="col-sm-7">
                                    <select name="role" id="" class="form-control">
                                        <option selected disabled>{{$user->roles()->value('name')}}</option>
                                        @foreach ($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-save"></i>Guardar datos</h6>
                                </div>
                                <div class="col-sm-7">
                                    <input type="submit" class="btn btn-success" value="Guardar">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="f-w-400 m-b-30"><i class="icofont icofont-lock"></i>Cambiar contraseña :</h6>
                                </div>
                                <div class="col-sm-7">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#contraseña">Cambiar contraseña</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Modal de contraseña-->
    <div class="modal fade" id="contraseña" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Cambiar contraseña</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="{{url('user/updatepassword')}}">
                    @csrf
                    
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="my-input">Contraseña actual</label>
                            <input id="my-input" name="currentPassword" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label for="my-input">Nueva contraseña</label>
                            <input id="my-input" name="password" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label for="my-input">Confirme contraseña</label>
                            <input id="my-input" name="password_confirmation" class="form-control" type="text">
                        </div>
                    </div>
                    
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light ">Guardar cambios</button>
                    </div>                    
                </form>

            </div>
        </div>
    </div>


    <!-- Modal de la imagen-->
    <div class="modal fade" id="imagen" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
    
                    <div class="modal-header">
                        <h4 class="modal-title">Cambiar imagen de perfil</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <form method="POST" action="{{url('user/updateimagen')}}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="modal-body">
                            <div class="form-group">
                                <h6 for="my-input">Imagen actual</h6>
                                <img src="/imagenes/usuarios/{{$user->imagenPerfil}}" alt="" class="img-fluid p-b-10">
                            </div>
    
                            <div class="form-group">
                                <label for="my-input">Seleccione la nueva imagen de perfil</label>
                                <input id="my-input" name="imagenPerfil" class="form-control" type="file">
                            </div>
                        </div>
                        
        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light ">Guardar cambios</button>
                        </div>                    
                    </form>
    
                </div>
            </div>
        </div>
@endsection