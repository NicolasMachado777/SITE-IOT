<?php
require_once 'Conexao.php';

class Dao
{
    public function cadastraUsuario(Usuario $c)
    {
        $conector = new Conexao(
            'mysql:host=localhost;dbname=logintcc;charset=utf8',
            'root',
            ''
        );
        $sql1 = "insert into usuario values ('',?,?);";
        
        $valores = $conector->prepare($sql1);
        $valores->bindValue(1, $c->getNome());
        $valores->bindValue(2, $c->getSenha());

        if ($valores->execute()) {
            echo 'CADASTRADO COM SUCESSO <a href="index.php">FAZER LOGIN</A>';
        } else {
            echo 'ERRO AO CADASTRAR';
        }
    }
    public function logarUsuario(Usuario $c)
    {
        $conector = new Conexao(
            'mysql:host=localhost;dbname=logintcc;charset=utf8',
            'root',
            ''
        );
        $sql1 = "select * from usuario where nome = ? and senha = ?;";
        
        $tentativa = $conector->prepare($sql1);
        $tentativa->bindValue(1, $c->getNome());
        $tentativa->bindValue(2, $c->getSenha());
        $tentativa->execute();

        if ($tentativa->rowCount() > 0) {
            header('location:http://localhost/logintcc/principal.php');
        } else {
            header('location:http://localhost/logintcc/index.php?erro=true');
        }
    }
}
