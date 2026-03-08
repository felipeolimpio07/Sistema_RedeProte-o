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
    
    <link rel="stylesheet" href="css/navbar.css"> 
    <link rel="stylesheet" href="css/portifolio.css"> 
    <link rel="stylesheet" href="css/footer.css"> </head>

<body class="bg-light d-flex flex-column min-vh-100">

<?php include 'navbar.php'; ?>

<main class="flex-grow-1">
    <div class="container py-5 text-center">
        <h1 class="text-primary fw-bold mb-3">Nosso Portfólio</h1>
        <p class="lead text-muted mb-4">Confira alguns dos nossos serviços de instalação de redes de proteção realizados com máxima segurança e qualidade.</p>
        
        <?php if ($pdf): ?>
            <a href="uploads/pdfs/<?php echo htmlspecialchars($pdf['nome_arquivo']); ?>" download="Catalogo_Redes_Protecao.pdf" class="btn btn-danger btn-lg rounded-pill shadow px-4 fw-bold">
                <i class="bi bi-file-earmark-pdf-fill me-2"></i> Baixar Catálogo em PDF
            </a>
        <?php else: ?>
            <button class="btn btn-secondary btn-lg rounded-pill shadow px-4 fw-bold" disabled>
                <i class="bi bi-file-earmark-pdf-fill me-2"></i> Catálogo Indisponível
            </button>
        <?php endif; ?>
    </div>

    <div class="container pb-5">
        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                    <img src="img/sacada.jpeg" class="card-img-top" alt="Instalação em Sacada" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-dark mb-1">Sacada Residencial</h5>
                        <p class="text-muted small mb-0">Proteção completa com rede.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                    <img src="img/pets.jpeg" class="card-img-top" alt="Instalação para Gatos" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-dark mb-1">Proteção para Pets</h5>
                        <p class="text-muted small mb-0">Rede reforçada com malha menor para gatos.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                    <img src="img/aberta.jpeg" class="card-img-top" alt="Área Aberta" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-dark mb-1">Área de Aberta</h5>
                        <p class="text-muted small mb-0">Fechamento de vão livre.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5 pt-4 border-top">
            <a href="contato.php" class="btn btn-primary btn-lg fw-bold shadow px-5">
                <i class="bi bi-whatsapp me-2"></i>Solicitar Orçamento Agora
            </a>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>