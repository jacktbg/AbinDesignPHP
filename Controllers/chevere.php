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

$mpdf = new \Mpdf\Mpdf();

//Create our PDF
$data = '';
$data .= '<style>






</style>';
$data .= '<div class="container">';
$data .= '<img src="image/cotocus.png" style="width:100px; height:100px;"><br />';
$data .= '<hr>';
$data .= '<table>';
$data .= '<tr>';
$data .= '<td><strong>Nombres y Apellidos del cliente: </strong></td><td>' . $name_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<td><strong>Nombre de la Empresa: </strong></td><td>' . $enterprise_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<td><strong>Número de Contacto: </strong></td><td>' . $phone_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<td><strong>Email: </strong></td><td>' . $email_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<td><strong>Servicios/Productos que Ofrece: </strong></td><td>' . $product_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<td><strong>Objetivos Generales: </strong></td><td>' . $goals_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<td><strong>Redes a Trabajar: </strong></td><td>' . $network_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<td><strong>Cantidad de Publicaciones: </strong></td><td>' . $number_pubs_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<td><strong>Microvideos: </strong></td><td>' . $microvideo_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<td><strong>Sesion de Fotos: </strong></td><td>' . $photos_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<td><strong>Respuesta de Mensajes: </strong></td><td>' . $social_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<td><strong>Locación de las Fotos/Microvideos: </strong></td><td>' . $place_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '<tr>';
$data .= '<td><strong>Descripcion: </strong></td><td>' . $enterprise_description_marketing_quoter . '</td>';
$data .= '</tr>';
$data .= '</table>';

//Write PDF
$mpdf->WriteHTML($data);

//Output to string
$pdf = $mpdf->Output('', 'S');

//Run the function
sendEmail($pdf);

function sendEmail($pdf)
{
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

  $mail = new PHPMailer(true);
  $body = '';
  $body .= '<style>
</style>';
  $body .= '<div class="container">';
  $body .= '<img src="image/cotocus.png" style="width:100px; height:100px;"><br />';
  $body .= '<hr>';
  $body .= '<table>';
  $body .= '<tr>';
  $body .= '<td><strong>Nombres y Apellidos del cliente: </strong></td><td>' . $name_quoter . '</td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= '<td><strong>Nombre de la Empresa: </strong></td><td>' . $enterprise_quoter . '</td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= '<td><strong>Número de Contacto: </strong></td><td>' . $phone_quoter . '</td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= '<td><strong>Email: </strong></td><td>' . $email_quoter . '</td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= '<td><strong>Servicios/Productos que Ofrece: </strong></td><td>' . $product_marketing_quoter . '</td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= '<td><strong>Objetivos Generales: </strong></td><td>' . $goals_marketing_quoter . '</td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= '<td><strong>Redes a Trabajar: </strong></td><td>' . $network_marketing_quoter . '</td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= '<td><strong>Cantidad de Publicaciones: </strong></td><td>' . $number_pubs_marketing_quoter . '</td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= '<td><strong>Microvideos: </strong></td><td>' . $microvideo_marketing_quoter . '</td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= '<td><strong>Sesion de Fotos: </strong></td><td>' . $photos_marketing_quoter . '</td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= '<td><strong>Respuesta de Mensajes: </strong></td><td>' . $social_marketing_quoter . '</td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= '<td><strong>Locación de las Fotos/Microvideos: </strong></td><td>' . $place_marketing_quoter . '</td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= '<td><strong>Descripcion: </strong></td><td>' . $enterprise_description_marketing_quoter . '</td>';
  $body .= '</tr>';
  $body .= '</table>';

  try {
    //Server settings
    $mail->isSMTP();                      // Set mailer to use SMTP 
    $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
    $mail->SMTPAuth = true;               // Enable SMTP authentication 
    $mail->Username = 'jefabindesign@gmail.com';   // SMTP username 
    $mail->Password = 'jefabindesign2022';   // SMTP password 
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
    $mail->Port = 587;                    // TCP port to connect to 

    // Sender info 
    $mail->setFrom('jefabindesign@gmail.com', 'AbinDesign');
    $mail->addAddress('jefabindesign@gmail.com');     // Add a recipient

    //Attachment
    $mail->addStringAttachment($pdf, 'AbinDesign Marketing Cotizacion.pdf');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'AbinDesign Marketing Cotizacion';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <meta http-equiv="refresh" content="0; URL=../Views/Pages/Servicios.php" />
  <title>
  </title>
</head>

<body>

</body>

</html>