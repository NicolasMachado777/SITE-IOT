<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'Dao.php';
require_once 'Usuario.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$senha = filter_input(INPUT_POST, 'senha');
$botao = filter_input(INPUT_POST, 'botao');

$usuario = new Usuario();
$dao = new Dao();

$usuario->setId($id);
$usuario->setNome($nome);
$usuario->setSenha($senha);

if ($botao == 'CADASTRAR') {
    $dao->cadastraUsuario($usuario);
} else if ($botao == 'LOGAR') {
    $dao->logarUsuario($usuario);
}
