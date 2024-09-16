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

// Rejeita o formulário
$id = $_GET['id'];
$sql = "UPDATE work_permits SET status = 'Rejeitado' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Formulário rejeitado com sucesso.";
} else {
    echo "Erro ao rejeitar o formulário: " . $conn->error;
}

$conn->close();
?>
