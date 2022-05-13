<?php
//banco de dados
$localhost = "localhost";
$user = "root";
$pass = "";
$banco = "loja";


//orientada a objetos com PDO

$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//sistemas
$sql = $pdo->query("SELECT * FROM usuarios");
$sql->execute();

echo $sql->rowCount();

?>