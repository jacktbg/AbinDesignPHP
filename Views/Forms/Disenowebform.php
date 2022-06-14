<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../../Models/Css/VideoForm.css">
</head>

<body>
  <?php include "../Components/Header.php" ?>
  <div class="bodycontainer">
    <img class="imagenbanner" src="../../Models/Images/Disenoweb/Form/web.gif">
    <!-- Aqui empieza el Formulario -->
    <form action="../../Controllers/Maildisenoweb.php" method="POST">
      <!-- Datos de la Empresa - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 display-6" style="text-size-adjust: 5rem;">
            Datos de la Empresa:
          </div>
        </div>
        <p>
        <div class="row">
          <div class="col-sm-6">
            <p>Nombres y Apellidos <input type="text" id="name_quoter" name="name_quoter" /></p>
          </div>
          <div class="col-sm-6">
            <p>Empresa <input type="text" id="enterprise_quoter" name="enterprise_quoter" /></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <p>Telefono <input type="text" id="phone_quoter" name="phone_quoter" /></p>
          </div>
          <div class="col-sm-6">
            <p>Email <input type="text" id="email_quoter" name="email_quoter" /></p>
          </div>
        </div>
      </div>
      <p>
      <p style="text-align: center;"><input class="Cotizar" type="submit" value="Mandar Solicitud" /></p>
    </form>
    </img>
  </div>
  <?php include "../Components/Footer.php" ?>
</body>

</html>