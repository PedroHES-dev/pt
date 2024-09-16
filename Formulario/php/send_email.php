<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurações do e-mail
    $to = "pedro.flub@gmail.com"; // Substitua com seu e-mail
    $subject = "Permissão de Trabalho - Escavações";
    $headers = "From: pedro.fluib@gmail.com\r\n"; // Substitua com um e-mail válido
    $headers .= "Reply-To: victro.bueno1@gmail.com\r\n"; // Substitua com um e-mail válido
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Coleta dados do formulário
    $equipamento = htmlspecialchars($_POST['equipamento']);
    $area = htmlspecialchars($_POST['area']);
    $localServico = htmlspecialchars($_POST['localServico']);
    $dataInicio = htmlspecialchars($_POST['dataInicio']);
    $dataFim = htmlspecialchars($_POST['dataFim']);
    $descricaoTrabalho = htmlspecialchars($_POST['descricaoTrabalho']);
    $numeroPessoas = htmlspecialchars($_POST['numeroPessoas']);
    $responsavelNome = htmlspecialchars($_POST['responsavelNome']);
    $responsavelAssinatura = htmlspecialchars($_POST['responsavelAssinatura']);
    $dataLiberacao = htmlspecialchars($_POST['dataLiberacao']);
    $validade = htmlspecialchars($_POST['validade']);
    
    // Prepara o corpo do e-mail
    $message = "
    <html>
    <head>
        <title>Permissão de Trabalho - Escavações</title>
    </head>
    <body>
        <h1>Permissão de Trabalho - Escavações</h1>
        <p><strong>Equipamento:</strong> $equipamento</p>
        <p><strong>Área:</strong> $area</p>
        <p><strong>Local do Serviço:</strong> $localServico</p>
        <p><strong>Data Início:</strong> $dataInicio</p>
        <p><strong>Data Fim:</strong> $dataFim</p>
        <p><strong>Descrição do Trabalho:</strong> $descricaoTrabalho</p>
        <p><strong>Número de Pessoas:</strong> $numeroPessoas</p>
        <p><strong>Nome do Responsável:</strong> $responsavelNome</p>
        <p><strong>Assinatura:</strong> $responsavelAssinatura</p>
        <p><strong>Data de Liberação:</strong> $dataLiberacao</p>
        <p><strong>Validade:</strong> $validade</p>
    </body>
    </html>
    ";

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso.";
    } else {
        echo "Falha ao enviar o e-mail.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
