
<aside class="right-side">

<section class="content">
              <!--=== Purchase Block ===-->
    <div class="purchase">
        <div class="container">
            <div class="row">
                <div class="col-md-9 animated fadeInLeft">
                    <span>Buscar vuelos</span>
                    <p>Seleccione el criterio deseado para la busqueda de vuelos.</p>
                </div>            
          
            </div>
        </div>
    </div><!--/row-->
    <!-- End Purchase Block -->
      <!--=== Search Block Version 2 ===-->
    <div class="search-block-v2">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
      
                <div class="input-group">
                    <input id="valorBusqueda" name="valorBusqueda" type="text" class="form-control" placeholder="Ingrese el valor a buscar segun el criterio seleccionado...">
                    <span class="input-group-btn">
                     <button type="button" class="btn-u dropdown-toggle" data-toggle="dropdown">
                            Buscar por... 
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a id="buscarPorNroVuelo" name="buscarPorNroVuelo" ><i class="fa fa-plane"></i> N&uacute;mero vuelo</a></li>
                            <li><a id="buscarPorOrigen" name="buscarPorOrigen"><i class="fa fa-globe"></i> Origen</a></li>
                            <li><a id="buscarPorDestino" name="buscarPorDestino"><i class="fa fa-globe"></i> Destino</a></li>
                              <li><a id="buscarPorFecha" name="buscarPorFecha"><i class="fa fa-calendar"></i> fecha</a></li>
                           
                        </ul>
               
                    </span>
                </div>
            </div>
        </div>    
    <!--Basic Table-->
  
                <table id="tablaVuelo" name="tablaVuelo" class="table">
                    
                </table>
               
                <!--End Basic Table-->
                 <div id="mensaje" name="mensaje"  class="col-md-6 col-md-offset-3">
                    
                </table
    
    </div><!--/container--> 
   
   
</section>            
</aside>

<script type="text/javascript">

    $(document).ready(function () {
    	var base_url="<?php echo base_url();?>"; 
    	$('#buscarPorNroVuelo').click( function() { 
        
    		var valorBusqueda = $('#valorBusqueda').val();
    		var htmlAgregar2="";
    		console.log("buscar por nro vuelo = a: "+valorBusqueda);
    		 $.ajax({
  	  			 type:  'post',
  	  			 url:   base_url+'home/buscarPorNroVuelo/',
  	  			 data: {valor:valorBusqueda}, 
  	  			 dataType: 'json',
  	  			 async: false,
  	  			   success:  function (response) {
  	  	  			   console.log(response);
  	  							htmlAgregar2=htmlAgregar2+ 
  	  						"<thead>"+
  	                         " <tr>"+
  	                              "<th>Nro vuelo</th>"+
  	                              "<th>Fecha partida</th>"+
  	                              "<th >Origen</th>"+
  	                              "<th>Destino</th>"+
  	                          "</tr>"+
  	                      "</thead>"+
  	                      "<tbody>";
  	                      
  	                   
				            	response.forEach(function($item){
				            		htmlAgregar2=htmlAgregar2+
					                "<tr>"+
	  	                              "<td>"+$item[0]+"</td>"+
	  	                              "<td>"+$item[1]+"</td>"+
	  	                              "<td>"+$item[2]+"</td>"+
	  	                              "<td>"+$item[3]+"</td>"+                     
	  	                          "</tr>";
					  	  			   });

				            	htmlAgregar2=htmlAgregar2+  "</tbody>";
				            	if (typeof response !== 'undefined' && response.length > 0) {
				            		$("#tablaVuelo").html(htmlAgregar2);
				            		
				            		}else{
				            			$("#mensaje").html("<div class=\"alert alert-danger\" role=\"alert\">Error en la busqueda, intente nuevamente. </div>");
						  	  			
				            			}
			            		 },
				  	  			
				  	  			error:  function (response) {
				  	  			$("#mensaje").html("<div class=\"alert alert-danger\" role=\"alert\">No hay resultados. </div>");
				  	  			 }
	  			   
  			   		});
    		 
		   		
    		return false;
    	});

    }
    	
    );



    </script>