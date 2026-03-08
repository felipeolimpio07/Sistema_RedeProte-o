<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Redes de Proteção</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="css/navbar.css"> 
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/footer.css"> </head>

<body class="bg-light d-flex flex-column min-vh-100">

<?php include 'navbar.php'; ?>

<main class="flex-grow-1 py-5">
    <div class="container py-4">
        
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">Solicite seu Orçamento</h2>
            <p class="text-muted">Preencha os dados abaixo ou entre em contato direto pelos nossos canais de atendimento.</p>
        </div>

        <div class="row g-5 justify-content-center">
            
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card border-0 shadow-sm p-4 h-100" style="background-color: #1E3A8A; color: white;">
                    <h4 class="fw-bold mb-4">Informações de Contato</h4>
                    
                    <div class="d-flex align-items-start mb-4">
                        <i class="bi bi-geo-alt-fill fs-3 me-3 text-light opacity-75"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Endereço</h6>
                            <p class="small mb-0 opacity-75">Rua José Izidoro Biazetto, 691 - Curitiba-PR</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <i class="bi bi-whatsapp fs-3 me-3 text-light opacity-75"></i>
                        <div>
                            <h6 class="fw-bold mb-1">WhatsApp</h6>
                            <p class="small mb-0 opacity-75">(41) 99869-6574 - Douglas</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <i class="bi bi-envelope-at-fill fs-3 me-3 text-light opacity-75"></i>
                        <div>
                            <h6 class="fw-bold mb-1">E-mail</h6>
                            <p class="small mb-0 opacity-75">contato@suportelas.com.br</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <i class="bi bi-clock-fill fs-3 me-3 text-light opacity-75"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Horário de Atendimento</h6>
                            <p class="small mb-0 opacity-75">Seg a Sex: 08h às 17:30h<br>Sáb: 09h às 12:00h</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                
                <?php if (isset($_GET['status']) && $_GET['status'] == 'sucesso'): ?>
                    <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        <strong>Orçamento enviado com sucesso!</strong> Em breve nossa equipe entrará em contato.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <div class="card border-0 shadow-sm p-4 h-100">
                    <h4 class="text-primary fw-bold mb-4"><i class="bi bi-pencil-square me-2"></i>Envie uma Mensagem</h4>
                    
                    <form action="processa_contato.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold text-dark">Nome Completo</label>
                            <input type="text" name="nome" class="form-control bg-light border-0" required placeholder="Digite seu nome completo">
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-dark">E-mail</label>
                                <input type="email" name="email" class="form-control bg-light border-0" required placeholder="exemplo@gmail.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-dark">Telefone / WhatsApp</label>
                                <input type="tel" name="telefone" id="tel" class="form-control bg-light border-0" required placeholder="(41) 99999-9999" inputmode="numeric" autocomplete="tel" maxlength="15" oninput="mascaraTel(this)">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-dark">Mensagem Detalhada</label>
                            <textarea name="mensagem" id="mensagem" class="form-control bg-light border-0" rows="4" maxlength="1000" placeholder="Descreva as medidas aproximadas, se é para janela, sacada, etc." required></textarea>
                            <div class="form-text text-end" id="contador"></div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-primary">
                                <i class="bi bi-camera me-2"></i>Anexar fotos do local (Opcional)
                            </label>
                            <input type="file" name="foto_cliente[]" class="form-control bg-light border-0" accept="image/*" multiple>
                            <div class="form-text">Envie fotos do ambiente para agilizar o orçamento (JPG ou PNG).</div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold shadow">
                            <i class="bi bi-send-fill me-2"></i>Enviar Pedido de Orçamento
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Máscara de Telefone
function mascaraTel(v){
    v.value = v.value.replace(/\D/g,"");
    v.value = v.value.replace(/^(\d{2})(\d)/g,"($1) $2");
    v.value = v.value.replace(/(\d)(\d{4})$/,"$1-$2");
}

// Contador de caracteres (Atualizado para 1000)
const textarea = document.getElementById('mensagem');
const contador = document.getElementById('contador');

textarea.addEventListener('input', function() {
    const chars = this.value.length;
    contador.textContent = `${chars} / 1000 caracteres`;
    
    // Muda a cor do texto se chegar perto do limite
    if (chars > 950) {
        contador.classList.add('text-danger');
    } else {
        contador.classList.remove('text-danger');
    }
});
</script>

</body>
</html>