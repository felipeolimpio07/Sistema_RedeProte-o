<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Empresa - Redes de Proteção</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="css/navbar.css"> 
    <link rel="stylesheet" href="css/empresa.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body class="d-flex flex-column min-vh-100">

    <?php include 'navbar.php'; ?>

    <section id="empresa" class="py-5 bg-light flex-grow-1">
        <div class="container">
            <div class="row align-items-center py-4">
                
                <div class="col-lg-6">
                    <h2 class="fw-bold text-primary mb-4">Sobre Nossa Empresa</h2>
                    <p class="lead text-dark">Segurança de alta resistência para janelas, sacadas e piscinas em Curitiba e região.</p>
                    
                    <p class="text-secondary">
                        Com anos de experiência no mercado, nossa missão é levar tranquilidade para as famílias. 
                        Especializados na instalação de redes de proteção, trabalhamos exclusivamente com materiais que 
                        seguem as mais rigorosas exigências da <strong>ABNT NBR 16046</strong>.
                    </p>
                    
                    <p class="text-secondary">
                        Nossas redes possuem tratamento anti-UV de alta tecnologia, suportando a exposição contínua ao sol 
                        e às chuvas da nossa região. Isso garante uma durabilidade de até 5 anos sem perder a resistência original à tração.
                    </p>

                    <div class="row mt-4 mb-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-patch-check-fill text-primary fs-3 me-2"></i>
                                <span class="fw-bold text-dark">Certificada</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-shield-lock-fill text-primary fs-3 me-2"></i>
                                <span class="fw-bold text-dark">Alta Durabilidade</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <a href="contato.php" class="btn btn-primary btn-lg fw-bold shadow-sm px-4">
                            <i class="bi bi-whatsapp me-2"></i>Solicitar Orçamento
                        </a>
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

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>