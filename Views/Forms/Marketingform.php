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
    <img class="imagenbanner" src="../../Models/Images/Marketing/Form/marketing.gif">
    <!-- Aqui empieza el Formulario -->
    <form action="../../Controllers/Mailmarketing.php" method="POST">
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
        <!-- Lugar de Rodaje - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Servicios/Productos que Ofrece:
            </div>
            <p>
            <div>
              <textarea style="width: 100%" name="product_marketing_quoter" id="filming_location"
                placeholder="Descripción breve productos/servicios"></textarea>
            </div>
          </div>
        </div>
      </div>
      <!-- Objetivos Generales - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Objetivos Generales:
            </div>
            <p>
            <div class="form-check">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="goals_marketing_quoter"
                  value="Posicionamiento de Marca.">
                <label class="form-check-label" for="inlineCheckbox1">
                  Posicionamiento de Marca.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="goals_marketing_quoter"
                  value="Captacion de Clientes">
                <label class="form-check-label" for="inlineCheckbox2">
                  Captacion de Clientes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="goals_marketing_quoter" value="Crear Comunidad">
                <label class="form-check-label" for="inlineCheckbox3">
                  Crear Comunidad
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="goals_marketing_quoter" value="Microvideos">
                <label class="form-check-label" for="inlineCheckbox4">
                  Microvideos
                </label>
              </div>
            </div>
          </div>
          <!-- Redes a Trabajar - Form -->
          <div class="col-sm-6">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Redes a Trabajar:
            </div>
            <p>
            <div class="form-check">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="network_marketing_quoter" value="Facebook">
                <label class="form-check-label" for="inlineCheckbox1">
                  Facebook
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="network_marketing_quoter" value="Instagram">
                <label class="form-check-label" for="inlineCheckbox2">
                  Instagram
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="network_marketing_quoter" value="Página Web">
                <label class="form-check-label" for="inlineCheckbox3">
                  Página Web
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="network_marketing_quoter"
                  value="Whatsapp Business">
                <label class="form-check-label" for="inlineCheckbox4">
                  Whatsapp Business
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p>
        <!-- Objetivos Generales - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Cantidad de Publicaciones:
            </div>
            <p>
            <div class="form-check">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="number_pubs_marketing_quoter" value="8 x Mes">
                <label class="form-check-label" for="inlineCheckbox1">
                  8 x Mes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="number_pubs_marketing_quoter" value="10  x Mes">
                <label class="form-check-label" for="inlineCheckbox2">
                  10 x Mes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="number_pubs_marketing_quoter" value="12 x Mes">
                <label class="form-check-label" for="inlineCheckbox3">
                  12 x Mes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="number_pubs_marketing_quoter" value="16 x Mes">
                <label class="form-check-label" for="inlineCheckbox4">
                  16 x Mes
                </label>
              </div>
            </div>
          </div>
          <!-- Redes a Trabajar - Form -->
          <div class="col-sm-6">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Microvideos:
            </div>
            <p>
            <div class="form-check">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="microvideo_marketing_quoter" value="1 x Mes">
                <label class="form-check-label" for="inlineCheckbox1">
                  1 x Mes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="microvideo_marketing_quoter" value="2 x Mes">
                <label class="form-check-label" for="inlineCheckbox2">
                  2 x Mes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="microvideo_marketing_quoter" value="3 x Mes">
                <label class="form-check-label" for="inlineCheckbox3">
                  3 x Mes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="microvideo_marketing_quoter" value="4 x Mes">
                <label class="form-check-label" for="inlineCheckbox4">
                  4 x Mes
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p>
        <!-- Sesion de Fotos - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Sesion de Fotos:
            </div>
            <p>
            <div class="form-check">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="photos_marketing_quoter" value="1 x Mes">
                <label class="form-check-label" for="inlineCheckbox1">
                  1 x Mes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="photos_marketing_quoter" value="2 x Mes">
                <label class="form-check-label" for="inlineCheckbox2">
                  2 x Mes
                </label>
              </div>
            </div>
          </div>
          <!-- Redes a Trabajar - Form -->
          <div class="col-sm-6">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Respuesta de Mensajes:
            </div>
            <p>
            <div class="form-check">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="social_marketing_quoter" value="Si">
                <label class="form-check-label" for="inlineCheckbox1">
                  Si
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="social_marketing_quoter" value="No">
                <label class="form-check-label" for="inlineCheckbox2">
                  No
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 display-6" style="text-size-adjust: 5rem;">
            Locación de las Fotos/Microvideos:
          </div>
          <p>
          <div class="col-sm-12">
            <select class="form-select" aria-label="Default select example" name="place_marketing_quoter">
              <option selected disabled>
                Locación!
              </option>
              <option class="col-sm-6" value="Estudio Profesional AbinDesign">
                Estudio Profesional AbinDesign
              </option>
              <option class="col-sm-6" value="Local de la Empresa">
                Local de la Empresa
              </option>
              <option class="col-sm-6" value="Otro">
                Otro
              </option>
            </select>
          </div>
          <p>
          <div>
            <textarea style="width: 100%;" name="enterprise_description_marketing_quoter"
              id="enterprise_description_marketing_quoter" placeholder="Dirección de la Empresa"></textarea>
          </div>
        </div>
      </div>
      <p>
      <p style="text-align: center;"><input class="Cotizar" type="submit" value="Mandar Solicitud" /></p>
    </form>
  </div>
  <?php include "../Components/Footer.php" ?>
</body>

</html>