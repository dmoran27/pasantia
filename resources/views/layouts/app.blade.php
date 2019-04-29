<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $page_title or "Inicio" }} | ORTSI </title>

 
    <!-- Fonts -->
    <!-- Bootstrap 3.3.7 -->
        <link href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/_all-skins.min.css")}}" rel="stylesheet" type="text/css" />
      
          <!-- Font Awesome -->
          <link rel="stylesheet" href="{{ asset("/bower_components/font-awesome/css/font-awesome.min.css")}}">
          <!-- Ionicons -->
          <link rel="stylesheet" href="{{ asset("/bower_components/Ionicons/css/ionicons.min.css")}}">
         
          <!-- Morris chart -->
          <link rel="stylesheet" href="{{ asset("/bower_components/morris.js/morris.css")}}">
          <!-- jvectormap -->
          <link rel="stylesheet" href="{{ asset("/bower_components/jvectormap/jquery-jvectormap.css")}}">
          <!-- Date Picker -->
          <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}">
          <!-- Daterange picker -->
          <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap-daterangepicker/daterangepicker.css")}}">
          <!-- bootstrap wysihtml5 - text editor -->
          <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">
          <!-- DataTables -->
          <link rel="stylesheet" href="{{ asset("/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">

          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

          <!-- Google Font -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
 <body class="hold-transition skin-black-light sidebar-mini">
   @guest
   <div id="app">
     {{ route('login') }}
   </div>
           
   @else     
   
  <div class="wrapper" >

        <!-- Header -->
      @include('partials.header')

      <!-- Sidebar -->
      @include('partials.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">



        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            {{ $page_title or "Inicio" }}
            <small>{{ $page_description or null }}</small>
          </h1>
          <!-- You can dynamically generate breadcrumbs here -->
          <ol class="breadcrumb">
            <li><a href=" {{ route('home') }}"><i class="fa fa-home"></i>  {{ $page or "Inicio" }}</a></li>
            <li class="active"> {{ $page_title or null }}</li>
          </ol>
        </section>


    
        <!-- Main content -->
        <section class="content" id="content">          
          <!-- Your Page Content Here -->
          @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->
    @include('partials.footer')
    @include('partials.sidebar2')
       @endguest  

      </div>


       




  

    <!-- Scripts -->
    <!-- jQuery 3 -->
    <script src="{{ asset ("/bower_components/jquery/dist/jquery.min.js") }}"  type="text/javascript"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset ("/bower_components/jquery-ui/jquery-ui.min.js")}} "  type="text/javascript"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>

    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset ("/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"   type="text/javascript"></script>
  
    <!-- Slimscroll -->
    <script src="{{ asset ("/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}} "  type="text/javascript"></script>
    <!-- FastClick -->
    <script src="{{ asset ("/bower_components/fastclick/lib/fastclick.js")}} "  type="text/javascript"></script>

   
    <!-- fullCalendar -->
    <script src="{{ asset ("/bower_components/moment/moment.js")}} "  type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/fullcalendar/dist/fullcalendar.min.js")}} "  type="text/javascript"></script>

    <!-- DataTables -->
    <script src="{{ asset("/bower_components/datatables.net/js/jquery.dataTables.min.js")}} "  type="text/javascript"></script>
    <script src="{{ asset("/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}} "  type="text/javascript"></script>

    

 
  <script src="{{ asset ("/bower_components/admin-lte/dist/js/adminlte.min.js")}} "  type="text/javascript"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset ("/bower_components/admin-lte/dist/js/demo.js")}} "  type="text/javascript"></script>
  <script src="{{ asset ("/js/app.js")}} "  type="text/javascript"></script>

   

    @yield('js')
  </body>
</html>
