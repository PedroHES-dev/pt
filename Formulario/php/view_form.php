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

// Recupera o formulário
$id = $_GET['id'];
$sql = "SELECT * FROM work_permits WHERE id = $id";
$result = $conn->query($sql);
$form = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Formulário</title>
    <link rel="stylesheet" href="css/view_form.css">
</head>
<body>
    <div class="container">
        <h1>Visualizar Formulário</h1>
        <form>
            <div>
                <label>Equipamento:</label>
                <p><?php echo htmlspecialchars($form['equipamento']); ?></p>
            </div>
            <div>
                <label>Área:</label>
                <p><?php echo htmlspecialchars($form['area']); ?></p>
            </div>
            <div>
                <label>Local do Serviço:</label>
                <p><?php echo htmlspecialchars($form['localServico']); ?></p>
            </div>
            <!-- Continue exibindo outros campos do formulário -->
            <div>
                <label>Status:</label>
                <p><?php echo htmlspecialchars($form['status']); ?></p>
            </div>
        </form>
    </div>
</body>
</html>

<?php
$conn->close();
?>
