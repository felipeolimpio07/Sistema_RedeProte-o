<?php
// 1. Conexão com o banco de dados
require_once 'config.php';

// 2. Busca o PDF mais recente
$sql = "SELECT titulo, nome_arquivo FROM arquivos_portifolio ORDER BY id DESC LIMIT 1";
$resultado = $conn->query($sql);

// 3. Verifica se encontrou o PDF
if ($resultado && $resultado->num_rows > 0) {
    $pdf = $resultado->fetch_assoc();
} else {
    $pdf = false; // Não tem PDF no banco
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - Redes de Proteção</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        /* Estilos para os cartões do portfólio */
        .card-portfolio {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }
        .card-portfolio:hover {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
        .img-portfolio {
            height: 250px;
            object-fit: cover; /* Faz a imagem preencher o espaço sem distorcer */
        }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow sticky-top">
    <div class="container-fluid px-md-5"> 
        <a class="navbar-brand fw-bold fs-4" href="index.php">Redes de Proteção</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link px-3" href="empresa.php">A empresa</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="modelos.php">Modelos</a></li>
                <li class="nav-item"><a class="nav-link px-3 active fw-bold" href="portifolio.php">Portfólio</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="contato.php">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-5 text-center">
    <h1 class="text-primary fw-bold mb-3">Nosso Portfólio</h1>
    <p class="lead text-muted mb-4">Confira alguns dos nossos serviços de instalação de redes de proteção realizados com máxima segurança e qualidade.</p>
    
    <?php if ($pdf): ?>
<a href="uploads/pdfs/SEU_ARQUIVO_AQUI.pdf" download="Catalogo_Redes_Protecao.pdf" class="btn btn-danger btn-lg rounded-pill shadow">
    <i class="bi bi-file-earmark-pdf-fill me-2"></i> Baixar Catálogo em PDF
</a>
    <?php else: ?>
        <button class="btn btn-secondary btn-lg rounded-pill shadow" disabled>
            <i class="bi bi-file-earmark-pdf-fill me-2"></i> Catálogo em PDF Indisponível
        </button>
    <?php endif; ?>
</div>

<div class="container pb-5">
    <div class="row g-4">
        

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>