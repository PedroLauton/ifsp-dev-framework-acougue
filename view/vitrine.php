<?php
    include_once "../control/gerenciadorSessao.php";
    include_once "../control/produtoControl.php";

    GerenciadorSessao::iniciarSessao(); 

    $dadosProdutos = new Produto;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/vitrine.css">
    <title>Açougu-E</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="cabecalho__navegacao">
            <a href="vitrine.php"><img class="cabecalho__navegacao__logo" src="../img/logo.png" alt="Logo Açougu-E"></a>
            <span class="cabecalho__navegacao__Marca">Açougu-<span class="cabecalho__navegacao__Marca__Estilo">E</span></span>
            <a class="cabecalho__navegacao__login" href="login.php">Login</a>
        </nav>
    </header>
    <main class="container">
        <section class="container__conteudo">
            <div class="container__conteudo__promocional">
                <img class="container__conteudo__promocional__imagem" src="../img/promocional.jpg" alt="Imagem Promocional">
            </div>
            <h1 class="container__conteudo__titulo">Nossos Cortes</h1>
            <p class="container__conteudo__texto">No Açougu-E, você encontra carnes suínas, bovinas, aves e frutos do mar de altíssima qualidade. Nossos cortes são selecionados com rigor para garantir frescor e sabor em cada pedaço. Seja para um churrasco, uma refeição rápida ou um prato sofisticado, temos a carne perfeita para todas as ocasiões. Visite-nos e descubra a diferença que a qualidade do Açougu-E pode fazer nas suas refeições. Siga-nos nas redes sociais e fique por dentro das nossas promoções exclusivas!</p>
            <div class="container__conteudo__produtos__tema">
                <img class="container__conteudo__produtos__tema__traco" src="../img/traco.png" alt="Tracejado">
                <h2 class="container__conteudo__produtos__tema__titulo">Aves</h2>
                <img class="container__conteudo__produtos__tema__traco" src="../img/traco.png" alt="Tracejado">
            </div>
            <?php $produtos = $dadosProdutos->listarPorCategoria(1); ?>
            <div class="container__conteudo__produtos">
                <?php if (!empty($produtos)): ?>
                    <?php foreach($produtos as $produto): ?>
                        <div class="container__conteudo__produtos__cartoes">
                            <h3 class="container__conteudo__produtos__cartoes__titulo"><?php echo $produto['NomeProduto']; ?></h3>
                            <?php echo '<img src="../img/'.$produto['fotoProduto'].'" alt="Carne de ave" class="container__conteudo__produtos__cartoes__imagem">'; ?>
                            <span class="container__conteudo__produtos__cartoes__indicativo">Kg: <?php echo $produto['PorcaoUnidadeKg']; ?></span>
                            <span class="container__conteudo__produtos__cartoes__preco">Preço: R$ <?php echo $produto['PrecoUnitario']; ?>,00</span>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <span class="container__conteudo__produtos__semproduto"> Sem produtos nessa seção.</span>
                <?php endif; ?>
            </div>
            <div class="container__conteudo__produtos__tema">
                <img class="container__conteudo__produtos__tema__traco" src="../img/traco.png" alt="Tracejado">
                <h2 class="container__conteudo__produtos__tema__titulo">Carne Bovina</h2>
                <img class="container__conteudo__produtos__tema__traco" src="../img/traco.png" alt="Tracejado">
            </div>
            <?php $produtos = $dadosProdutos->listarPorCategoria(2); ?>
            <div class="container__conteudo__produtos">
                <?php if (!empty($produtos)): ?>
                    <?php foreach($produtos as $produto): ?>
                        <div class="container__conteudo__produtos__cartoes">
                            <h3 class="container__conteudo__produtos__cartoes__titulo"><?php echo $produto['NomeProduto']; ?></h3>
                            <?php echo '<img src="../img/'.$produto['fotoProduto'].'" alt="Carne bovina" class="container__conteudo__produtos__cartoes__imagem">'; ?>
                            <span class="container__conteudo__produtos__cartoes__indicativo">Kg: <?php echo $produto['PorcaoUnidadeKg']; ?></span>
                            <span class="container__conteudo__produtos__cartoes__preco">Preço: R$ <?php echo $produto['PrecoUnitario']; ?>,00</span>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <span class="container__conteudo__produtos__semproduto"> Sem produtos nessa seção.</span>
                <?php endif; ?>
            </div>
            <div class="container__conteudo__produtos__tema">
                <img class="container__conteudo__produtos__tema__traco" src="../img/traco.png" alt="Tracejado">
                <h2 class="container__conteudo__produtos__tema__titulo">Carne Suína</h2>
                <img class="container__conteudo__produtos__tema__traco" src="../img/traco.png" alt="Tracejado">
            </div>
            <?php $produtos = $dadosProdutos->listarPorCategoria(3); ?>
            <div class="container__conteudo__produtos">
                <?php if (!empty($produtos)): ?>
                    <?php foreach($produtos as $produto): ?>
                        <div class="container__conteudo__produtos__cartoes">
                            <h3 class="container__conteudo__produtos__cartoes__titulo"><?php echo $produto['NomeProduto']; ?></h3>
                            <?php echo '<img src="../img/'.$produto['fotoProduto'].'" alt="Carne suína" class="container__conteudo__produtos__cartoes__imagem">'; ?>
                            <span class="container__conteudo__produtos__cartoes__indicativo">Kg: <?php echo $produto['PorcaoUnidadeKg']; ?></span>
                            <span class="container__conteudo__produtos__cartoes__preco">Preço: R$ <?php echo $produto['PrecoUnitario']; ?>,00</span>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <span class="container__conteudo__produtos__semproduto"> Sem produtos nessa seção.</span>
                <?php endif; ?>
            </div>
            <div class="container__conteudo__produtos__tema">
                <img class="container__conteudo__produtos__tema__traco" src="../img/traco.png" alt="Tracejado">
                <h2 class="container__conteudo__produtos__tema__titulo">Frutos do Mar</h2>
                <img class="container__conteudo__produtos__tema__traco" src="../img/traco.png" alt="Tracejado">
            </div>
            <?php $produtos = $dadosProdutos->listarPorCategoria(4); ?>
            <div class="container__conteudo__produtos">
                <?php if (!empty($produtos)): ?>
                    <?php foreach($produtos as $produto): ?>
                        <div class="container__conteudo__produtos__cartoes">
                            <h3 class="container__conteudo__produtos__cartoes__titulo"><?php echo $produto['NomeProduto']; ?></h3>
                            <?php echo '<img src="../img/'.$produto['fotoProduto'].'" alt="Frutos do mar" class="container__conteudo__produtos__cartoes__imagem">'; ?>
                            <span class="container__conteudo__produtos__cartoes__indicativo">Kg: <?php echo $produto['PorcaoUnidadeKg']; ?></span>
                            <span class="container__conteudo__produtos__cartoes__preco">Preço: R$ <?php echo $produto['PrecoUnitario']; ?>,00</span>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <span class="container__conteudo__produtos__semproduto"> Sem produtos nessa seção.</span>
                <?php endif; ?>
            </div>
        </section>
        <section class="container__fornecedores">
            <div class="container__fornecedores__centralizar">
                <h2 class="container__fornecedores__titulo">Nossos fornecedores</h2>
                <img class="container__fornecedores__centralizar__imagem" src="../img/Fazuele.png" alt="Fornecedor Fazuele">
                <img class="container__fornecedores__centralizar__imagem" src="../img/FOGONOBOI.png" alt="Fornecedor FOGONOBOI">
            </div>
            <div class="container__fornecedores__auxiliar">
                <h2 class="container__fornecedores__titulo__dois">Você sabia?</h2>
                <p class="container__fornecedores__texto">Açougu-E é uma açougueira que nasceu do amor e expertise de Eduardo pelos cortes de carne de qualidade. Localizada em um vilarejo rural, Eduardo transformou sua propriedade em um ponto de referência para amantes da carne há três décadas. Com uma seleção cuidadosa e pessoal de cada peça, a "Açougu-E" se destaca pela excelência no atendimento e pela promessa de oferecer sempre frescor e sabor incomparáveis, tornando-se não apenas um negócio local, mas uma parte essencial da comunidade.</p>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__centralizar">
            <span class="footer__centralizar__conteudo">+55 11 99999-9999 </span>
            <span class="footer__centralizar__conteudo">açougue@gmail.com</span>
            <span class="footer__centralizar__conteudo">©2024 Açougu-e. Todos os direitos reservados.</span>
        </div>
    </footer>
</body>
</html>
