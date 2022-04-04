<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$clienteNoEncontrado = $_GET['fallo'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Meta Requerido-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="./assets/css/style.css">  
  <!-- FAVICON -->
	<link rel="apple-touch-icon" href="./assets/img/favicon.png" />
	<link rel="icon" href="./assets/img/favicon.png" type="image/png" />
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NVENY3K7RH"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-NVENY3K7RH');
  </script>

  <title>Socio Minimal</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("form").submit();
       }
  </script>

</head>

<body>
  
  <div class="wrapper fadeInDown">    
    
    <div id="formContent">
      <!-- Icon -->
      <div class="fadeIn first">
        <a href="https://minimaldance.com/"><img src="./assets/img/Logo_gris.png" id="icon" alt="Minimal Dance"/></a>
        <h2> Carnet de Socio</h2>
        <?php
          if ($clienteNoEncontrado == True){
            echo ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Socio no encontrado -</strong> Número de socio o nombre incorrecto, prueba de nuevo.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>');
          }
        ?>
      </div>
  
      <!-- Login Form -->
      <form id="form" action="carnet.php" class="was-validated">
        <input type="text" id="numSocio" class="fadeIn second" name="numSocio" placeholder="Número de socio" required>
        <input type="text" id="nombre" class="fadeIn third" name="nombre" placeholder="Nombre" required>
        <input type="submit" class="g-recaptcha fadeIn fourth" data-sitekey="6LeCKz0fAAAAAHoGLQcKkQKP-7UmBHjsgm6XfOQd" data-callback='onSubmit' value="Obtener">
      </form>
  
      <div class="credits fadeIn fourth">
        <a href="https://gasperwebdesign.com/"><img src="./assets/img/logo_gasper.png" id="icon" alt="User Icon" /></a>
        <p>- &copy; 2022 Diseño -</p>
      </div>

    </div>
    
  </div>

  <div class="g-recaptcha"
      data-sitekey="6LeCKz0fAAAAAHoGLQcKkQKP-7UmBHjsgm6XfOQd"
      data-callback="onSubmit"
      data-size="invisible">
  </div>


  <!-- Bootstrap 4 JS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  <!-- JS Personalizado  -->
  <script type="text/javascript" src="./assets/js/qrcode.js"></script>
  <script type="text/javascript" src="./assets/js/jspdf.js"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>
  </body>

</html>

