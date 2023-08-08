<?php

include('conexao/conexao.php');

$db = new Conexao();

class Usuario{
    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function cadastrar($nome, $email, $pc, $problema)
    {
       
        $sql = "INSERT INTO usuarios (nome_usuario, email, aparelho, problema) VALUES (?, ?, ?, ?)";
        
        $stmt = $this->conn->prepare($sql);
        $stmt -> bindValue(1, $nome);
        $stmt -> bindValue(2, $email);
        $stmt -> bindValue(3, $pc);
        $stmt -> bindValue(4, $problema);
        $result = $stmt -> execute();

        return $result;
    }
}


?>