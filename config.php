<?php
// Configurações do Banco de Dados
$host = "localhost";
$user = "root";     // Padrão do XAMPP
$pass = "";         // Padrão do XAMPP (vazio)
$db   = "sistema_telas";

// Criar a conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificar se houve erro
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Definir charset para evitar erros de acentuação (ç, á, õ)
$conn->set_charset("utf8mb4");
?>