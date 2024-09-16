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

// Recupera os formulários pendentes
$sql = "SELECT * FROM work_permits WHERE status = 'Pendente'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Permissões de Trabalho</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="container">
        <h1>Dashboard - Permissões de Trabalho</h1>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Equipamento</th>
                    <th>Área</th>
                    <th>Local do Serviço</th>
                    <th>Data Início</th>
                    <th>Data Fim</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['equipamento']}</td>
                                <td>{$row['area']}</td>
                                <td>{$row['localServico']}</td>
                                <td>{$row['dataInicio']}</td>
                                <td>{$row['dataFim']}</td>
                                <td>{$row['status']}</td>
                                <td>
                                    <a href='view_form.php?id={$row['id']}'>Ver</a> |
                                    <a href='approve_form.php?id={$row['id']}'>Aprovar</a> |
                                    <a href='reject_form.php?id={$row['id']}'>Rejeitar</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Nenhum formulário pendente</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
