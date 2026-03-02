<?php
session_start();
require_once 'config.php';  // Seu db.php com sistema_telas

if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $sql = "SELECT id, nome FROM usuarios WHERE usuario = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $senha);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_nome'] = $user['nome'];
        $_SESSION['logged'] = true;
        header('Location: processa_contato.php');
        exit;
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Acesso Contato</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-form { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 300px; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .erro { color: red; text-align: center; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login Contato</h2>
        <?php if (isset($erro)) echo "<div class='erro'>$erro</div>"; ?>
        <form method="POST">
            <input type="text" name="usuario" placeholder="Usuário" required value="" autofocus>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit" name="login">Acessar Contato</button>
        </form>
        <p style="text-align: center; margin-top: 10px; font-size: 12px;">
        </p>
    </div>
</body>
</html>
