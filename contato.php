<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Redes de Proteção</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        textarea.form-control {
            resize: vertical;
            min-height: 150px;
            font-size: 16px;
        }
        .contador {
            font-size: 12px;
            color: #666;
            text-align: right;
            margin-top: 5px;
            margin-bottom: 15px;
        }
        .contador.perto { color: #ffc107; }
        .contador.limite { color: #dc3545; }
        .card { border-radius: 15px; }
        .alert { border-radius: 10px; border: none; }
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
                <li class="nav-item"><a class="nav-link px-3" href="portifolio.php">Portfólio</a></li>
                <li class="nav-item"><a class="nav-link px-3 active fw-bold" href="contato.php">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            
            <?php if (isset($_GET['status']) && $_GET['status'] == 'sucesso'): ?>
                <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <strong>Orçamento enviado com sucesso!</strong> Em breve entraremos em contato.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="card border-0 shadow-lg p-4">
                <h2 class="text-primary fw-bold mb-4"><i class="bi bi-envelope-at me-2"></i>Solicitar Orçamento</h2>
                
                <form action="processa_contato.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nome Completo</label>
                        <input type="text" name="nome" class="form-control" required placeholder="Digite seu nome completo">
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">E-mail</label>
                            <input type="email" name="email" class="form-control" required placeholder="exemplo@email.com">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Telefone / WhatsApp</label>
                            <input type="text" name="telefone" id="tel" class="form-control" required placeholder="(41) 99999-9999" onkeyup="mascaraTel(this)">
                        </div>
                    </div>

                    <div class="mb-2">
                        <label class="form-label fw-bold">Mensagem Detalhada</label>
                        <textarea 
                            name="mensagem" 
                            id="mensagem"
                            class="form-control" 
                            maxlength="65535"
                            placeholder="Descreva medidas, quantidades, cores e endereço para visita técnica..."
                            required></textarea>
                        <div class="contador" id="contador">0 / 65.535 caracteres</div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold text-primary">
                            <i class="bi bi-camera me-2"></i>Anexar fotos do local (Opcional)
                        </label>
                        <input type="file" name="foto_cliente[]" class="form-control" accept="image/*" multiple>
                        <div class="form-text">Selecione várias fotos segurando Ctrl.</div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold shadow">
                        <i class="bi bi-send me-2"></i>ENVIAR PEDIDO DE ORÇAMENTO
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Máscara de Telefone Automática
function mascaraTel(v){
    v.value = v.value.replace(/\D/g,"");
    v.value = v.value.replace(/^(\d{2})(\d)/g,"($1) $2");
    v.value = v.value.replace(/(\d)(\d{4})$/,"$1-$2");
}

// Contador de caracteres
const textarea = document.getElementById('mensagem');
const contador = document.getElementById('contador');
textarea.addEventListener('input', function() {
    const chars = this.value.length;
    contador.textContent = `${chars.toLocaleString()} / 65.535 caracteres`;
    if (chars > 60000) contador.classList.add('limite');
    else if (chars > 45000) contador.classList.add('perto');
    else contador.classList.remove('perto', 'limite');
});
</script>

</body>
</html>