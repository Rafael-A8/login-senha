<?php
//banco de dados
$localhost = "localhost";
$user = "root";
$pass = "";
$banco = "loja";

global $pdo;

//try catch = se a conexao com o banco de dados existir, ele vai executar a var $pdo, se estiver errado vai cair no pdoexception trazendo uma mensagem de erro
try{
    //orientada a objetos com PDO
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();

}


?>