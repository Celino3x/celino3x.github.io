<!DOCTYPE html>
<html lang="pt-br">

<?php
	$para= "contato@c3br.com";
	$assunto= "Contato Grupo C3Br";
	$nome= $_REQUEST['name'];
	$mail= $_REQUEST['email'];
	$sub= $_REQUEST['subject'];
	$msg= $_REQUEST['message'];
	$nomesite= "Grupo C3Br";
	$assuntoresp= "Grupo C3Br | Recebemos sua mensagem";
	$resposta= "Sr(a). $nome,
Recebemos sua mensagem e logo entraremos em contato.

Atenciosamente,
Grupo C3Br";


	$corpo= "Mensagem recebida pelo site Grupo C3Br

Nome: $nome
Email: $mail

Assunto: $sub

Mensagem: $msg";

	$header ="From: $nome <$mail>";
	$header2 ="From: $nomesite <$para>";

	$msg = "Pronto $nome,
Sua mensagem foi enviada com sucesso.";

	echo "<script>location.href=`index.html`; alert(`$msg`);</script>";

		mail($para, $assunto, $corpo, $header);
		mail($mail, $assuntoresp, $resposta, $header2);
 ?>
