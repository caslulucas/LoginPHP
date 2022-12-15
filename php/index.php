<?php 
// Fazer conexão, consulta no BD
    $email_bd ="admin@gmail.com";
    $senha_bd = 123;

    if (isset($_POST['bt_logar'])) {
        session_start();
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $_SESSION['email'] = $email;


    // Verificar se os dados do formulário são iguais aos do banco de dados 

    if($email == $email_bd && $senha == $senha_bd) {
        // login
        header('Location: dashboard.php');
    } else {
        // falha no login
        echo "<p>E-mail e/ou senha incorretos!</p>";
        // Fim if de verificação
    }


    } // Fim if isset

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste de login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="index.php" method="POST">
        <label>
            E-mail:
            <input type="email" name="email" />
        </label>
        <label>
            Senha:
            <input type="password" name="senha" />
        </label>
        <button name="bt_logar" type="submit">Logar</button>
    </form>
</body>
</html>