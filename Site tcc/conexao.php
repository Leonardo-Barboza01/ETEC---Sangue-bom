<?php
$servername = "localhost";
$username = "root";  // Substitua com seu usuário do MySQL
$password = "";      // Substitua com sua senha do MySQL
$dbname = "sangue_bom";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>
