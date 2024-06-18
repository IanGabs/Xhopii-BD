<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Redefinir Senha</title>
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

    <section class="conteudo-senha">
        <section class="conteudo-formulario-senha">
                <p style="color: red; text-align: center;">Email ou senha incorretos.</p>
            <form id="form-log" method="POST" action="../processamento/processamento.php">
                <button id="botao-voltar" type="button" onclick="location.href='login.php'">
                    <img src="../img/seta.png">
                </button>
                <label id="label-log">Redefinir senha</label>
                <input id="input-log" type="text" placeholder="Email" name="inputRedefinirLog">
                <input id="botao-log" type="submit" value="ENVIAR">
            </form>
        </section>
    </section>

    <footer class="rodape-login">
        <img src="../img/footer-login.png">
        <hr>
        <p>© 2024 Xhopii. Todos os direitos reservados</p>
    </footer>
</body>
</html>