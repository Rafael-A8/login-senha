<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$banco = "loja";

$conm = mysqli_connect($localhost, $user, $pass, $banco);

    $sql = mysqli_query($conm, "SELECT * FROM usuarios");

    echo mysqli_num_rows($sql);

?>



