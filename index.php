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
                    <a href="contato.php" class="btn btn-success btn-lg px-4 mt-3 fw-bold shadow text-white">
                        <i class="bi bi-whatsapp me-2"></i>Solicitar Orçamento
                    </a>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="img/pets.jpeg" class="d-block w-100" alt="Pets" style="height: 70vh; object-fit: cover;">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="background: rgba(0,0,0,0.5); top: 0; bottom: 0; left: 0; right: 0;">
                    <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill fw-bold shadow fs-6">Garantia de 3 anos</span>
                    <h1 class="display-4 fw-bold text-white mb-3 shadow-sm">Tranquilidade para seus Pets</h1>
                    <a href="modelos.php" class="btn btn-outline-light btn-lg px-4 mt-3 fw-bold shadow">Ver Nossos Modelos</a>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="img/aberta.jpeg" class="d-block w-100" alt="Áreas Abertas" style="height: 70vh; object-fit: cover;">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="background: rgba(0,0,0,0.5); top: 0; bottom: 0; left: 0; right: 0;">
                    <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill fw-bold shadow fs-6">Atendimento Rápido</span>
                    <h1 class="display-4 fw-bold text-white mb-3 shadow-sm">Instalação Especializada</h1>
                    <a href="portifolio.php" class="btn btn-success btn-lg px-4 mt-3 fw-bold shadow text-white">Conhecer Portfólio</a>
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

    <main class="flex-grow-1">
        
        <div class="container py-5">
            <div class="text-center mb-5 mt-4">
                <h2 class="fw-bold text-primary">Por que escolher a Suportelas?</h2>
                <p class="text-muted">Trabalhamos com os melhores materiais do mercado para garantir a segurança de quem você ama.</p>
            </div>

            <div class="row g-4 text-center mb-4">
                <div class="col-md-4">
                    <div class="p-4 border rounded-4 shadow-sm h-100 bg-white">
                        <i class="bi bi-shield-check text-primary display-4 mb-3"></i>
                        <h5 class="fw-bold text-dark">Certificação ABNT</h5>
                        <p class="text-secondary small">Nossas redes seguem os mais rigorosos padrões de segurança exigidos no Brasil.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="p-4 border rounded-4 shadow-sm h-100 bg-white">
                        <i class="bi bi-sun text-primary display-4 mb-3"></i>
                        <h5 class="fw-bold text-dark">Cordas Normatizadas Anti-UV</h5>
                        <p class="text-secondary small">
                            Utilizamos cordas certificadas pela <strong>ABNT NBR 16046-2:2012</strong>, testadas contra envelhecimento solar.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 border rounded-4 shadow-sm h-100 bg-white">
                        <i class="bi bi-tools text-primary display-4 mb-3"></i>
                        <h5 class="fw-bold text-dark">Equipe Técnica</h5>
                        <p class="text-secondary small">Profissionais altamente capacitados para uma instalação limpa, rápida e segura.</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-light border-top py-5 overflow-hidden">
            <div class="container py-4 position-relative">
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-primary">O que dizem nossos clientes</h2>
                    <p class="text-muted">A satisfação de quem já protegeu sua família com a Suportelas.</p>
                </div>

                <div id="carrosselDepoimentos" class="carousel carousel-dark slide px-5" data-bs-ride="carousel">
                    
                    <div class="carousel-inner">
                        
                        <div class="carousel-item active" data-bs-interval="5000">
                            <div class="row g-4 justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card border-0 shadow-sm h-100 p-4 bg-white rounded-4 position-relative">
                                        <i class="bi bi-google text-muted opacity-25 position-absolute top-0 end-0 mt-3 me-4 fs-5"></i>
                                        <div class="text-warning mb-3 fs-6"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic text-secondary mb-4">"Ótimos profissionais, atenciosos, e trabalho bem feito. Super recomendo. Parabéns Fábio e Fernando!!!"</p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://ui-avatars.com/api/?name=Leonilda+Antunes&background=1E3A8A&color=fff&rounded=true" alt="Leonilda" class="me-3" width="45">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-dark">Leonilda Antunes</h6>
                                                <small class="text-success fw-bold" style="font-size: 0.75rem;"><i class="bi bi-check-circle-fill me-1"></i>Verificada</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card border-0 shadow-sm h-100 p-4 bg-white rounded-4 position-relative">
                                        <i class="bi bi-google text-muted opacity-25 position-absolute top-0 end-0 mt-3 me-4 fs-5"></i>
                                        <div class="text-warning mb-3 fs-6"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic text-secondary mb-4">"Ótimo profissional. Obrigado excelente trabalho super recomendo top."</p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://ui-avatars.com/api/?name=Elder+Clevison&background=0097a7&color=fff&rounded=true" alt="Elder" class="me-3" width="45">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-dark">Elder Clevison</h6>
                                                <small class="text-success fw-bold" style="font-size: 0.75rem;"><i class="bi bi-check-circle-fill me-1"></i>Verificada</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-none d-lg-block">
                                    <div class="card border-0 shadow-sm h-100 p-4 bg-white rounded-4 position-relative">
                                        <i class="bi bi-google text-muted opacity-25 position-absolute top-0 end-0 mt-3 me-4 fs-5"></i>
                                        <div class="text-warning mb-3 fs-6"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic text-secondary mb-4">"Excelente profissional! Pode chamar sem medo, habilidoso, rápido, pontual e organizado. Muito disposto. O trabalho ficou excelente."</p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://ui-avatars.com/api/?name=Renata+Mesquita&background=FD7E14&color=fff&rounded=true" alt="Renata" class="me-3" width="45">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-dark">Renata Mesquita</h6>
                                                <small class="text-success fw-bold" style="font-size: 0.75rem;"><i class="bi bi-check-circle-fill me-1"></i>Verificada</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                            <div class="row g-4 justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card border-0 shadow-sm h-100 p-4 bg-white rounded-4 position-relative">
                                        <i class="bi bi-google text-muted opacity-25 position-absolute top-0 end-0 mt-3 me-4 fs-5"></i>
                                        <div class="text-warning mb-3 fs-6"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic text-secondary mb-4">"Excelente trabalho, Douglas e seus ajudantes fizeram um trabalho rápido e com muito capricho, além de serem uns queridos e muito profissionais!"</p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://ui-avatars.com/api/?name=Letícia+Ferreira&background=198754&color=fff&rounded=true" alt="Letícia" class="me-3" width="45">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-dark">Letícia Ferreira</h6>
                                                <small class="text-success fw-bold" style="font-size: 0.75rem;"><i class="bi bi-check-circle-fill me-1"></i>Verificada</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card border-0 shadow-sm h-100 p-4 bg-white rounded-4 position-relative">
                                        <i class="bi bi-google text-muted opacity-25 position-absolute top-0 end-0 mt-3 me-4 fs-5"></i>
                                        <div class="text-warning mb-3 fs-6"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic text-secondary mb-4">"Ótimo profissional responde rápido e tem melhor custo benefício, fez o serviço bem rápido e deixou tudo limpo. Pode chamar sem medo!!"</p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://ui-avatars.com/api/?name=Eduardo+Henrique&background=6f42c1&color=fff&rounded=true" alt="Eduardo" class="me-3" width="45">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-dark">Eduardo Henrique</h6>
                                                <small class="text-success fw-bold" style="font-size: 0.75rem;"><i class="bi bi-check-circle-fill me-1"></i>Verificada</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-none d-lg-block">
                                    <div class="card border-0 shadow-sm h-100 p-4 bg-white rounded-4 position-relative">
                                        <i class="bi bi-google text-muted opacity-25 position-absolute top-0 end-0 mt-3 me-4 fs-5"></i>
                                        <div class="text-warning mb-3 fs-6"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic text-secondary mb-4">"Atendimento excelente! Instalação feita no mesmo dia, com rapidez, sem sujeira e ótimo acabamento. Indico de olhos fechados!"</p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://ui-avatars.com/api/?name=Magda+Branca&background=1E3A8A&color=fff&rounded=true" alt="Magda" class="me-3" width="45">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-dark">Magda Branca</h6>
                                                <small class="text-success fw-bold" style="font-size: 0.75rem;"><i class="bi bi-check-circle-fill me-1"></i>Verificada</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                            <div class="row g-4 justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card border-0 shadow-sm h-100 p-4 bg-white rounded-4 position-relative">
                                        <i class="bi bi-google text-muted opacity-25 position-absolute top-0 end-0 mt-3 me-4 fs-5"></i>
                                        <div class="text-warning mb-3 fs-6"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic text-secondary mb-4">"Ótimos profissionais que me atenderam com rapidez e competência. Passaram os melhores custos. Bem custo/benefício. Recomendo!!!"</p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://ui-avatars.com/api/?name=Iran+Schleder&background=444&color=fff&rounded=true" alt="Iran" class="me-3" width="45">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-dark">Iran Schleder Jr</h6>
                                                <small class="text-success fw-bold" style="font-size: 0.75rem;"><i class="bi bi-check-circle-fill me-1"></i>Verificada</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card border-0 shadow-sm h-100 p-4 bg-white rounded-4 position-relative">
                                        <i class="bi bi-google text-muted opacity-25 position-absolute top-0 end-0 mt-3 me-4 fs-5"></i>
                                        <div class="text-warning mb-3 fs-6"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic text-secondary mb-4">"Muito prestativo, educado e ágil! A instalação foi super rápida, ficou seguro e com um preço bom! Recomendo!"</p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://ui-avatars.com/api/?name=Thay+Silva&background=FD7E14&color=fff&rounded=true" alt="Thay" class="me-3" width="45">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-dark">Thay Silva</h6>
                                                <small class="text-success fw-bold" style="font-size: 0.75rem;"><i class="bi bi-check-circle-fill me-1"></i>Verificada</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-none d-lg-block">
                                    <div class="card border-0 shadow-sm h-100 p-4 bg-white rounded-4 position-relative">
                                        <i class="bi bi-google text-muted opacity-25 position-absolute top-0 end-0 mt-3 me-4 fs-5"></i>
                                        <div class="text-warning mb-3 fs-6"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic text-secondary mb-4">"Atendimento rápido desde o primeiro contato até a colocação das telas. Excelente cordialidade e trabalho executado."</p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://ui-avatars.com/api/?name=Ivanda+Oliveira&background=0dcaf0&color=fff&rounded=true" alt="Ivanda" class="me-3" width="45">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-dark">Ivanda Oliveira</h6>
                                                <small class="text-success fw-bold" style="font-size: 0.75rem;"><i class="bi bi-check-circle-fill me-1"></i>Verificada</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" data-bs-interval="5000">
                            <div class="row g-4 justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card border-0 shadow-sm h-100 p-4 bg-white rounded-4 position-relative">
                                        <i class="bi bi-google text-muted opacity-25 position-absolute top-0 end-0 mt-3 me-4 fs-5"></i>
                                        <div class="text-warning mb-3 fs-6"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic text-secondary mb-4">"Adorei a agilidade e bom atendimento! Rápido conseguiram realizar o serviço e foi de extrema qualidade."</p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://ui-avatars.com/api/?name=Nathalia+Gallo&background=1E3A8A&color=fff&rounded=true" alt="Nathalia" class="me-3" width="45">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-dark">Nathalia Gallo</h6>
                                                <small class="text-success fw-bold" style="font-size: 0.75rem;"><i class="bi bi-check-circle-fill me-1"></i>Verificada</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card border-0 shadow-sm h-100 p-4 bg-white rounded-4 position-relative">
                                        <i class="bi bi-google text-muted opacity-25 position-absolute top-0 end-0 mt-3 me-4 fs-5"></i>
                                        <div class="text-warning mb-3 fs-6"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic text-secondary mb-4">"Preço justo e serviço agilizado! Veio no mesmo dia que fiz a solicitação. Recomendo."</p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://ui-avatars.com/api/?name=Teacher+Leo&background=198754&color=fff&rounded=true" alt="Teacher Leo" class="me-3" width="45">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-dark">Teacher Leo</h6>
                                                <small class="text-success fw-bold" style="font-size: 0.75rem;"><i class="bi bi-check-circle-fill me-1"></i>Verificada</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-none d-lg-block">
                                    <div class="card border-0 shadow-sm h-100 p-4 bg-white rounded-4 position-relative">
                                        <i class="bi bi-google text-muted opacity-25 position-absolute top-0 end-0 mt-3 me-4 fs-5"></i>
                                        <div class="text-warning mb-3 fs-6"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic text-secondary mb-4">"Muito bom profissional, rápido e muito bem feito o serviço, recomendo."</p>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://ui-avatars.com/api/?name=Julio+Cesar&background=dc3545&color=fff&rounded=true" alt="Julio" class="me-3" width="45">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-dark">Julio Cesar Borges</h6>
                                                <small class="text-success fw-bold" style="font-size: 0.75rem;"><i class="bi bi-check-circle-fill me-1"></i>Verificada</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carrosselDepoimentos" data-bs-slide="prev" style="width: 50px; justify-content: flex-start;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carrosselDepoimentos" data-bs-slide="next" style="width: 50px; justify-content: flex-end;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
                
                <div class="text-center mt-5">
                    <a href="contato.php" class="btn btn-success btn-lg fw-bold shadow px-5 text-white">
                        <i class="bi bi-whatsapp me-2"></i>Faça como eles, peça seu orçamento!
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>