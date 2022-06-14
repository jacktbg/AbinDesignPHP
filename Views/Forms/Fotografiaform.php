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
    <img class="imagenbanner" src="../../Models/Images/Fotografia/Form/original.gif">
    <!-- Aqui empieza el Formulario -->
    <form action="../../Controllers/Mailfotografia.php" method="POST">
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
        <!-- Tipo de Sesion Fotografica - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 display-6" style="text-size-adjust: 5rem;">
            Tipo de Sesión Fotografica:
          </div>
        </div>
        <p>
        <div class="row">
          <div class="col-sm-12">
            <select class="form-select" aria-label="Default select example" name="type_photo_quoter">
              <option selected disabled>
                Dame click!
              </option>
              <option class="col-sm-6"
                value="Fotografía Corporativa (ideal para instalaciones, personal, procesos, servicios,etc)">
                Fotografía Corporativa (ideal para instalaciones, personal, procesos, servicios,etc)
              </option>
              <option class="col-sm-6"
                value="Fotografía de producto (Sesión en nuestro estudio profesional, iluminación, fondos, etc)">
                Fotografía de producto (Sesión en nuestro estudio profesional, iluminación, fondos, etc)
              </option>
              <option class="col-sm-6" value="Fotografía de Evento (capturamos los mejores momentos)">
                Fotografía de Evento (capturamos los mejores momentos)
              </option>
              <option class="col-sm-6"
                value="Fotografía Publicitaria (Fotos para usos publicitarios, redes sociales, web, catalogos, etc)">
                Fotografía Publicitaria (Fotos para usos publicitarios, redes sociales, web, catalogos, etc)
              </option>
            </select>
          </div>
        </div>
      </div>
      <p>
        <!-- Presupuesto destinado al Proyecto - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 display-6" style="text-size-adjust: 5rem;">
            Presupuesto destinado al Proyecto:
          </div>
          <p>
          <div class="form-check form-check-inline">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/350.00 - S/550.00">
              <label class="form-check-label" for="inlineRadio1">
                S/350.00 - S/550.00
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/650.00 - S/950">
              <label class="form-check-label" for="inlineRadio2">
                S/650.00 - S/950
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/1,450.00 - S/1,950.00">
              <label class="form-check-label" for="inlineRadio3">
                S/1,450.00 - S/1,950.00
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/2,450.00 - S/2,950.00">
              <label class="form-check-label" for="inlineRadio4">
                S/2,450.00 - S/2,950.00
              </label>
            </div>
            <p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/3,450.00 - S/3,950.00">
              <label class="form-check-label" for="inlineRadio5">
                S/3,450.00 - S/3,950.00
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/4,450.00 - S/4,950.00">
              <label class="form-check-label" for="inlineRadio6">
                S/4,450.00 - S/4,950.00
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/5,450.00 - S/5,950.00">
              <label class="form-check-label" for="inlineRadio7">
                S/5,450.00 - S/5,950.00
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/6,450.00 - S/6,950.00">
              <label class="form-check-label" for="inlineRadio8">
                S/6,450.00 - S/6,950.00
              </label>
            </div>
          </div>
        </div>
      </div>
      <p>
        <!-- Descripcion Breve -->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Descripcion Breve:
            </div>
            <p>
            <div>
              <textarea style="width: 100%;" name="photo_description_quoter" id="photo_description_quoter"
                placeholder="Descripcion Breve"></textarea>
            </div>
          </div>
          <!-- Cantidad de Fotos: -->
          <div class="col-sm-6">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Cantidad de Fotos:
            </div>
            <p>
            <div class="col-sm-6" style="text-align:center;">
              <input type="number" style="width:100%;" id="photo_number_quoter" name="photo_number_quoter" />
            </div>
          </div>
        </div>
      </div>
      <p>
        <!-- Uso del Material - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Uso del Material:
            </div>
            <p>
            <div class="form-check">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="use_photo_quoter" value="Redes Sociales">
                <label class="form-check-label" for="inlineCheckbox1">
                  Redes Sociales
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="use_photo_quoter" value="Impresos">
                <label class="form-check-label" for="inlineCheckbox2">
                  Impresos
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="use_photo_quoter" value="Pantallas">
                <label class="form-check-label" for="inlineCheckbox3">
                  Pantallas
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="use_photo_quoter" value="Pagina Web">
                <label class="form-check-label" for="inlineCheckbox4">
                  Pagina Web
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="use_photo_quoter" value="Gigantografias">
                <label class="form-check-label" for="inlineCheckbox4">
                  Gigantografias
                </label>
              </div>
            </div>
          </div>
          <!-- Extras - Form -->
          <div class="col-sm-6">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Extras:
            </div>
            <p>
            <div class="form-check">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="extra_quoter"
                  value="Ademas de las fotos editadas, necesito sin editar">
                <label class="form-check-label" for="inlineCheckbox1">
                  Ademas de las fotos editadas, necesito sin editar
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="extra_quoter" value="Retoque Fotografico">
                <label class="form-check-label" for="inlineCheckbox2">
                  Retoque Fotográfico
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="extra_quoter" value="Fotografía Aérea">
                <label class="form-check-label" for="inlineCheckbox3">
                  Fotografía Aérea
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="extra_quoter"
                  value="Fotografía Simultanea a 2 cámaras">
                <label class="form-check-label" for="inlineCheckbox4">
                  Fotografía Simultanea a 2 cámaras
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="extra_quoter" value="Montaje Profesional">
                <label class="form-check-label" for="inlineCheckbox5">
                  Montaje Profesional
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="extra_quoter" value="Maquillaje Profesional">
                <label class="form-check-label" for="inlineCheckbox6">
                  Maquillaje Profesional
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="extra_quoter" value="Peinado (estilista)">
                <label class="form-check-label" for="inlineCheckbox4">
                  Peinado (estilista)
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p>
        <!-- Locacion/Lugar - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Locacion/Lugar:
            </div>
            <p>
            <div>
              <textarea style="width:100%;" name="photo_place_quoter" id="filming_location"
                placeholder="¿Donde se realizara la sesión?"></textarea>
            </div>
          </div>
        </div>
      </div>
      <p>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Cast (Actores/ Modelos):
            </div>
            <p>
            <div class="form-check">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="cast_quoter" id="inlineRadio1" value="Si">
                <label class="form-check-label" for="inlineRadio1">
                  Si
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="cast_quoter" id="inlineRadio2" value="No">
                <label class="form-check-label" for="inlineRadio2">
                  No
                </label>
              </div>
            </div>
            <p>
            <div class="row">
              <div class="col-sm-12">
                <select class="form-select" name="number_actors_quoter" aria-label="Default select example">
                  <option selected disabled>
                    Dame click!
                  </option>
                  <option class="col-sm-6" value="1">
                    1
                  </option>
                  <option class="col-sm-6" value="2">
                    2
                  </option>
                  <option class="col-sm-6" value="3">
                    3
                  </option>
                  <option class="col-sm-6" value="4">
                    4
                  </option>
                  <option class="col-sm-6" value="5">
                    5
                  </option>
                  <option class="col-sm-6" value="6">
                    6
                  </option>
                  <option class="col-sm-6" value="7">
                    7
                  </option>
                  <option class="col-sm-6" value="8">
                    8
                  </option>
                  <option class="col-sm-6" value="9">
                    9
                  </option>
                  <option class="col-sm-6" value="10">
                    10
                  </option>
                  <option class="col-sm-6" value="+10">
                    +10
                  </option>
                </select>
              </div>
            </div>
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