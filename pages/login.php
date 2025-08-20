<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Site-de-receitas/css/index.css" media="screen">
    <title>StoryBites - Login</title>
    <meta name="description" content="StoryBites reúne receitas de família e memórias deliciosas. Encontre doces, salgados, bebidas e massas que contam histórias.">
</head>
<body>
<header class="menu">   
    <nav>
        <img src="/Site-de-receitas/img/logo.png" alt="Logo StoryBites" width="90">
        <a href="/Site-de-receitas/">INÍCIO</a>
        <a href="/Site-de-receitas/pages/doces.php">DOCES</a>           
        <a href="/Site-de-receitas/pages/massas.php">MASSAS</a>
        <a href="/Site-de-receitas/pages/carnes.php">CARNES</a>
        <a href="/Site-de-receitas/pages/sopas.php">SOPAS</a>
        <a href="/Site-de-receitas/pages/lanches.php">LANCHES</a>
        <a href="/Site-de-receitas/pages/bebidas.php">BEBIDAS</a>            
        <a href="/Site-de-receitas/pages/login.php">ENTRAR</a>
        <a href="/Site-de-receitas/pages/cadastro.php">CADASTRAR</a>
           <div class="content">
                <form class="search-form" action="#" method="GET" autocomplete="off">
                <input 
                type="text" 
                name="busca" 
                placeholder="Buscar receitas..." 
                aria-label="Buscar receitas"
            >         
            <a button type="submit">PROCURAR</button> </a>
            </div>
        </form>
    </nav>
</header>

<?php include('../includes/header.php'); ?>

<main class="formulario">
  <h2>Login</h2>
  <form action="valida_login.php" method="post">
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required>

    <input type="submit" value="Entrar">
  </form>
</main>

<?php include('../includes/footer.php'); ?>

<footer class="rodape">
    <p>@2025 - StoryBites - Receitas que Contam Histórias</p>   
    <p>Todos os direitos reservados. Segurança e privacidade.</p>
</footer>

</body>
</html>