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
    <link rel = "hoja de estilo" type = "text / css" href = " https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css " />
    <script src = " https://code.jquery.com/jquery-3.3.1.min.js " integrity = "sha256-FgpCb / KJQlLNfOu91ta32o / NMZxltwRo8QtmkMRdAu8 =" anonymous "> </script> 
    <script de script = "text / javascript" src = " https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js "> </script>
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
                                <h3 class="">Sistema ORTSI</h3>
                            </div>  

                            <!--enlaces de navegacion-->
                            <ul class="p-0 m-0 d-flex flex-wrap justify-content-center justify-content-sm-start" id="main-menu">
                                
                                <!--enlace de inicio-->
                                <li><a class="botonBarraNavegacion" href="{{route('home')}}"><i class="fa fa-home mr-lg-3"></i><span>Inicio</span></a></li>
                                
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
                                  <!--enlace de usuarios-->  
                                   <li class="w-100">
                                        <a class="botonBarraNavegacion" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Salir') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                                 
                                </li>  
                            </ul>                   
                        </nav>
                         <!--FIN DEL MENU LATERAL-->
                </aside>
                
                 <section class="col-12 col-sm-10 mb-2">
                    <div class="row barraHorizontalDos text-white">
                        
                        <div class="col p-0 d-flex justify-content-end">
                            <a href="#" class=""><i class="fa fa-bell mr-2"></i><span>2</span></a>  
                                                <!--Enlace de configuracion-->
                                            <div class="dropdown"> 
                                                    <a class="dropdown-toggle p-2 ml-3"  href="#" role="button" id="dropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Config<i class="fa fa-tools mr-3"></i><span class="caret"></span> </a>
                                                    <div class="dropdown-menu mt-0 p-0 mr-5" aria-labelledby="dropdownMenuLink6">
                                                        <a href="{{ route('roles.index') }}" class="dropdown-item"><i class="fa fa-user mr-3"></i><span>Roles y Permisos</span></a>
                                                        <a href="{{ route('caracteristicas.index') }}" class="dropdown-item"><i class="fa fa-user mr-3"></i><span>caracteristicas</span></a>
                                                         <a href="{{ route('tipos.index') }}" class="dropdown-item"><i class="fa fa-user mr-3"></i><span>tipos</span></a>
                                                        
                                                      
                                                                
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
