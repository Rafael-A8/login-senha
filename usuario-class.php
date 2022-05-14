<?php

class Usuario {

    public function login ($email, $senha) {
        global $pdo;

        //fazer consulta no banco de dados
        //validar se o usuario existe dentro do banco de dados
        //fazer uma consulta para verificar se email dentro do banco de dados e igual :email q vamos receber
        $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();


    }

}





?>