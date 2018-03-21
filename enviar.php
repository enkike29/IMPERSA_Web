<?php
$header = 'From: ' . $mail . ' \r\n';
$header .= 'X-Mailer: PHP/' . phpversion() . ' \r\n';
$header .= 'Mime-Version: 1.0 \r\n';
$header .= 'Content-Type: text/plain';

$nombre = $_GET['nombre'];
$mail = $_GET['email'];
$mensaje_original = $_GET['mensaje'];

$mensaje =  'Este mensaje fue enviado por ' . $nombre . ',\r\n';
$mensaje .= 'Su e-mail es: ' . $mail . ' \r\n';
$mensaje .= 'Mensaje: ' . $mensaje_original . ' \r\n';
$mensaje .= 'Enviado el ' . date('d/m/Y', time());

$para = 'enriquemidence96@gmail.com';
$asunto = 'Mensaje IMPERSA';

mail($para, $asunto, $mensaje, $header);
?>


<?php
$nombre = $_GET["nombre"];
$mail = $_GET["email"];
//Titulo
$titulo = "IMPERSA S.A.";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Geeky Theory < tu_dirección_email >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("enriquemidence96@gmail.com",$titulo,$mail,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}
?>