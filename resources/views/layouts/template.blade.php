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


    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/jquery.mCustomScrollbar.css')}}">
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
                                
                                <li class="header-notification">
                                    <a href="#!">
                                        <i class="ti-bell"></i>
                                        <span class="badge bg-c-pink"></span>
                                    </a>
                                    <ul class="show-notification">
                                        <li>
                                            <h6>Notificaciones</h6>
                                            <label class="label label-danger">Nuevas</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center" src="{{asset('admin/assets/images/user.png')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center" src="{{asset('admin/assets/images/user.png')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center" src="{{asset('admin/assets/images/user.png')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            
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
                                        <span id="more-details">PUESTO DE LA EMPRESA<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="/perfil/show"><i class="ti-user"></i>Ver Perfil</a>
                                            <a href="#!"><i class="ti-settings"></i>Configuración</a>
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
                            <div class="pcoded-search">
                                <span class="searchbar-toggle">  </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Buscar">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
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
                                                <span class="pcoded-mtext" data-i18n="nav.inv.main"><Nav>Inventario</Nav></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="/inventario">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.ver.default">Ver articulos</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/inventario/create">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.add.ecommerce">Agregar</span>
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
                                                    <a href="index.html">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.dash.default">Ver todas las ventas</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="dashboard-ecommerce.html">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce">Agregar una venta</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="ti-crown"></i><b>F</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.fie.main"><Nav>Fiestas</Nav></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="/fiestas">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.ver.default">Ver fiestas</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/fiestas/create">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.add.ecommerce">Agendar fiesta</span>
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
                                                        <span class="pcoded-mtext" data-i18n="nav.dash.default">Ver todos los empleados</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/empleados/create">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce">Agregar nuevo empleado</span>
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


<script src="{{asset('admin/bower_components/peity/js/jquery.peity.js ')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/chart.js/js/Chart.js')}}"></script>
<script src="{{asset('admin/bower_components/d3/js/d3.js')}}"></script>
<script src="{{asset('admin/bower_components/nvd3/js/nv.d3.js')}}"></script>
<script src="{{asset('admin/assets/pages/chart/nv-chart/js/stream_layers.js')}}"></script>
<script src="{{asset('admin/assets/pages/widget/amchart/amcharts.js')}}"></script>
<script src="{{asset('admin/assets/pages/widget/amchart/gauge.js')}}"></script>
<script src="{{asset('admin/assets/pages/widget/amchart/pie.js')}}"></script>
<script src="{{asset('admin/assets/pages/widget/amchart/serial.js')}}"></script>
<script src="{{asset('admin/assets/pages/widget/amchart/ammap.js')}}"></script>
<script src="{{asset('admin/assets/pages/widget/amchart/light.js')}}"></script>
<script src="{{asset('admin/assets/pages/widget/amchart/worldLow.js')}}"></script>
<script src="{{asset('admin/assets/pages/widget/amchart/continentsLow.js')}}"></script>
<script src="{{asset('admin/bower_components/raphael/js/raphael.min.js')}}"></script>
<script src="{{asset('admin/bower_components/morris.js/js/morris.js')}}"></script>
<script src="{{asset('admin/assets/pages/chart/knob/jquery.knob.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/pages/dashboard/analytic-dashboard.js')}}"></script>


</body>

</html>
