<?php

require __DIR__.'/vendor/autoload.php';

//define('TITLE','Excluir vaga');

use \App\Entity\Vaga;

if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location: index.php?status=error');
    exit;
}

//Consulta a vaga
$objVaga = Vaga::getVaga($_GET['id']);

//Validação da vaga
if (!$objVaga instanceof Vaga) {
    header('location: index.php?status=error');
    exit;
}

//Validação do POST
if (isset($_POST['excluir'])) {

    $objVaga->excluir();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';

