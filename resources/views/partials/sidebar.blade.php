 
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> En Linea</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li>
          <a href="{{route('home')}}" class="ajax">
            <i class="fa fa-th"></i> <span>Inicio</span>
          </a>
        </li>
       
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Actividades</span>
          
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i>  v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>  v2</a></li>
          </ul>
        </li>   
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Inventario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a class="ajax" href="{{route('equipos.index')}}"><i class="fa fa-circle-o"></i> Equipos</a></li>
            <li><a class="ajax" href="{{route('perifericos.index')}}"><i class="fa fa-circle-o"></i> Perifericos</a></li>
            <li><a class="ajax" href="{{route('caracteristicas.index')}}"><i class="fa fa-circle-o"></i> Componentes</a></li>
            <li><a class="ajax" href="{{route('softwares.index')}}"><i class="fa fa-circle-o"></i> Softwares</a></li>
          </ul>
        </li>
        @can('users.index')                          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a class="ajax" href="{{route('home')}}"><i class="fa fa-circle-o"></i> Personal</a></li>
            <li><a class="ajax" href="{{route('home')}}"><i class="fa fa-circle-o"></i> Equipos</a></li>
            <li><a class="ajax" href="{{route('home')}}"><i class="fa fa-circle-o"></i> Actividades</a></li>
          </ul>
        </li>
        @endcan
        @can('users.index')
       <li>
          <a href="{{route('users.index')}}"class="ajax">
            <i class="fa fa-users"></i> <span>Tecnicos</span>
          </a>
        </li>
        @endcan
         @can('clientes.index')
       <li>
          <a href="{{route('clientes.index')}}"class="ajax">
            <i class="fa fa-users"></i> <span>Clientes</span>
          </a>
        </li>
        @endcan
        
        @can('users.index')
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendario</span>
          </a>
        </li>
        @endcan
        @can('users.index')
        <!--li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mensajeria</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li-->
        @endcan
        @can('users.index')
         <li>
          <a href="pages/widgets.html">
            <i class="fa fa-book"></i> <span>Documentos</span>
          </a>
        </li>
        @endcan
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>