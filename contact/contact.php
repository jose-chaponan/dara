<?php
  //include_once("../gestion-datos/data/conexion.php");

  $nombre  = $_POST["nombre"];
  $correo  = $_POST["correo"];
  $asunto  = $_POST["asunto"];
  $mensaje = $_POST["mensaje"];
  
  $registro = date("Y-m-d H:i:s");
  

  $to = 'ivan@navike21.com';
  // $to = 'a.gallegosdesigner@gmail.com';

  $subject = 'New contact from web - '.$registro;

  $headers = "From: Ponteflaca <".strip_tags("hola@ponteflaca.pe").">\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";



  $message = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
    </head>
    <body style="background-color:#f2f2f2">
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Arial; color: #808080; font-weight: 200; background-color:#fff;">
        <tr>
          <td style="background-color:#fff" height="5">&nbsp;</td>
        </tr>
        <tr>
          <td style="background-color:#ffffff">
            &nbsp;&nbsp;&nbsp;<img style="margin: 15px;" src="http://ponteflaca.pe/wppnteflaca/wp-content/uploads/2019/01/logo.png" alt="Logo" width="150">
          </td>
        </tr>
        <tr><td heigh="10" >&nbsp;</td></tr>
        <tr>
          <td align="center">
            <h2 style="padding: 10px 0px; color:black;">New contact</h2>
          </td>
        </tr>
        <tr><td heigh="10" >&nbsp;</td></tr>
        <tr>
          <td>
            <p style="margin: 5px 30px; font-weight: 700; olor:black;">'.$nombre.'</p>
            <p style="margin: 5px 30px 10px; font-size: 14px; olor:black;">Email:&nbsp; '.$correo.'</p>
            <p style="margin: 5px 30px 10px; font-size: 14px; olor:black;">Asunto: '.$asunto.'</p>

            <p style="margin: 5px 30px; font-size: 14px;">
              '.$mensaje.'
            </p>
          </td>
        </tr>
        <tr>
          <td heigh="20" >&nbsp;</td>
        </tr>
      </table>
    </body>
    </html>
  ';
  mail($to, $subject, $message, $headers);

  echo "success_reload&Gracias por escribirnos";
?>