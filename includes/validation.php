<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: text/html; charset=utf-8');

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$programa = $_POST['programa'];

if (empty($_POST['campaignId'])) {
	$campaignId = "9";
}else {
	$campaignId = $_POST['campaignId'];
}
if (empty($_POST['partnerId'])) {
	$partnerId = "1";
}else {
	$partnerId  = $_POST['partnerId'];
}
if (empty($_POST['type'])) {
	$type = "Direct";
}else {
	$type  = $_POST['type'];
}

$url='http://ares.3dm.com.co/bobm/Views/WS/?campaignId='.urlencode($campaignId).'&partnerId='.urlencode($partnerId).'&type='.urlencode($type).'&nombre='.urlencode($nombre).'&telefono='.urlencode($telefono).'&correo='.urlencode($correo).'&programa='.urlencode($programa);
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,$url);
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Title');
$query = curl_exec($curl_handle);
curl_close($curl_handle);

//echo "Query:n$url n";

//echo "Reply: $query";

include("data.php");
$to="crubio@bmdigital.co";
$from="Campaña Facultal de ingenierias";
$from_name="Campaña Facultal de ingenierias";
$msg="
<p><b>Nombre:</b> $nombre</p>
<p><b>Teléfono:</b> $telefono</p>
<p><b>Correo:</b> $correo</p>
<p><b>Programa:</b> $programa</p>
"; // HTML message
$subject="Campaña Facultal de ingenierias";
/*End Config*/

include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->isSendMail();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 587;
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 echo "Estamos Validando tu Información $nombre";
}
?>