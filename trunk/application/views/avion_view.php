
<aside class="right-side">

<section class="content">
 <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Detalle de avi&oacute;n</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?php echo base_url();?>home">Home</a></li>
                <li class="active">detalle de avi&oacute;n</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Image Block ===-->
    <div class="image-block">
        <div class="container">
            <div class="company-description">
                <h2>Patente: <?php echo $data_view[0]->matricula?> </h2>
               <p>  Modelo: <?php echo $data_view[0]->modelo?></p>
                <p>  Fabricante: <?php echo $data_view[0]->fabricante?></p>
                <p>  Fecha Fabricaci&oacute;n: <?php echo $data_view[0]->fechaFabricacion?></p>
                <p>  Fecha de entrada en servicio: <?php echo $data_view[0]->fechaEntradaServicio?></p>
                
                 <p>  Capacidad: <?php echo $data_view[0]->capacidad?></p>
                
	                                   
                    <div class="margin-bottom-20"></div>
              <button class="btn-u" type="button">Vuelos <?php echo date("Y"); ?></button>
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
 
    }
    	
    );



    </script>