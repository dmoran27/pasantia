@extends('adminlte::page')

<link rel="stylesheet" href="{{asset('css/fullcalendar.min.css')}}"/>
<link rel="stylesheet" href="{{asset('css/eventos.css')}}"/>
<link rel="stylesheet" href="{{asset('css/fullcalendar.print.css')}}" media='print'/>
 @can('ver_calendario_general')   
@section('title', 'Calendario de mantenimientos')
@section('content')

 <style type="text/css">
 .box{
 top:-40px;
}

 body{
  max-height: 500px;
 }
</style> 

  <div class="box">
  @include('partials.message')
  <body style="background-color:#e8eeec;"> 
    <div class="box-body">
    
      <div class="container col-md-12" style="display:block; left:-15px; top:-25px;">
            <h3 style="text-align:right;">Calendario general</h3>
            <div id='calendar'></div>


      </div>
        <div class="info-box bg-grey" style="width:24%; display:inline-block; margin-top:20px;">

          <span class="info-box-icon bg-light-grey"><i class="fa fa-check-circle " style="margin-top:20px;"></i></span>
          <div class="info-box-content " >
            <span class="d">Mantenimientos completados</span>
            <span class="info-box-number">Totales {{$completados}}</span>
          </div>

        </div>    

          <div class="info-box bg-blue" style="width:24%; display:inline-block; margin-top:20px;">

          <span class="info-box-icon bg-light-blue"><i class="fa fa-wrench" style="margin-top:20px;"></i></span>
          <div class="info-box-content " >
            <span class="d">Mantenimientos preventivos</span>
            <span class="info-box-number">Por cumplir {{$preventivos}}</span>
          </div>

        </div>   

        <div class="info-box bg-yellow" style="width:24%; display:inline-block; margin-top:20px;">

          <span class="info-box-icon bg-light-yellow"><i class="fa fa-wrench" style="margin-top:20px;"></i></span>
          <div class="info-box-content " >
            <span class="d">Mantenimientos correctivos</span>
            <span class="info-box-number">Por cumplir {{$correctivos}}</span>
          </div>
        </div> 
  
         <div class="info-box bg-red" style="width:24%; display:inline-block; margin-top:20px;">

          <span class="info-box-icon bg-light-red"><i class="fa fa-times-circle " style="margin-top:20px;"></i></span>
          <div class="info-box-content " >
            <span class="d">Mantenimientos Descartados</span>
            <span class="info-box-number">Totales {{$descartados}}</span>
          </div>

        </div>  
    </div>
  </div>



@endsection
@endcan
@section('js')
<script>

  $(document).ready(function() {
    var cadena1 = window.location.href;
    var cadena2 = cadena1.slice(0, -6);
    var cadena2 = cadena2 + "equipos/";

   
    $('#calendar').fullCalendar({
      header: {
        right: 'prev,next today',
        left: 'title',
        center: 'month,listWeek'
      },
      height: 500,
      businessHours: true,
      displayEventTime: false,
     
      events: [
        <?php 
          foreach($eventos as $event) {
        ?>
          {
            id:"<?php echo $event["id"];?>",
            title:"<?php echo $event["title"];  echo " Equipo: "; echo $event["equipo_id"];
                    echo " "; echo $event->equipo->tipo["nombre"];
                    echo ", del departamento: "; echo $event->equipo->departamento["nombre"]; 
                    echo ", usuario: "; echo $event->equipo["utilizadoPor"];  ?>",
            start:"<?php echo $event["start"];?>",
            end:"<?php echo $event["end"];?>",
            url: cadena2+"<?php echo $event["equipo_id"];?>",
            className:"<?php echo $event["className"];?>",
            editable:"<?php echo $event["editable"];?>",
          },
        <?php
          }
        ?>
      ]
    });

  });

</script>

    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>    
@endsection