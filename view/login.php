<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Login</title>
</head>
<body>
    <header class="cabecalho-login">
        <section id="cabecalho-login-logo">
            <img src="../img/logo.png">
            <h1>Xhopii</h1>
            <p>Entre</p>
        </section>
        <section id="cabecalho-login-ajuda">
            <p>Precisa de ajuda?</p>
        </section>
    </header>

    <section class="conteudo-login">
        <section class="conteudo-formulario">
            <?php if (isset($_GET['erro'])): ?>
                <p style="color: red; text-align: center;">Email ou senha incorretos.</p>
            <?php endif; ?>    
            <form id="form-log" method="POST" action="../processamento/processamento.php">
                <label id="input-log">Login</label>
                <input id="input-log" type="text" placeholder="Email" name="inputEmailLog">
                <input id="input-log" type="password" placeholder="Senha" name="inputSenhaLog">
                <input id="botao-log" type="submit" value="ENTRE">
            </form>
            <a id="esqueci-senha" href="senha.php">Esqueci minha senha</a>
            <a id="login-sms" href="loginSMS.php">Fazer login com SMS</a>
            <p>OU</p>
            <button id="botaoFacebook">Facebook</button>
            <button id="botaoGoogle">Google</button>
            <button id="botaoApple">Apple</button>
            <p>Novo na Xhopii? <a href="cadastroCliente.php">Cadastrar</a></p>
        </section>
    </section>

    <footer class="rodape-login">
        <img src="../img/footer-login.png">
        <hr>
        <p>© 2024 Xhopii. Todos os direitos reservados</p>
    </footer>
</body>
</html>