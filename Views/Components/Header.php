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
  <link rel="stylesheet" href="../../index.php">
  <link rel="stylesheet" href="../../Models/Css/Header.css">
  <title>Abin Design</title>

</head>
<header class="sticky-top">
  <div class="row">
    <div class="col-7">
      <div class="divabosulute">
        <img onclick="location.href='../../index.php' ;" class="dnlogo" src="../../Models/Images/db.png">
        </img>
      </div>
    </div>
    <div class="col-5">
      <div class="dropdown">
        <div class="dropbtn">
          <img class="imageMenuDropdown" src="../../Models/Images/MenuDropDownBlanco.png" />
        </div>
        <div class="dropdown-one">
          <div class="dItem" onclick="location.href='../../index.php'">
            Inicio
          </div>
          <div id="link1" class="dItem">
            <a href="../Pages/Servicios.php">
              Servicios
            </a>
            <div class="dropdown-two">
              <div class="dItem" id="file" onclick="location.href='../Pages/Video.php'">
                Video
              </div>
              <div class="dItem" id="file" onclick="location.href='../Pages/Fotografia.php'">
                Fotografia
              </div>
              <div class="dItem" id="file" onclick="location.href='../Pages/Disenodigital.php'">
                Diseño Digital
              </div>
              <div class="dItem" id="file" onclick="location.href='../Pages/Disenoweb.php'">
                Diseño Web
              </div>
              <div class="dItem" id="file" onclick="location.href='../Pages/Marketingdigital.php'">
                Marketing Digital
              </div>
            </div>
          </div>
          <div class="dItem" id="file" onclick="location.href='../Pages/Nosotros.php'">
            Nosotros
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<include>