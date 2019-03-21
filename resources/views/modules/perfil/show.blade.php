<!-- Perfil del usuario -->
@extends('layouts.template')
@section('content')
<div class="col-md-12 col-xl-12 ">
    <div class="card">
        <div class="card-block user-detail-card">
            <div class="row">
                <div class="col-sm-4">
                    <img src="{{asset('admin/assets/images/widget/Group-user.jpg')}} " alt="" class="img-fluid p-b-10">
                    <div class="contact-icon">
                        <button class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Editar" ><i class="icofont icofont-ui-edit m-0"></i></button>
                        <!--<button disabled class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Eliminar" ><i class="icofont icofont-garbage m-0"></i></button>-->
                    </div>
                    
                </div>
                <div class="col-sm-8 user-detail">
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-user"></i>Nombre:</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="m-b-30">{{Auth::user()->name}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-calendar"></i>Fecha de nacimiento :</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="m-b-30">24 October 2017</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-email"></i>Correo electrónico :</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="m-b-30"><a href="mailto:dummy@gmail.com">{{Auth::user()->email}}</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-home"></i>Dirección :</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="m-b-30">23/Encrypt square, Melbourn, Australia</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-touch-phone"></i>Numero de telefono :</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="m-b-30">+(345)234-5287</h6>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-fax"></i>Puesto de trabajo :</h6>
                        </div>
                        <div class="col-sm-7">
                            @foreach(Auth::user()->roles()->pluck('name') as $role_name)
                                <h6 class="m-b-30">{{$role_name}}</h6>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection