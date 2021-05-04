<?php
    session_start();
    

  /*  
  if(!isset($_SESSION["valido"]))
  {
    echo '<script>window.location="registro.php"; alert("Login first")</script>';
    return; 
  }
  else
  {
    if($_SESSION["valido"] != "ok")
    {
      echo '<script>window.location="registro.php"; alert("Login first");</script>';
      return;
    }
  }	
*/
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CarPool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="../css/stylee.css">
    <script src="../js/map.js">
    </script>

</head>

<body>

<main class="bg-light text-center">
    <h2>Carpool BUAP</h2>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control mb-3" placeholder="Salida" id="salida">
            <input type="text" class="form-control mb-3" placeholder="Destino" id="destino">
        </div>
        <button type="submit" class="btn btn-primary">Publicar Ruta</button>
    </form>
</main>
<br>
<section class="bg-light text-center">
    <div class="container">
        <div class="mx-auto">
            <div id="map">
            </div>
        </div>
    </div>
    <br>
</section>

<div class="hide invisible">
    <input type="text" class="form-control mb-3" placeholder="Salida" id="ayuda">
</div>

<!-- Navigation bar -->
<nav class="navbar fixed-bottom navbar-light bg-light">
    <a class="fas fa-home fa-2x" href="seleccionarusuario.php"></a>
    <a class="fas fa-route fa-2x" href="inicio.php"></a>
    <a class="fas fa-user-alt fa-2x" href="profile.php"></a>
    <a class="fas fa-comment fa-2x" href="chat.php"></a>
</nav>

<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcjCICzAu6yZWsdFNaCJNd4pKMYMVFMqo&map_ids=f6325ac47accdc99&callback=initMap&libraries=&v=weekly">
</script>

</body>
</html>
