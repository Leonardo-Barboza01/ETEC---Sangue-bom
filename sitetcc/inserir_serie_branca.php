<?php
include 'conexao.php';

// Obtém os dados do formulário
$leucócitos = $_POST['leucócitos'];
$promielócitos = $_POST['promielócitos'];
$mielócitos = $_POST['mielócitos'];
$metamielócitos = $_POST['metamielócitos'];
$bastonetes = $_POST['bastonetes'];
$segmentados = $_POST['segmentados'];
$eosinófilos = $_POST['eosinófilos'];
$basófilos = $_POST['basófilos'];
$linf_típicos = $_POST['linf_típicos'];
$linf_atípicos = $_POST['linf_atípicos'];
$monócitos = $_POST['monócitos'];
$plasmócitos = $_POST['plasmócitos'];

// Insere os dados na tabela
$sql = "INSERT INTO serie_branca (leucócitos, promielócitos, mielócitos, metamielócitos, bastonetes, segmentados, eosinófilos, basófilos, linf_típicos, linf_atípicos, monócitos, plasmócitos)
VALUES ('$leucócitos', '$promielócitos', '$mielócitos', '$metamielócitos', '$bastonetes', '$segmentados', '$eosinófilos', '$basófilos', '$linf_típicos', '$linf_atípicos', '$monócitos', '$plasmócitos')";

if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
