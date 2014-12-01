
<aside class="right-side">

<section class="content">
 <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Detalle de vuelo</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?php echo base_url();?>home">Home</a></li>
                <li class="active">detalle vuelo</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Image Block ===-->
    <div class="image-block">
        <div class="container">
            <div class="company-description">
                <h2>Vuelo nro: <?php echo $data_view[0]->nroVuelo?> </h2>
               <p>  Origen: <?php echo $data_view[0]->origen?></p>
                <p>  Destino: <?php echo $data_view[0]->destino?></p>
                 <p>  Partida: <?php echo $data_view[0]->tiempoPartida?> </p>
                 <p>  Llegada: <?php echo $data_view[0]->tiempoLlegada?></p>
                <a href="<?php echo base_url().'pasajero/listaPorVuelo/'.$data_view[0]->avion_id?>">Modelo de avi&oacute;n: <?php echo $data_view[0]->avion->get()->modelo ?></a> 
                <p></p>
	                <a href="<?php echo base_url().'pasajero/porVuelo/'.$data_view[0]->avion_id?>">Cantidad de pasajeros: <?php echo $data_view[0]->cantPasajeros?></a>                   
                
                    <div class="margin-bottom-20"></div>
              
            </div>   
        </div>    
    </div>    
    <!--=== End Image Block ===-->
    <br></br>
   <br></br>
   
</section>            
</aside>

<script type="text/javascript">

    $(document).ready(function () {
    	var base_url="<?php echo base_url();?>"; 
});
*/
    }
    	
    );



    </script>