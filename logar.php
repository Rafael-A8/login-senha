<?php
//validação para receber os dados
//Se existir nosso email e este email for diferente de vazio ele ira receber os dados
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    require 'conection/conexao-pdo.php';
    require 'usuario-class.php';

//para chamar a class login, tem que estanciar o nosso objeto
//Tudo que a gente chamar apartir dessa variavel $u ira buscar dentro da nossa class Usuario
    $u = new  Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $u->login($email, $senha);

}else{

    header("location: login.php");

}
?>