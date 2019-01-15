@extends('layouts.app')
@section('title', 'Inicio de sesión')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <!-- Authentication card start -->
            <div class="login-card card-block auth-body mr-auto ml-auto">
                <form method="POST" action="{{ route('login') }}" class="md-float-material">
                    @csrf

                    <div class="text-center d-none d-lg-block  d-xl-block">
                        <img src="{{asset('admin/assets/images/logotipo-guercos.png')}}" width="150px" alt="logo.png">
                    </div>

                    <div class="auth-box">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-left txt-primary">Inicio de sesión</h3>
                            </div>
                        </div>
                        <hr/>
                        
                        <div class="input-group">
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  value="{{ old('email') }}" placeholder="Correo electrónico" required autofocus>
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

                        <div class="row m-t-25 text-left">
                            <div class="col-12">
                                <div class="checkbox-fade fade-in-primary">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                        <span class="text-inverse">Recordarme</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Iniciar Sesión</button>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-10">
                                <p class="text-inverse text-left m-b-0"><a href="{{route('register')}}">Registrarse.</a></p>
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
