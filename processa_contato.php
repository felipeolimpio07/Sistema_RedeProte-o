<?php
session_start();
require_once 'config.php'; 

// ====================================================================
// 1. MODO "MOTOR": RECEBENDO DADOS DO FORMULÁRIO DO CLIENTE
// ====================================================================
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome      = $_POST['nome'] ?? '';
    $email     = $_POST['email'] ?? '';
    $telefone  = $_POST['telefone'] ?? '';
    $mensagem  = $_POST['mensagem'] ?? '';
    
    $fotos_nomes = [];
    $diretorio = "uploads/";

    if (!is_dir($diretorio)) {
        mkdir($diretorio, 0777, true);
    }

    if (!empty($_FILES['foto_cliente']['name'][0])) {
        foreach ($_FILES['foto_cliente']['tmp_name'] as $key => $tmp_name) {
            $nome_original = $_FILES['foto_cliente']['name'][$key];
            $extensao = pathinfo($nome_original, PATHINFO_EXTENSION);
            
            $novo_nome = bin2hex(random_bytes(5)) . "_" . $key . "." . $extensao;
            $caminho_final = $diretorio . $novo_nome;

            if (move_uploaded_file($tmp_name, $caminho_final)) {
                $fotos_nomes[] = $novo_nome;
            }
        }
    }

    $foto_caminho_db = implode(",", $fotos_nomes);

    $sql = "INSERT INTO contatos (nome_completo, email, telefone, mensagem, foto_caminho, data_envio) 
            VALUES (?, ?, ?, ?, ?, NOW())";

    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sssss", $nome, $email, $telefone, $mensagem, $foto_caminho_db);
        if ($stmt->execute()) {
            header("Location: contato.php?status=sucesso");
            exit();
        } else {
            header("Location: contato.php?status=erro");
            exit();
        }
    } else {
        die("Erro no banco: " . $conn->error);
    }
}

// ====================================================================
// 2. MODO "TELA": EXIBINDO OS ORÇAMENTOS (QUANDO VOCÊ FAZ LOGIN)
// ====================================================================

if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header("Location: login.php");
    exit();
}

$filtro_texto = $_GET['filtro_texto'] ?? '';
$filtro_data  = $_GET['filtro_data'] ?? '';

$sql = "SELECT * FROM contatos WHERE 1=1";
$params = [];
$tipos = "";

if (!empty($filtro_texto)) {
    $sql .= " AND (nome_completo LIKE ? OR email LIKE ? OR telefone LIKE ?)";
    $termo = "%" . $filtro_texto . "%";
    $params[] = $termo; 
    $params[] = $termo; 
    $params[] = $termo;
    $tipos .= "sss";
}

if (!empty($filtro_data)) {
    $sql .= " AND DATE(data_envio) = ?";
    $params[] = $filtro_data;
    $tipos .= "s";
}

$sql .= " ORDER BY data_envio DESC";

$stmt_view = $conn->prepare($sql);

if (!empty($params)) {
    $stmt_view->bind_param($tipos, ...$params);
}

$stmt_view->execute();
$resultado = $stmt_view->get_result();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel de Pedidos - Redes de Proteção</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background-color: #f0f2f5; }
        .card-orcamento { border: none; border-radius: 12px; transition: 0.3s; }
        .foto-miniatura { width: 80px; height: 80px; object-fit: cover; border-radius: 8px; cursor: pointer; transition: 0.2s; }
        .foto-miniatura:hover { opacity: 0.8; transform: scale(1.05); }
        .filtro-container { background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        
        /* Setas do carrossel maiores e com fundo escuro para destacar */
        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: rgba(0,0,0,0.8);
            border-radius: 50%;
            padding: 25px;
            width: 3rem;
            height: 3rem;
        }
    </style>
</head>
<body class="py-4">

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold text-primary">Olá, <?php echo htmlspecialchars($_SESSION['user_nome'] ?? 'Admin'); ?>!</h2>
            <p class="text-muted">Estes são os orçamentos recebidos pelo site.</p>
        </div>
        <a href="login.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-box-arrow-right me-1"></i>Sair</a>
    </div>

    <div class="filtro-container mb-4">
        <form method="GET" action="processa_contato.php" class="row g-3 align-items-end">
            <div class="col-md-5">
                <label class="form-label text-muted small fw-bold">Cliente ou Contato</label>
                <div class="input-group">
                    <span class="input-group-text bg-white"><i class="bi bi-search text-muted"></i></span>
                    <input type="text" name="filtro_texto" class="form-control border-start-0" 
                           placeholder="Nome, e-mail ou telefone..." 
                           value="<?php echo htmlspecialchars($filtro_texto); ?>">
                </div>
            </div>
            
            <div class="col-md-4">
                <label class="form-label text-muted small fw-bold">Data do Orçamento</label>
                <div class="input-group">
                    <span class="input-group-text bg-white"><i class="bi bi-calendar3 text-muted"></i></span>
                    <input type="date" name="filtro_data" class="form-control border-start-0" 
                           value="<?php echo htmlspecialchars($filtro_data); ?>">
                </div>
            </div>

            <div class="col-md-3 d-flex gap-2">
                <button type="submit" class="btn btn-primary w-100 fw-bold"><i class="bi bi-funnel me-1"></i>Filtrar</button>
                <?php if(!empty($filtro_texto) || !empty($filtro_data)): ?>
                    <a href="processa_contato.php" class="btn btn-light border w-100">Limpar</a>
                <?php endif; ?>
            </div>
        </form>
    </div>

    <div class="row">
        <?php if($resultado->num_rows > 0): ?>
            <?php while($row = $resultado->fetch_assoc()): ?>
            <div class="col-12 mb-3">
                <div class="card shadow-sm card-orcamento">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-3">
                                <h6 class="text-muted small fw-bold">CLIENTE</h6>
                                <p class="mb-0 fw-bold"><?php echo htmlspecialchars($row['nome_completo']); ?></p>
                                <small class="text-muted d-block mb-1"><i class="bi bi-envelope me-1"></i><?php echo htmlspecialchars($row['email']); ?></small>
                                <small class="text-muted d-block mb-1"><i class="bi bi-telephone me-1"></i><?php echo htmlspecialchars($row['telefone']); ?></small>
                                <small class="text-primary fw-bold mt-2 d-block"><?php echo date('d/m/Y \à\s H:i', strtotime($row['data_envio'])); ?></small>
                            </div>
                            
                            <div class="col-md-5 border-start border-end px-4">
                                <h6 class="text-muted small fw-bold">SOLICITAÇÃO</h6>
                                <p class="small mb-0 text-secondary"><?php echo nl2br(htmlspecialchars($row['mensagem'])); ?></p>
                            </div>

                            <div class="col-md-4 ps-4">
                                <h6 class="text-muted small fw-bold">FOTOS ENVIADAS</h6>
                                <div class="d-flex flex-wrap gap-2 mt-2">
                                    <?php 
                                    $fotos_array = array_filter(explode(',', $row['foto_caminho'])); 
                                    $total_fotos = count($fotos_array);

                                    if($total_fotos > 0) {
                                        $primeira_foto = trim($fotos_array[0]);
                                        echo "<div class='position-relative' data-bs-toggle='modal' data-bs-target='#modalGaleria{$row['id']}' style='cursor:pointer;'>
                                                <img src='uploads/{$primeira_foto}' class='foto-miniatura border shadow-sm'>
                                              </div>";
                                              
                                        echo "<button class='btn btn-sm btn-outline-primary mt-2 d-block w-100' data-bs-toggle='modal' data-bs-target='#modalGaleria{$row['id']}'>
                                                <i class='bi bi-arrows-fullscreen me-1'></i> Ver Tela Cheia ({$total_fotos})
                                              </button>";
                                    } else {
                                        echo "<span class='text-muted small italic'><i class='bi bi-camera-fill me-1'></i>Nenhuma foto</span>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if($total_fotos > 0): ?>
                <div class="modal fade" id="modalGaleria<?php echo $row['id']; ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content bg-dark border-0">
                            
                            <div class="modal-header border-0 position-absolute w-100 z-3" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), transparent);">
                                <h5 class="modal-title text-white"><i class="bi bi-camera me-2"></i><?php echo htmlspecialchars($row['nome_completo']); ?></h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            
                            <div class="modal-body p-0 d-flex align-items-center justify-content-center">
                                
                                <div id="carouselFotos<?php echo $row['id']; ?>" class="carousel slide w-100" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <?php foreach($fotos_array as $index => $foto): ?>
                                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?> text-center">
                                            <img src="uploads/<?php echo trim($foto); ?>" class="img-fluid" style="max-height: 100vh; object-fit: contain;">
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    
                                    <?php if($total_fotos > 1): ?>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselFotos<?php echo $row['id']; ?>" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Anterior</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselFotos<?php echo $row['id']; ?>" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Próximo</span>
                                    </button>
                                    <?php endif; ?>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-12 text-center py-5">
                <i class="bi bi-inbox text-muted" style="font-size: 3rem;"></i>
                <h5 class="mt-3 text-muted">Nenhum orçamento encontrado para este filtro.</h5>
            </div>
        <?php endif; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>