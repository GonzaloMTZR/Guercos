<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{config('app.name')}} @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="#">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <link rel="icon" href="{{asset('admin/assets/images/favicon.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/icofont/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/flag-icon/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/menu-search/css/component.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/jquery.steps/css/jquery.steps.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/jquery.mCustomScrollbar.css')}}">
    @yield('css')
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="/dashboard">
                            <img class="img-fluid" src="{{asset('admin/assets/images/logotipo-guercos.png')}}" width="165px" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                </li>
                               
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                               
                            </ul>
                            <ul class="nav-right">
                            
                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <img src="{{asset('admin/assets/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                        <span>{{Auth::user()->name}}</span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li>
                                            <a href="#!">
                                                <i class="ti-settings"></i> Configuración
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/perfil/show">
                                                <i class="ti-user"></i> Perfil de usuario
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="ti-layout-sidebar-left"></i>Cerrar Sesión
                                            </a>
         
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                 @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
                </div>
            </nav>

         
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="{{asset('admin/assets/images/avatar-4.jpg')}}" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>{{Auth::user()->name}}</span>
                                        <span id="more-details">Puesto en la empresa / Rol en el sistema<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="/perfil/show"><i class="ti-user"></i>Ver Perfil</a>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                <i class="ti-layout-sidebar-left"></i>Cerrar Sesión
                                            </a>
         
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                 @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navegación</div>
                                <ul class="pcoded-item pcoded-left-item">
                                        <li class="">    
                                            <a href="/dashboard">        
                                                <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>        
                                                <span class="pcoded-mcaret"></span>    
                                            </a>
                                        </li>

                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="ti-view-list-alt"></i><b>Inv</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.inv.main"><Nav>Productos</Nav></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="/productos">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.inv.ver">Ver productos en el inventario</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/productos/create">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.inv.add">Agregar producto al invenatrio</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="ti-money"></i><b>V</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ventas.main"><Nav>Ventas</Nav></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="/ventas">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.venta.ver">Ver todas las ventas</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/ventas/create">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.venta.add">Agregar una venta</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="">    
                                            <a href="/paquetes">        
                                                <span class="pcoded-micon"><i class="ti-gift"></i><b>P</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.paquetes.main">Paquetes</span>        
                                                <span class="pcoded-mcaret"></span>    
                                            </a>
                                        </li>

                                        <li class="">    
                                            <a href="/entradas">        
                                                <span class="pcoded-micon"><i class="ti-shift-left"></i><b>E</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.entradas.main">Entradas</span>        
                                                <span class="pcoded-mcaret"></span>    
                                            </a>
                                        </li>

                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="ti-crown"></i><b>F</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.fiesta.main"><Nav>Fiestas</Nav></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="/fiestas">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.fiesta.ver">Ver fiestas</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/fiestas/create">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.fiesta.add">Agendar fiesta</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="ti-user"></i><b>E</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.empl.main"><Nav>Empleados</Nav></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="/empleados">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.emp.ver">Ver todos los empleados</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/empleados/create">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.emp.add">Agregar nuevo empleado</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="">    
                                            <a href="/cocina">        
                                                <span class="pcoded-micon"><i class="icofont icofont-fork-and-knife"></i><b>C</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.cocina.main">Cocina</span>        
                                                <span class="pcoded-mcaret"></span>    
                                            </a>
                                        </li>

                                        <li class="pcoded-hasmenu">
                                            <a href="#">
                                                <span class="pcoded-micon"><i class="ti-user"></i><b>POV</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.pov.main"><Nav>Puntos de venta</Nav></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="/POVC">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.pov.POVC">Punto de venta de cocina</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/POVE">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.pov.POVE">Punto de venta de entrada</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                </ul>
                        </div>
                    </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">

                        <div class="main-body">
                            <div class="page-wrapper">
                                @yield('content')
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="{{asset('admin/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
<script src="{{asset('admin/assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('admin/assets/js/demo-12.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/js/script.js')}}"></script>
<script src="{{asset('admin/bower_components/jquery.cookie/js/jquery.cookie.js')}}"></script>
@yield('javascripts')
</body>

</html>
