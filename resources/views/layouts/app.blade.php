<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HelpDesk') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @guest
            @yield('login')
        @else
        

        <div class="container-fluid">
            <!--CONTENIDO-->                   
            <div class="row d-flex flex-wrap flex-sm-nowrap p-0">


                <!--MENU LATERAL-->
                <aside class="col-12 col-sm-2 barra-lateral p-0 mb-0 d-flex  justify-content-center "> 
                        <nav class="m-0  text-center text-lg-left w-100">
                            <div class="logo border2">
                                <h3 class="">HelpDesk</h3>
                                <div class="text-center my-3">
                                        <img src="img/logo.jpg" width=100px class="rounded-circle img-fluid" alt="">
                                </div>
                                <p class="text-white text-center ">Administrador</p>
                            </div>  

                            <!--enlaces de navegacion-->
                            <ul class="p-0 m-0 d-flex flex-wrap justify-content-center justify-content-sm-start" id="main-menu">
                                
                                <!--enlace de inicio-->
                                <li><a class="botonBarraNavegacion" href="{{route('home')}}><i class="fa fa-home mr-lg-3"></i><span>Inicio</span></a></li>
                                
                                <!--enlace de usuarios-->
                                @can('users.index')
                                <li class="w-100">
                                  <a class="  botonBarraNavegacion " href="{{route('users.index')}}" role="button" id=""> <i class="fa fa-users mr-lg-3"></i><span>Tecnicos</span></a>
                                  <div class="dropdown-menu m-0 " aria-labelledby="dropdownMenuLink"><!-- Dropdown menu links -->
                                        
                                  </div>
                                </li>
                                @endcan
                                 <!--enlace de clientes-->
                                @can('clientes.index')
                                <li class="w-100">
                                  <a class="  botonBarraNavegacion " href="{{route('clientes.index')}}" role="button" id=""> <i class="fa fa-clientes mr-lg-3"></i><span>Clientes</span></a>
                                
                                </li>
                                @endcan
                                 <!--enlace de softwares-->
                                @can('softwares.index')
                                <li class="w-100">
                                  <a class="  botonBarraNavegacion " href="{{route('softwares.index')}}" role="button" id=""> <i class="fa fa-clientes mr-lg-3"></i><span>Softwares</span></a>
                                  
                                </li>
                                @endcan
                                 <!--enlace de equipo-->
                                @can('equipos.index')
                                <li class="w-100">
                                  <a class="  botonBarraNavegacion " href="{{route('equipos.index')}}" role="button" id=""> <i class="fa fa-equipo mr-lg-3"></i><span>Equipo</span></a>
                                  
                                </li>
                                @endcan
                                 <!--enlace de usuarios-->
                                @can('perifericos.index')
                                <li class="w-100">
                                  <a class="  botonBarraNavegacion " href="{{route('perifericos.index')}}" role="button" id=""> <i class="fa fa-users mr-lg-3"></i><span>Perifericos</span></a>    
                                </li>
                                @endcan







                            </ul>                   
                        </nav>
                         <!--FIN DEL MENU LATERAL-->
                </aside>
                
                 <section class="col-12 col-sm-10 mb-2">
                    <div class="row barraHorizontalDos text-white">
                        
                        <div class="col p-0 d-flex justify-content-end">
                            <a href="#" class="text-white"><i class="fa fa-bell mr-2"></i><span>2</span></a>
                                                <!--Enlace de configuracion-->
                                            <div class="dropdown">  
                                                    <a class="dropdown-toggle text-white p-2 ml-3"  href="#" role="button" id="dropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >{{ Auth::user()->nombre }} <span class="caret"></span> </a>
                                                    <div class="dropdown-menu mt-0 p-0 mr-5" aria-labelledby="dropdownMenuLink6">
                                                        <a href="#" class="dropdown-item"><i class="fa fa-user mr-3"></i><span>Perfil</span></a>
                                                        <a href="#" class="dropdown-item"><i class="fa fa-tools mr-3"></i><span>Configuraciones</span></a>
                                                        <div class="dropdown-divider m-0"></div>
                                                         <div >
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                {{ __('Salir') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                                
                                                    </div>
                                            </div>
                         </div>
                                        <!--FIN BARRA HORIZONTAL-->
                    </div>   
                    <main class="row d-flex flex-wrap flex-sm-nowrap p-0">
                          <div class="col-12">
                                @yield('content')
                          </div>
                    </main>
                            
                 </section>     
            </div>
        </div>
     @endguest       
    </div>

</body>
</html>
