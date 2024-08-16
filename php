<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    // Validar e processar os dados conforme necessário
    // Exemplo: enviar um email, salvar em um banco de dados, etc.
    
    // Exemplo de resposta
    echo "Nome: " . $name . "<br>";
    echo "Email: " . $email;
} else {
    echo "Método de solicitação inválido.";
}
?>

