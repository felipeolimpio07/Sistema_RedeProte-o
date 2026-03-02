<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Empresa - Redes de Proteção</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="empresa.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow sticky-top">
    <div class="container-fluid px-md-5"> 
        <a class="navbar-brand fw-bold fs-4" href="index.php">
            Redes de Proteção
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link px-3 custom-hover-link active" href="empresa.php">A empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 custom-hover-link" href="modelos.php">Modelos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 custom-hover-link" href="portifolio.php">Portfólio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 custom-hover-link" href="contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="empresa" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center py-4">
            
            <div class="col-lg-6">
                <h2 class="fw-bold text-primary mb-4">Sobre Nossa Empresa</h2>
                <p class="lead text-dark">Segurança de alta resistência para janelas, sacadas e piscinas em Curitiba.</p>
                
                <p class="text-secondary">
                    Com anos de experiência no mercado, nossa missão é levar tranquilidade para as famílias. 
                    Especializados na instalação de redes de proteção, trabalhamos com materiais que 
                    seguem as mais rigorosas normas de segurança da ABNT.
                </p>
                
                <p class="text-secondary">
                    Nossas redes possuem tratamento anti-UV, suportando o sol e as chuvas constantes da nossa região, 
                    garantindo uma durabilidade de até 5 anos sem perder a resistência.
                </p>

                <div class="row mt-4">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-patch-check-fill text-primary fs-3 me-2"></i>
                            <span class="fw-bold text-dark">Certificada</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-shield-lock-fill text-primary fs-3 me-2"></i>
                            <span class="fw-bold text-dark">Alta Durabilidade</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="img-container shadow-lg border border-5 border-white">
                    <img src="img/sacada.jpeg" alt="Rede de Proteção Instalada">
                </div>
            </div>

        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>