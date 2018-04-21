<?php

$para = "naty.bmth1@gmail.com";


$assunto = "Contato atraves do Portifolio :)";


$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


$corpo = "<html><body>";
$corpo .= "Nome: $nome ";
$corpo .= "Email: $email Assunto: $assunto Mensagem: $mensagem";
$corpo .= "</body></html>";


$email_headers = implode("\n", array("From: $nome", "Reply-To: $email", "Subject: $assunto", "Return-Path: $email", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

//Verifica se os campos estão preenchidos para enviar então o email
if (!empty($nome) && !empty($email) && !empty($mensagem)) {
    mail($para, $assunto, $corpo, $email_headers);
    $msg = "Sua mensagem foi enviada com sucesso.";
    echo "<script>alert('$msg');window.location.assign('https://natyr.github.io/');</script>";
} else {
    $msg = "Erro ao enviar a mensagem.";
    echo "<script>alert('$msg');window.location.assign('https://natyr.github.io/');</script>";
}

?>
