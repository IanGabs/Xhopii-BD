<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Home</title>
</head>
<body>

    <header>
        <section id="cabecalho-logo">
            <img src="../img/logo.png" alt="Logo Xhopii">
            <h1>Xhopii</h1>
        </section>
        <section id="cabecalho-logout">
            <a href="login.php">Sair</a>
        </section>
    </header>

    <nav class="menu-horizontal">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="cadastroCliente.php">Cadastro Cliente</a></li>
            <li><a href="cadastroFuncionario.php">Cadastro Funcionário</a></li>
            <li><a href="cadastroProduto.php">Cadastro Produto</a></li>
            <li><a href="verCliente.php">Ver Clientes</a></li>
            <li><a href="verFuncionario.php">Ver Funcionários</a></li>
            <li><a href="verProduto.php">Ver Produtos</a></li>
        </ul>
    </nav>

    <div class="carousel-container">
        <div class="carousel">
            <img src="../img/coxi.png" alt="Imagem 1">
            <img src="../img/natal.png" alt="Imagem 2">
            <img src="../img/hi.png" alt="Imagem 3">
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>
    <script src="script.js"></script>

    <section class="conteudo-home">
        <img src="../img/frete.png" alt="Imagem de conteúdo principal">
    </section>

    <section class="conteudo-produtos">
        <h2>Produtos</h2>
        <div class="produtos-lista">
            <?php
            require_once '../processamento/funcoesBD.php';
            $listaProduto = retornarProduto();
            while ($produto = mysqli_fetch_assoc($listaProduto)) {
                echo '<div class="produto">';
                echo '<img src="../uploads/' . $produto['imagem'] . '" alt="' . $produto['nome'] . '">';
                echo '<div class="detalhes">';
                echo '<h3>' . $produto['nome'] . '</h3>';
                echo '<p><strong>Fabricante:</strong> ' . $produto['fabricante'] . '</p>';
                echo '<p><strong>Descrição:</strong> ' . $produto['descricao'] . '</p>';
                echo '<p><strong>Valor:</strong> R$ ' . $produto['valor'] . '</p>';
                echo '<p><strong>Quantidade:</strong> ' . $produto['quantidade'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <footer class="rodape-login">
        <img src="../img/footer-login.png" alt="Imagem de rodapé">
        <hr>
        <p>© 2024 Xhopii. Todos os direitos reservados</p>
    </footer>
</body>
</html>
