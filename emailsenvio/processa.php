<?php

require 'mail.php';


$assunto = $_POST['nome'] . " - " . $_POST['assunto'];
$mensagem = $_POST['mensagem'];

if (send($assunto, $mensagem)) {
    include DIR_PATH . "/template/header.php";
    include DIR_PATH . "/template/nav.php";
    echo "Enviado";
} else {
    echo "erro";
}
