<?php
require_once 'Dao.php';
require_once 'Nomes.php';

$nome_escrito = filter_input(INPUT_POST, 'nome');
$acao = filter_input(INPUT_POST, 'acao');
$nomes = new Nomes();
$dao = new Dao();

$nomes->setNome($nome_escrito);

if($acao=='PARTICIPAR'){
    $dao->Cadastrar($nomes);
}