<?php

$name = $_POST['name_contact'];
$email = $_POST['email_contact'];
$comments = $_POST['comments_contact'];
$date = date('d-M-y H:i');
$origen = $_POST['origen_contact'];

//Generamos un numero de control usando un aleatorio sobre la hora
$boundary = md5(time() . rand(1, 100));

//Confeccionamos el HTML con los datos del usuario
$content =
    '
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Imprac - ' .
    $origen .
    '</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; height: 100% !important; width: 100% !important; margin: 0; padding: 0;">


<!-- ONE COLUMN SECTION -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;">
<tr>
<td bgcolor="#ffffff" align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 15px;" class="section-padding">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="800">
            <tr>
            <td align="center" valign="top" width="800">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 800px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;" class="responsive-table"><tr>
<td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;"><tr>
<td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <!-- COPY -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;">
<tr>
<td bgcolor="#106299" align="center" style="line-height: 25px;-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0 0; background-color:#106299; color:#ffffff;">
</td>
                                        </tr>
                                        <tr>
<td bgcolor="#106299" align="center" style="font-size: 20px; line-height: 25px; font-family: Helvetica, Arial, sans-serif;  -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0; background-color:#106299; color:#ffffff; vertical-align: top;">Imprac - ' .
    $origen .
    '</td>
                                        </tr>
                                        <tr>
<td bgcolor="#106299" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0; background-color:#106299; color:#ffffff;">&nbsp;</td>
                                        </tr>


<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #1d214f; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;">
        Nombre:
    </td>
</tr>
<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;">
        ' .
    $name .
    '
    </td>
</tr>
<td><hr></td>

<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #1d214f; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;">
        Email:
    </td>
</tr>
<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;">
        ' .
    $email .
    '
    </td>
</tr>
<td><hr></td>

<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #1d214f; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;">
        Comentarios:
    </td>
</tr>
<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;">
        ' .
    $comments .
    '
    </td>
</tr>

<td><hr></td>

<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #1d214f; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;">
        Fecha:
    </td>
</tr>
<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;">
        ' .
    $date .
    '
    </td>
</tr>
<td><hr></td>

<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #1d214f; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;">
        Numero de Serie:
    </td>
</tr>
<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;">
        ' .
    $boundary .
    '
    </td>
</tr>
<td><hr></td>

<tr>
<td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
    Imprac - Barragan 855 Ciudadela norte - Buenos Aires Argentina.
    <br>
    TEL/FAX (+54) 011.4488.4418
    <span style="font-family: Arial, sans-serif; font-size: 12px; color: #444444;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
    <a href="mailto:info@imprac.com.ar" style="color: #666666; text-decoration: none;">info@imprac.com.arr</a>
</td>
</tr>
</table>
</td>
                            </tr></table>
</td>
                </tr></table>
<!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
</td>
    </tr>
</table>
</body>
</html>
';

mail(
    'info@imprac.com.ar',
    'Formulario Web Contacto',
    $content,
    "MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8\nFrom: $name < $email >",
);

// Registro la consulta en la bdd
include 'conexion-contacto.php';

//preparamos el mensaje de confirmacion que le enviaremos al remitente.
// $mensaje = '
// <!DOCTYPE html>
// <html>
// <head>
// <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
// <title>Gracias por su contacto</title>
// <meta charset="utf-8">
// <meta name="viewport" content="width=device-width, initial-scale=1">
// <meta http-equiv="X-UA-Compatible" content="IE=edge">
// </head>
// <body style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; height: 100% !important; width: 100% !important; margin: 0; padding: 0;">

// <!-- ONE COLUMN SECTION -->
// <table border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;">
// <tr>
// <td bgcolor="#ffffff" align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 15px;" class="section-padding">
//             <!--[if (gte mso 9)|(IE)]>
//             <table align="center" border="0" cellspacing="0" cellpadding="0" width="800">
//             <tr>
//             <td align="center" valign="top" width="800">
//             <![endif]-->
//             <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;" class="responsive-table"><tr>
// <td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
//                         <table width="100%" border="0" cellspacing="0" cellpadding="0" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;"><tr>
// <td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
//                                     <!-- COPY -->
//                                     <table width="100%" border="0" cellspacing="0" cellpadding="0" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;">
// <tr>
// <td align="center" style="line-height: 25px;-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0 0;">
//     <img src="http://imprac.com.ar/img/logo.jpg" alt="logo imprac">
// </td>
//                                         </tr>
//                                         <tr>
// <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0 0;" class="padding-copy">
//     <strong>' . $name . ', Gracias por tu contacto</strong> <br>
//     <p>
//         Te contactaremos a la brevedad posible.
//     </p>

//     <p>
//         Si tenes consultas podes escribirnos a <a href="mailto:info@imprac.com.ar">info@imprac.com.ar</a>
//     </p>

//     <p><strong>Atentamente, el equipo de Imprac</strong></p>

// </td>
//                                         </tr>

// <tr>
// <td align="left" style="font-size: 14px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #999999; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0 0;" class="padding-copy">
//     Formulario enviado el ' . $date . '.<br>
//     Numero de serie: ' . $boundary . '</td>
//                                         </tr>
// <tr>
// <td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
//     <br>
//     <hr>
//     <br>
// </td>
// </tr>
// <tr>

// <td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
//     Imprac - Barragan 855 Ciudadela norte - Buenos Aires Argentina.
//     <br>
//     TEL/FAX (+54) 011.4488.4418
//     <span style="font-family: Arial, sans-serif; font-size: 12px; color: #444444;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
//     <a href="mailto:info@imprac.com.ar" style="color: #666666; text-decoration: none;">info@imprac.com.arr</a>
// </td>

// </tr>
// </table>
// </td>
//                             </tr></table>
// </td>
//                 </tr></table>
// <!--[if (gte mso 9)|(IE)]>
//             </td>
//             </tr>
//             </table>
//             <![endif]-->
// </td>
//     </tr>
// </table>
// </body>
// </html>
// ';

// // Envio del mail al usuario
// $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
// $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
// $cabeceras .= 'From: Imprac < info@imprac.com.ar >' . "\r\n";
// mail("$name < $email >", "Su correo ha sido recibido", $mensaje, $cabeceras);
?>

<script type="text/javascript">
    window.location = 'gracias-contacto.php';
</script>