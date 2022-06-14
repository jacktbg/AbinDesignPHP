<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Models/Css/Disenodigital.css">

    <title>Cotizacion Video</title>
</head>

<body>
    <div class="bodycontainer">
        <?php include "../Components/Header.php" ?>
        <div>
            <img class="imagenbanner" src="../../Models/Images/Diseno/banner1-1.png">
        </div>
        <div>
            <img class="imagenbanner" src="../../Models/Images/Diseno/banner1-2.png">
        </div>
        <div class="frase">
            <h1>Frase ingeniosa</h1>
        </div>
        <div class="ServiciosName">
            <h1>Diseño Digital</h1>
        </div>
        <div class="buttonvideo">
            <button button type="button" class="btn btn-outline-warning" onclick="location.href='../Forms/Disenodigitalform.php'">Cotizar</button>
        </div>
        <?php include "../Components/Footer.php" ?>
    </div>
</body>

</html>