<?php
// Configuração do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trabalho";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Aprova o formulário
$id = $_GET['id'];
$sql = "UPDATE work_permits SET status = 'Aprovado' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Formulário aprovado com sucesso.";
} else {
    echo "Erro ao aprovar o formulário: " . $conn->error;
}

$conn->close();
?>
