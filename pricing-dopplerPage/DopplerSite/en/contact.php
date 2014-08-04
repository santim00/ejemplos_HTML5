<?php
// do i need to comment the code? go figure, or start a new career.
if(isset($_GET["firstName"]))
{
	$today = date("Y/m/d H:i:s");
		
	$email = "soporte@fromdoppler.com";	
	$asunto = 'Contacto Sitio';
	$cabeceras = "Content-type: text/html;\r\n";
	$cabeceras .= "From: <info@fromdoppler.com>\r\n";
	$cabeceras .= "MIME-Version: 1.0\r\n";
	
	$codigohtml ='<span style="font:normal 13px/15px Verdana,Arial; color:#666;">
	FirstName:'. $_GET['firstName']. '<br />
	LastName:'. $_GET['lastName']. '<br />
	Email:'.$_GET['contactEmail'].'<br />'.
	'Phone: '.$_GET['phone'].'<br />'.
	'Country: '.$_GET['country'].
	'<br />Message:'.$_GET['message'].
	'<br /></span>';
	mail($email,$asunto,$codigohtml,$cabeceras);
	print_r($_GET['callback']."([{\"status\":\"true\"}])");	
}
?>

