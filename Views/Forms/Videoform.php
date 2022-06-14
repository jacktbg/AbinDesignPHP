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
    <img class="imagenbanner" src="../../Models/Images/Video/Form/Video.gif">
    <!-- Aqui empieza el Formulario -->
    <form action="../../Controllers/Mailvideo.php" method="POST">
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
        <!-- Tipo de Video - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 display-6" style="text-size-adjust: 5rem;">
            Tipo de Video:
          </div>
        </div>
        <p>
        <div class="row">
          <div class="col-sm-12">
            <select class="form-select" aria-label="Default select example" name="type_video_quoter">
              <option selected disabled>
                Dame click!
              </option>
              <option class="col-sm-6"
                value="Video Corporativo (Video con el fin de informar acerca de los servicios de la empresa, historia, etc)">
                Video Corporativo (Video con el fin de informar acerca de los servicios de la empresa, historia, etc)
              </option>
              <option class="col-sm-6"
                value="Video Publicitario (Storytelling creado por equipo de mkt para promocionar tu servicio/producto)">
                Video Publicitario (Storytelling creado por equipo de mkt para promocionar tu servicio/producto)
              </option>
              <option class="col-sm-6"
                value="Video de Producto (Mostramos tu producto atractivo, grabado en nuestro estudiio de grabación)">
                Video de Producto (Mostramos tu producto atractivo, grabado en nuestro estudiio de grabación)
              </option>
              <option class="col-sm-6"
                value="Video de Evento (Documentamos y capturamos los mejores momentos de tu evento)">
                Video de Evento (Documentamos y capturamos los mejores momentos de tu evento)
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
                value="S/800.00 - S/1,200.00">
              <label class="form-check-label" for="inlineRadio1">
                S/800.00 - S/1,200.00
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/1,500.00 - S/1,900.00">
              <label class="form-check-label" for="inlineRadio2">
                S/1,500.00 - S/1,900.00
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/2,400.00 - S/2,900.00">
              <label class="form-check-label" for="inlineRadio3">
                S/2,400.00 - S/2,900.00
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/3,400.00 - S/4,400.00">
              <label class="form-check-label" for="inlineRadio4">
                S/3,400.00 - S/4,400.00
              </label>
            </div>
            <p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/5,000.00 - S/7,000.00">
              <label class="form-check-label" for="inlineRadio5">
                S/5,000.00 - S/7,000.00
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/8,000.00 - S/12,000.00">
              <label class="form-check-label" for="inlineRadio6">
                S/8,000.00 - S/12,000.00
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/15,000.00 - S/20,000.00">
              <label class="form-check-label" for="inlineRadio7">
                S/15,000.00 - S/20,000.00
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="budget_quoter" id="budget_quoter"
                value="S/25,000.00 - S/35,000.00">
              <label class="form-check-label" for="inlineRadio8">
                S/25,000.00 - S/35,000.00
              </label>
            </div>
          </div>
        </div>
      </div>
      <p>
        <!-- Duracion del Video - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 display-6" style="text-size-adjust: 5rem;">
            Duracion del Video:
          </div>
          <p>
          <div class="form-check form-check-inline">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="time_video_quoter" value="15 seg. max">
              <label class="form-check-label" for="inlineCheckbox1">
                15 seg. max
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="time_video_quoter" value="30 seg. max">
              <label class="form-check-label" for="inlineCheckbox2">
                30 seg. max
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="time_video_quoter" value="1 min. max">
              <label class="form-check-label" for="inlineCheckbox3">
                1 min. max
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="time_video_quoter" value="3 min. max">
              <label class="form-check-label" for="inlineCheckbox4">
                3 min. max
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="time_video_quoter" value="5 min. max">
              <label class="form-check-label" for="inlineCheckbox5">
                5 min. max
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="time_video_quoter" value="+5 min.">
              <label class="form-check-label" for="inlineCheckbox6">
                +5 min.
              </label>
            </div>
          </div>
        </div>
      </div>
      <p>
        <!-- Ubicacion del Video - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Ubicacion del Video:
            </div>
            <p>
            <div class="form-check">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="location_video_quoter" value="Redes Sociales">
                <label class="form-check-label" for="inlineCheckbox1">
                  Redes Sociales
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="location_video_quoter" value="T.V.">
                <label class="form-check-label" for="inlineCheckbox2">
                  T.V.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="location_video_quoter" value="Pantallas">
                <label class="form-check-label" for="inlineCheckbox3">
                  Pantallas
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="location_video_quoter" value="Pagina Web">
                <label class="form-check-label" for="inlineCheckbox4">
                  Pagina Web
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
                  value="Locución Profesional (Voz en off)">
                <label class="form-check-label" for="inlineCheckbox1">
                  Locución Profesional (Voz en off)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="extra_quoter"
                  value="Grabacion Aérea (Drone Profesional)">
                <label class="form-check-label" for="inlineCheckbox2">
                  Grabacion Aérea (Drone Profesional)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="extra_quoter" value="Food Styling">
                <label class="form-check-label" for="inlineCheckbox3">
                  Food Styling
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="extra_quoter" value="Actores">
                <label class="form-check-label" for="inlineCheckbox4">
                  Actores
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="extra_quoter"
                  value="Grabacion simultanea 2 cámaras">
                <label class="form-check-label" for="inlineCheckbox5">
                  Grabacion simultanea 2 cámaras
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
        <!-- Lugar de Rodaje - Form -->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="display-6" style="text-size-adjust: 5rem;">
              Lugar de Rodaje:
            </div>
            <p>
            <div>
              <textarea name="filming_location_quoter" id="filming_location"
                placeholder="Direccion (Calle, Av, Ciudad)"></textarea>
            </div>
          </div>
          <!-- CAST (ACTORES/ MODELOS): -->
          <div class="col-sm-6">
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
      <div class="container">
        <div class="row">
          <div class="col-sm-12 display-6" style="text-size-adjust: 5rem;">
            Descripcion Breve:
          </div>
          <p>
          <div>
            <textarea name="description_video_quoter" id="description_video_quoter"
              placeholder="Descripcion del Video"></textarea>
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