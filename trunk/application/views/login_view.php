
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>DAW | Bienvenido..</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/css/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/css/plugins/font-awesome/font-awesome.min.css"> 
  
    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="assets/css/page_log.css">   

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">
    

    
</head> 

<body>
   

<!--=== Content Part ===-->    
<div class="container">
    <!--Reg Block-->
    <div class="reg-block">
        <div class="reg-block-header">
            <h2>Login</h2>
                      <p>Si no tiene cuenta comuniquese con el <a href="https://plus.google.com/115740604910454442502/about"> administrador</a></p>         
        </div>
 	<?php echo form_open("login/entrar",array('class'=>'form-signin'));?>
        
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text" class="form-control" placeholder="Email"id="email"  name="email">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="text" class="form-control" id="password"  name="password" placeholder="Contrase&ntilde;a">
        </div>
        <hr>
              
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <button type="submit" class="btn-u btn-block">Entrar</button>
            </div>
        </div>
        	<?php echo form_close();?>
        	<?php echo form_open("login/register",array('class'=>'form-signin'));?>
        	 <button type="submit" class="btn-u btn-block">registrar</button>
        	 <?php echo form_close();?>
    </div>
    <!--End Reg Block-->
</div><!--/container-->
<!--=== End Content Part ===-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/js/plugins/countdown/jquery.countdown.js"></script>
<script type="text/javascript" src="assets/js/plugins/backstretch/jquery.backstretch.min.js"></script>
<script type="text/javascript">
    $.backstretch([
      "assets/img/bg/5.jpg",
      "assets/img/bg/4.jpg",
      ], {
        fade: 1000,
        duration: 7000
    });
</script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
<![endif]-->


</body>
</html> 