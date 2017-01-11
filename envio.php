<?php
ob_start();
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$subject = $_POST['assunto'];
$msg = $_POST['mensagem'];

$from = "secretaria@siriusgaia.org.br";
$to = "privdm@gmail.com";

$mailheaders = "From: ".$nome."<".$from.">\r\n";
$mailheaders .= "Reply-To: ".$email."\r\n";
$mailheaders .= "Return-Path: ".$from."\r\n";
//$mailheaders .= "Cc: \r\n";
//$mailheaders .= "Bcc: \r\n";
$mailheaders .= "MIME-version: 1.0\r\n";
$mailheaders .= "X-Priority: 3\r\n";
$mailheaders .= "Content-type: text/html; charset=UTF-8\r\n";

$texto="
<html>
	<body>
		<p>Mensagem enviada por ".$nome."<br/>
		E-mail ".$email."<br/>
		Assunto ".$subject."</p>
		<p>".$msg."</p>
	</body>
</html>";

/*
echo $nome."<br>";
echo $email."<br>";
echo $msg."<br>";
echo $to."<br>";
echo $from."<br>";
echo $subject."<br>";
echo $texto."<br>";
*/

ob_end_flush();

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']));
$page = 'contato.php';

if(mail($to,'Contato via site AESG',$texto,$mailheaders)){
	$_SESSION['msg'] = "Mensagem enviada com sucesso!";
	header('Location: http://'.$host.$uri.'/'.$page);
} else {
	$_SESSION['msg'] = "Falha ao enviar mensagem. Tente novamente mais tarde.";
	header('Location: http://'.$host.$uri.'/'.$page);
}
?>
