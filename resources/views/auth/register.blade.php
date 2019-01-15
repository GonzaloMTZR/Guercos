@extends('layouts.app')
@section('title', 'Registro')
    
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="signup-card card-block auth-body mr-auto ml-auto">
                
                <form method="POST" action="{{ route('register') }}" class="md-float-material">
                    @csrf

                    <div class="text-center">
                        <img src="{{asset('admin/assets/images/logotipo-guercos.png')}}" width="150px" alt="logo.png">
                    </div>
                    <div class="auth-box">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">Llene los campos para registrarse.</h3>
                            </div>
                        </div>
                        <hr/>
                        <div class="input-group">
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nombre completo" value="{{ old('name') }}" required autofocus>
                            <span class="md-line"></span>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-group">
                            <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo electrónico" value="{{ old('email') }}" required>
                            <span class="md-line"></span>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-group">
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" required>
                            <span class="md-line"></span>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-group">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña" required>
                            <span class="md-line"></span>
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
                                <img src="{{asset('admin/assets/images/logoG.png')}}" width="50px" alt="small-logo.png">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection