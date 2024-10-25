<?php
include 'conexao.php';

// Obtém os dados do formulário
$eritrócitos = $_POST['eritrócitos'];
$hemoglobina = $_POST['hemoglobina'];
$hematócio = $_POST['hematócio'];
$vcm = $_POST['vcm'];
$hcm = $_POST['hcm'];
$chcm = $_POST['chcm'];
$rdw = $_POST['rdw'];
$leucograma = $_POST['leucograma'];

// Insere os dados na tabela
$sql = "INSERT INTO serie_vermelha (eritrócitos, hemoglobina, hematócio, vcm, hcm, chcm, rdw, leucograma)
VALUES ('$eritrócitos', '$hemoglobina', '$hematócio', '$vcm', '$hcm', '$chcm', '$rdw', '$leucograma')";

if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
