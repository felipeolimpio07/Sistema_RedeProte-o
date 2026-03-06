<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suportelas | Redes de Proteção em Curitiba</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body class="d-flex flex-column min-vh-100">

    <?php include 'navbar.php'; ?>

    <div id="carrosselHome" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carrosselHome" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carrosselHome" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carrosselHome" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="img/sacada.jpeg" class="d-block w-100" alt="Sacada" style="height: 70vh; object-fit: cover;">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="background: rgba(0,0,0,0.5); top: 0; bottom: 0; left: 0; right: 0;">
                    <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill fw-bold shadow fs-6">Segurança Máxima</span>
                    <h1 class="display-4 fw-bold text-white mb-3 shadow-sm">Proteção para a sua família</h1>
                    <a href="contato.php" class="btn btn-primary btn-lg px-4 mt-3 fw-bold shadow">Solicitar Orçamento</a>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="img/gatos.jpeg" class="d-block w-100" alt="Pets" style="height: 70vh; object-fit: cover;">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="background: rgba(0,0,0,0.5); top: 0; bottom: 0; left: 0; right: 0;">
                    <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill fw-bold shadow fs-6">Garantia de 5 anos</span>
                    <h1 class="display-4 fw-bold text-white mb-3 shadow-sm">Tranquilidade para seus Pets</h1>
                    <a href="modelos.php" class="btn btn-primary btn-lg px-4 mt-3 fw-bold shadow">Ver Nossos Modelos</a>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="img/aberta.jpeg" class="d-block w-100" alt="Áreas Abertas" style="height: 70vh; object-fit: cover;">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="background: rgba(0,0,0,0.5); top: 0; bottom: 0; left: 0; right: 0;">
                    <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill fw-bold shadow fs-6">Atendimento Rápido</span>
                    <h1 class="display-4 fw-bold text-white mb-3 shadow-sm">Instalação Especializada</h1>
                    <a href="portifolio.php" class="btn btn-primary btn-lg px-4 mt-3 fw-bold shadow">Conhecer Portfólio</a>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carrosselHome" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carrosselHome" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <main class="container py-5 flex-grow-1">
        
        <div class="text-center mb-5 mt-4">
            <h2 class="fw-bold text-primary">Por que escolher a Suportelas?</h2>
            <p class="text-muted">Trabalhamos com os melhores materiais do mercado para garantir a segurança de quem você ama.</p>
        </div>

        <div class="row g-4 text-center mb-4">
            <div class="col-md-4">
                <div class="p-4 border rounded-4 shadow-sm h-100 bg-white">
                    <i class="bi bi-shield-check text-primary display-4 mb-3"></i>
                    <h5 class="fw-bold">Certificação ABNT</h5>
                    <p class="text-secondary small">Nossas redes seguem os mais rigorosos padrões de segurança exigidos no Brasil.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="p-4 border rounded-4 shadow-sm h-100 bg-white">
                    <i class="bi bi-sun text-primary display-4 mb-3"></i>
                    <h5 class="fw-bold">Cordas Normatizadas Anti-UV</h5>
                    <p class="text-secondary small">
                        Utilizamos cordas de instalação certificadas pela <strong>ABNT NBR 16046-2:2012</strong>, submetidas a testes de envelhecimento para garantir que não ressecam e mantenham a resistência máxima à tração mesmo expostas ao sol.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 border rounded-4 shadow-sm h-100 bg-white">
                    <i class="bi bi-tools text-primary display-4 mb-3"></i>
                    <h5 class="fw-bold">Equipe Técnica</h5>
                    <p class="text-secondary small">Profissionais altamente capacitados para uma instalação limpa, rápida e segura.</p>
                </div>
            </div>
        </div>

    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>