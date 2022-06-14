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
    <link rel="stylesheet" href="../../Models/Css/Inicio.css">

    <title>Cotizacion Video</title>
</head>

<body>
    <?php include "../Components/Header.php" ?>
    <div class="bodycontainer">
        <div>
            <img class="imagenbanner" src="../../Models/Images/Servicios/banner1-1.gif">
        </div>
        <div class="frase">
            <h1>Frase ingeniosa</h1>
        </div>
        <div class="ServiciosName">
            <h1>Nuestros Servicios</h1>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <img class="serviceimage" src="../../Models/Images/Video/Form/Video.gif" onclick="location.href='./Video.php' ;" />
                    <div class="container">
                        <h4>
                            <b>Video</b>
                        </h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <img class="serviceimage" src="../../Models/Images/Fotografia/Form/original.gif" onclick="location.href='./Fotografia.php' ;" />
                    <div class="container">
                        <h4>
                            <b>Fotografia</b>
                        </h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <img class="serviceimage" src="../../Models/Images/Diseno/Form/diseno.gif" onclick="location.href='./Disenodigital.php' ;" />
                    <div class="container">
                        <h4>
                            <b>Diseño Digital</b>
                        </h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <img class="serviceimage" src="../../Models/Images/Disenoweb/Form/web.gif" onclick="location.href='./Disenoweb.php' ;" />
                    <div class="container">
                        <h4>
                            <b>Diseño Web</b>
                        </h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <img class="serviceimage" src="../../Models/Images/Marketing/Form/marketing.gif" onclick="location.href='./Marketingdigital.php' ;" />
                    <div class="container">
                        <h4>
                            <b>Marketing Digital</b>
                        </h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-6"></div>
        </div>
    </div>
    <?php include "../Components/Footer.php" ?>
</body>

</html>