<?php
require_once 'Conexao.php';
class Dao
{
    public function Cadastrar(Nomes $b)
    {
        $sql1 = "insert into rifa
        values('',?);";
        $banco = new Conexao;
        $conn = $banco->getConexao();

        $stmt = $conn->prepare($sql1);
        $stmt->bindValue(1, $b->getNome());

        $result = $stmt->execute();

        if ($result) {
            header('location: cadastro.php');
        } else {
            echo 'ERRO AO CADASTRAR';
        }
    }
    public function Consultar()
    {
        $sql1 = "select * from rifa";

        $banco = new Conexao;
        $conn = $banco->getConexao();

        $stmt = $conn->prepare($sql1);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
    }
}