<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "conexao";

    $mysqli = new mysqli($host, $usuario, $senha, $bd);
    
    $result = mysqli_query($mysqli,"SHOW DATABASES"); 
    while ($row = mysqli_fetch_array($result)) { 
    echo $row[0]."<br>";
}
?>