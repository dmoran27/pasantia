
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
 

   <!-- Bootstrap 3.3.7 -->
        <link href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
      
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

          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

          <!-- Google Font -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  </head>
  <body class=" hold-transition skin-black-light sidebar-mini">
    <div class="wrapper">

      <!-- Header -->
      @include('partials.header')

      <!-- Sidebar -->
      @include('partials.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            {{ $page_title or "Page Title" }}
            <small>{{ $page_description or null }}</small>
          </h1>
          <!-- You can dynamically generate breadcrumbs here -->
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">          
          <!-- Your Page Content Here -->
          @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->
    @include('partials.footer')
    @include('partials.sidebar2')

    </div> 

     <!-- Scripts -->


     <!-- jQuery 3 -->
      <script src="{{ asset ("/bower_components/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset ("/bower_components/bootstrap/dist/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("/bower_components/admin-lte/dist/js/adminlte.min.js") }}" type="text/javascript"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset ("/bower_component/jquery-ui/jquery-ui.min.js")}}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset ("/bower_component/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
    <!-- FastClick -->
    <script src="{{ asset ("/bower_component/fastclick/lib/fastclick.js")}}"></script>

    <script src="{{ asset ("/bower_components/admin-lte/dist/js/adminlte.min.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset ("/bower_components/admin-lte/dist/js/demo.js")}}"></script>
    <!-- fullCalendar -->
    <script src="{{ asset ("/bower_component/moment/moment.js")}}"></script>
    <script src="{{ asset ("/bower_component/fullcalendar/dist/fullcalendar.min.js")}}"></script>

    <!-- DataTables -->
    <script src="{{ asset("/bower_components/datatables.net/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{ asset("/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset("/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
    <!-- FastClick -->
    <script src="{{ asset("/bower_components/fastclick/lib/fastclick.js")}}"></script>

  </body>
</html>
