/*

            $('.ajax').click(function(e){
               e.preventDefault();
              
               $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                url: "/ajax",
                type: 'POST',                 
                data: {
                  url: $(this).attr("href"),
                },
                beforeSend: function () {
                  
                  $("#content").html("Procesando, espere por favor...");
                },
                success: function(data){ 
                    $('#content').html(data); 
                    console.log("exito al cargar pagina"); 
                    
                 
     
               },
                fail: function(){
                   console.log("error al cargar pagina"); 
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }    
               });
            });
 
       */