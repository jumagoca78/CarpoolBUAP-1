<!DOCTYPE html>
<html lang="en">
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
</head>

<body class="main-layout home_page">

<!-- Navigation bar -->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" >Carpool BUAP</a>
        <a class="btn btn-primary" href="#">Mi cuenta</a>
    </div>
</nav>

<section>
    <div class="container" id="viajeform">
        <h2>Pedir viaje</h2>
        <form>
            <div class="form-group">
                <label for="origen">Ingresa tu direccion de origen</label>
                <input type="text" class="form-control" placeholder="Origen" id="origen">
            </div>
            <div class="form-group">
                <label for="destino">Ingresa tu direccion de destino</label>
                <input type="text" class="form-control" placeholder="Destino" id="destino">
            </div>
            <div class="clearfix"></div>
            <button type="submit" class="btn btn-info btn-lg btn-responsive" id="viaje">
                A viajar
            </button>
        </form>
    </div>
</section>
</header>
</body>
</html>