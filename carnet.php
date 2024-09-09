<?php
  header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");

    include ('./funciones.php');

    //Iniciamos variables de la URL y cliente encontrado
    $numSocio = $_GET['numSocio'];
    $nombre = $_GET['nombre'];
    $clienteEncontrado = False;
    
    //Preparamos el JSON
    $data = file_get_contents("./private/clientes.json");
    $clientes = json_decode($data, true);
    
    //Pasamos el nombre a minusculas, contamos letras y quitamos acentos
    $nombre = eliminar_tildes ($nombre);
    $numLetrasNombre = strlen($nombre);
    $nombre = strtolower ($nombre);
     
    //Recorremos el JSON en busca del cliente, extraemos el nombre
    foreach ($clientes as $cliente) {
      $nombreComparar = substr($cliente ['nombre'],0,$numLetrasNombre);
      $nombreComparar = eliminar_tildes($nombreComparar);
      $nombreComparar = strtolower($nombreComparar);
      $numSocioComparar = ($cliente ['id']);
      
      if (($numSocio == $numSocioComparar) && ($nombre == $nombreComparar))
        {
        $numCarnet = ($cliente ['id']);
        $nombreCarnet = ($cliente ['nombre']);
        $clienteEncontrado = True;
        } 
    }
    if ($clienteEncontrado == False){
      header('Location: ./index.php?fallo=true');
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
  
  <!-- FAVICON -->
	<link rel="apple-touch-icon" href="./assets/img/favicon.png" />
	<link rel="icon" href="./assets/img/favicon.png" type="image/png" />

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
          <h2><?php echo $nombreCarnet;?></h2>
          <div>
            <p>Número Socio: <span class="badge bg-primary"><?php echo $numCarnet?></span></p>
          </div>
          <br>
          <input id="numSocio" type="text" value="https://socio.minimaldance.com/check.php?numSocio=<?php echo $numCarnet?>"></input>
       </div>

       <div class= "fadeIn third">
          <div id="qrcode" style="width:150px; height:150px;margin: auto;display: block;"></div> 
        </div>
        
      <div class="credits fadeIn fourth">
        <br>
        <a href="https://github.com/cgasper79/Carnet-Socio"><img src="./assets/img/github.png" id="icon" alt="User Icon" /> View project on Github</a>
        <p>- @cgasper79 - <a href="./LICENSE">MIT License</a> -</p>
      </div>
      <div alig="center" class="globo">
            <p>Pulsa aquí para descargar</p>
      </div>
      <img class="descarga" src="./assets/img/descarga.png"/>
    </div>
    
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