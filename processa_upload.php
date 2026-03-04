<?php
// processa_upload.php

// 1. Conexão com o banco de dados
$host = 'localhost';
$db   = 'seu_banco';
$user = 'seu_usuario';
$pass = 'sua_senha';
$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['pdf_file'])) {
    
    $titulo = $_POST['titulo']; // Nome amigável que você digitou no formulário
    $arquivo = $_FILES['pdf_file'];
    
    // 2. Valida se é um PDF de verdade
    $extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));
    if ($extensao != 'pdf') {
        die("Erro: Apenas arquivos PDF são permitidos.");
    }

    // 3. Cria um nome único para não substituir arquivos com o mesmo nome
    $nome_novo = uniqid() . '-' . basename($arquivo['name']);
    $pasta_destino = 'uploads/pdfs/' . $nome_novo;

    // 4. Move o arquivo da pasta temporária para a sua pasta final
    if (move_uploaded_file($arquivo['tmp_name'], $pasta_destino)) {
        
        // 5. Salva APENAS o caminho/nome no banco de dados
        $sql = "INSERT INTO arquivos_portifolio (titulo, nome_arquivo) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$titulo, $nome_novo]);

        echo "Sucesso! O PDF foi salvo e registrado no banco.";
    } else {
        echo "Erro ao salvar o arquivo no servidor.";
    }
}
?>