<?php

$servername = "localhost";
$username = "root";
$password = "";

// crear conexão
$conn = new mysqli($servername, $username, $password);

// verifica estado da conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
echo("Conectado com Sucesso");

?>