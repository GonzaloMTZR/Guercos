@extends('layouts.template')
@section('title', '- Fiestas')

@section('content')
 <div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="icofont icofont-heart bg-c-lite-green"></i>
                <div class="d-inline">
                    <h4>Detalles de fiesta</h4>
                    <span>Se muestran los detalles de la fiesta de {{$fiesta->nombreNiño}}.</span>
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
      <h4 class="sub-title">Información de la fiesta</h4>

      <div class="card">
        <div class="card-block table-border-style">
                  
                
          <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div class="table-responsive">
                    <table class="table m-0">
                        <tbody>
                            <tr>
                                <th scope="row">Full Name</th>
                                <td>Josephine Villa</td>
                            </tr>
                            <tr>
                                <th scope="row">Gender</th>
                                <td>Female</td>
                            </tr>
                            <tr>
                                <th scope="row">Birth Date</th>
                                <td>October 25th, 1990</td>
                            </tr>
                            <tr>
                                <th scope="row">Marital Status</th>
                                <td>Single</td>
                            </tr>
                            <tr>
                                <th scope="row">Location</th>
                                <td>New York, USA</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end of table col-lg-6 -->
                <div class="col-lg-12 col-xl-6">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td><a href="#!">Demo@example.com</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile Number</th>
                                    <td>(0123) - 4567891</td>
                                </tr>
                                <tr>
                                    <th scope="row">Twitter</th>
                                    <td>@xyz</td>
                                </tr>
                                <tr>
                                    <th scope="row">Skype</th>
                                    <td>demo.skype</td>
                                </tr>
                                <tr>
                                    <th scope="row">Website</th>
                                    <td><a href="#!">www.demo.com</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end of table col-lg-6 -->
            </div>
          </div>
        </div>
      </div>
    <div class="card-block">
      <h4 class="sub-title">Pagos</h4>

      <div class="card">
              <div class="card-header">
                  <h5>Historial de abonos</h5>
              </div>
              <div class="card-block table-border-style" >
                  <div class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr class="border-bottom-success">
                                  <th>ID</th>
                                  <th>Nombre</th>
                                  <th>Fecha de inicio</th>
                                  <th>Fecha de cierre</th>
                                  <th>&nbsp;</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                            </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
      </div>
    </div>
  
    </div>



  

                                                              


@endsection