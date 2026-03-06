<?php
// Esse comando captura o nome exato do arquivo que está aberto (ex: contato.php)
$pagina_atual = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow sticky-top">
    <div class="container-fluid px-md-5"> 
        
        <a class="navbar-brand" href="index.php">
            <img src="img/suportelas.png" alt="Logo Suportelas" style="height: 85px; width: auto;" class="d-inline-block align-text-top rounded-3">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link px-3 custom-hover-link <?php if($pagina_atual == 'empresa.php') echo 'active fw-bold'; ?>" href="empresa.php">A empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 custom-hover-link <?php if($pagina_atual == 'modelos.php') echo 'active fw-bold'; ?>" href="modelos.php">Modelos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 custom-hover-link <?php if($pagina_atual == 'portifolio.php') echo 'active fw-bold'; ?>" href="portifolio.php">Portfólio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 custom-hover-link <?php if($pagina_atual == 'contato.php') echo 'active fw-bold'; ?>" href="contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>