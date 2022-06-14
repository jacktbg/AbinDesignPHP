<?php
$name_quoter = $_POST['name_quoter'];
$enterprise_quoter = $_POST['enterprise_quoter'];
$phone_quoter = $_POST['phone_quoter'];
$email_quoter = $_POST['email_quoter'];
$product_marketing_quoter = $_POST['product_marketing_quoter'];
$goals_marketing_quoter = $_POST['goals_marketing_quoter'];
$network_marketing_quoter = $_POST['network_marketing_quoter'];
$number_pubs_marketing_quoter = $_POST['number_pubs_marketing_quoter'];
$microvideo_marketing_quoter = $_POST['microvideo_marketing_quoter'];
$photos_marketing_quoter = $_POST['photos_marketing_quoter'];
$social_marketing_quoter = $_POST['social_marketing_quoter'];
$place_marketing_quoter = $_POST['place_marketing_quoter'];
$enterprise_description_marketing_quoter = $_POST['enterprise_description_marketing_quoter'];

// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

require_once __DIR__ . './vendor/autoload.php';

// Importando estilos
$css = file_get_contents('../Models/Css/PdfMarketing.css');

// Creando PDF con MPDF
$mpdf = new \Mpdf\Mpdf([]);

// Create our PDF
$data = '';
$data .= '<body>';
$data .= '<div class="container">';
$data .= '<div class="container-sm">';
$data .= '<div class="container-shido">';
$data .= '<div class="container-form">';
$data .= '<h1 class="display-4">Cotizacion Marketing</h1>';
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
$data .= '<th class="thpdf" scope="row">Servicios/Productos que Ofrece:</th><td class="tdpdf">' . $product_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Objetivos Generales:</th><td class="tdpdf">' . $goals_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Redes a Trabajar:</th><td class="tdpdf">' . $network_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Cantidad de Publicaciones:</th><td class="tdpdf">' . $number_pubs_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Microvideos:</th><td class="tdpdf">' . $microvideo_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Sesion de Fotos:</th><td class="tdpdf">' . $photos_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Respuesta de Mensajes:</th><td class="tdpdf">' . $social_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Locación de las Fotos/Microvideos:</th><td class="tdpdf">' . $place_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<th class="thpdf" scope="row">Descripcion:</th><td class="tdpdf">' . $enterprise_description_marketing_quoter . '</td>';
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
$body .= '<h1 class="display-4">Cotizacion Marketing</h1>';
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
$body .= '<th style="text-align: left" scope="row">Servicios/Productos que Ofrece:</th><td style="padding-left: 10%;">' . $product_marketing_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Objetivos Generales:</th><td style="padding-left: 10%;">' . $goals_marketing_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Redes a Trabajar:</th><td style="padding-left: 10%;">' . $network_marketing_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Cantidad de Publicaciones:</th><td style="padding-left: 10%;">' . $number_pubs_marketing_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Microvideos:</th><td style="padding-left: 10%;">' . $microvideo_marketing_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Sesion de Fotos:</th><td style="padding-left: 10%;">' . $photos_marketing_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Respuesta de Mensajes/Lugar:</th><td style="padding-left: 10%;">' . $social_marketing_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Locación de las Fotos/Microvideos:</th><td style="padding-left: 10%;">' . $place_marketing_quoter . '</td>';
$body .= '</tr>';
$body .= '<tr>';
$body .= '<th style="text-align: left" scope="row">Descripcion:</th><td style="padding-left: 10%;">' . $enterprise_description_marketing_quoter . '</td>';
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
$mail->addStringAttachment($pdf, 'AbinDesign Marketing Cotizacion.pdf');

// Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'AbinDesign Marketing Cotizacion';
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