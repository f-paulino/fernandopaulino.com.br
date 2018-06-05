<?php

// $EmailFrom = "site@jaquetaarizonagp.com.br";
$EmailTo = "contato@fernandopaulino.com.br";
$Subject = "Solicitação de contato enviada pelo site!";
$nome = Trim(stripslashes($_POST['nome'])); 
$tel = Trim(stripslashes($_POST['tel'])); 
$email = Trim(stripslashes($_POST['email'])); 
$mensagem = Trim(stripslashes($_POST['mensagem'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nome: ";
$Body .= $nome;
$Body .= "\n";
$Body .= "Telefone: ";
$Body .= $tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Mensagem: ";
$Body .= $mensagem;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$email>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://fernandopaulino.com.br/#enviado\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://fernandopaulino.com.br/informacoes#nao-enviado\">";
}
?>