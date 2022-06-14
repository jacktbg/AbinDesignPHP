<?php
$name_quoter = $_POST['name_quoter'];
$enterprise_quoter = $_POST['enterprise_quoter'];
$phone_quoter = $_POST['phone_quoter'];
$email_quoter = $_POST['email_quoter'];
$type_video_quoter = $_POST['type_video_quoter'];
$budget_quoter = $_POST['budget_quoter'];
$time_video_quoter = $_POST['time_video_quoter'];
$location_video_quoter = $_POST['location_video_quoter'];
$extra_quoter = $_POST['extra_quoter'];
$filming_location_quoter = $_POST['filming_location_quoter'];
$cast_quoter = $_POST['cast_quoter'];
$number_actors_quoter = $_POST['number_actors_quoter'];
$description_video_quoter = $_POST['description_video_quoter'];

// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

require_once __DIR__ . './vendor/autoload.php';

// Importando estilos
$css = file_get_contents('../Models/Css/PdfVideo.css');

$mpdf = new \Mpdf\Mpdf([]);

// Create our PDF
$data = '';
$data .= '<body>';
$data .= '<div class="container">';
$data .= '<div class="container-sm">';
$data .= '<div class="container-shido">';
$data .= '<div class="container-form">';
$data .= '<h1 class="display-4">Cotizacion Video</h1>';
$data .= '<hr>';
$data .= '<p>';
$data .= '<div class="table-responsive-sm">';
$data .= '<table class="table">';
$data .= '<tbody>';
//Add data
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Nombres y Apellidos del Cliente:</th><td class="tdpdf">' . $name_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Nombre de la Empresa:</th><td class="tdpdf">' . $enterprise_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Número de Contacto:</th><td class="tdpdf">' . $phone_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Email:</th><td class="tdpdf">' . $email_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Tipo de Video:</th><td class="tdpdf">' . $type_video_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Presupuesto destinado al Proyecto:</th><td class="tdpdf">' . $budget_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Duracion del Video:</th><td class="tdpdf">' . $time_video_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Ubicacion del Video:</th><td class="tdpdf">' . $location_video_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Extras:</th><td class="tdpdf">' . $extra_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Lugar del Rodaje:</th><td class="tdpdf">' . $filming_location_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Cast:</th><td class="tdpdf">' . $cast_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">N° de Actores:</th><td class="tdpdf">' . $number_actors_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Descripcion Breve:</th><td class="tdpdf">' . $description_video_quoter . '</td>';
$data .= '</tr>';
$data .= '</tbody>';
$data .= '</table>';
$data .= '</div>';
$data .= '</div>';
$data .= '</div>';
$data .= '</div>';
$data .= '</div>';
$data .= '</body>';
$data .= '</html>';

$mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($data, \Mpdf\HTMLParserMode::HTML_BODY);

//Output to string
$pdf = $mpdf->Output('', 'S');

//Creando E-Mail
$mail = new PHPMailer(true);
$body = "";
$body .= '<body>';
$body .= '<div class="container">';
$body .= '<div class="container-sm">';
$body .= '<div class="container-shido">';
$body .= '<h1 class="display-4">Cotizacion Video</h1>';
$body .= '<hr>';

//Add data
$body .= '<p>';
$body .= '<div class="table-responsive-sm">';
$body .= '<table class="table">';
$body .= '<tbody>';
$body .= '<tr>';
$body .= '<th style="text-align: left;" scope="row">Nombres y Apellidos del Cliente:</th><td style="padding-left: 10%;">' . $name_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Nombre de la Empresa:</th><td style="padding-left: 10%;">' . $enterprise_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Número de Contacto:</th><td style="padding-left: 10%;">' . $phone_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Email:</th><td style="padding-left: 10%;">' . $email_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Tipo de Video:</th><td style="padding-left: 10%;">' . $type_video_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Presupuesto destinado al Proyecto:</th><td style="padding-left: 10%;">' . $budget_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Duracion del Video:</th><td style="padding-left: 10%;">' . $time_video_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Ubicacion del Video:</th><td style="padding-left: 10%;">' . $location_video_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Extras:</th><td style="padding-left: 10%;">' . $extra_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Lugar del Rodaje:</th><td style="padding-left: 10%;">' . $filming_location_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Cast:</th><td style="padding-left: 10%;">' . $cast_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">N° de Actores:</th><td style="padding-left: 10%;">' . $number_actors_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Descripcion Breve:</th><td style="padding-left: 10%;">' . $description_video_quoter . '</td>';
$body .= '</tr>';
$body .= '</tbody>';
$body .= '</table>';
$body .= '</div>';
$body .= '</div>';
$body .= '</div>';
$body .= '</div>';
$body .= '</body>';
$body .= '</html>';

//Server settings
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'mail.abindesign.studio';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'jef@abindesign.studio';   // SMTP username 
$mail->Password = 'jefabindesign2022';   // SMTP password 
$mail->SMTPSecure = 'ssl';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 465;                    // TCP port to connect to 

// Sender info 
$mail->setFrom('jef@abindesign.studio', 'AbinDesign');
$mail->addAddress('jefabindesign@gmail.com');     // Add a recipient

//Attachment
$mail->addStringAttachment($pdf, 'AbinDesign Video Cotizacion.pdf');

// Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'AbinDesign Video Cotizacion';
$mail->Body    = $body;
$mail->AltBody = strip_tags($body);

$mail->send();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="0; URL=../Views/Pages/Servicios.php" />
  <title>Document</title>
</head>

<body>

</body>

</html>