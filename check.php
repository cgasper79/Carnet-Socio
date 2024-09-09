<?php
    $numSocio = $_GET['numSocio'];

    $data = file_get_contents("./private/clientes.json");
    $clientes = json_decode($data, true);
   
    foreach ($clientes as $cliente) {
      if ($numSocio == ($cliente['id'])){
          $socio = True;
          break;
      } else {
          $socio = False;
      }
    }
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
  <title>Socio Minimal</title>
</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
  
      <!-- Icon -->
      <div class="fadeIn first">
        <a href="https://minimaldance.com/"><img src="./assets/img/Logo_gris.png" id="icon" alt="Minimal Dance"/></a>
      </div>
      <div class="fadeIn second">
          <div>
            <h4>Número Socio: <span class="badge bg-primary"><?php echo $numSocio?></span></h4>
          </div>
          <br>
       </div>

       <div class= "fadeIn third">
           <?php 
            if ($socio == TRUE) {
                echo ('<img src="./assets/img/ok.svg" id="check"/>');
                echo ('<br>');
                echo ('<h4 class="badge badge-pill badge-success">Socio Válido</h4>');
                } else {
                echo ('<img src="./assets/img/nook.svg" id="check"/>'); 
                echo ('<br>');
                echo ('<h4 class="badge badge-pill badge-danger"> Socio No Válido</h4>');
                }
            ?>
        </div>
  
      <div class="credits fadeIn fourth">
        <br>
        <a href="https://github.com/cgasper79/Carnet-Socio"><img src="./assets/img/github.png" id="icon" alt="User Icon" /> View project on Github</a>
        <p>- @cgasper79 - <a href="./LICENSE">MIT License</a> -</p>
      </div>

    </div>
    
  </div>

  <!-- Bootstrap 4 JS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  <!-- JS Personalizado  -->
  <script type="text/javascript" src="./assets/js/qrcode.js"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>

  </body>

</html>