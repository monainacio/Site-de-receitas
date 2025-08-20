<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Site-de-receitas/css/index.css" media="screen">
    <title>StoryBites</title>
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

<main>
    <section>
        <p class="Text-coment">
            O StoryBites nasceu com o intuito de reunir histórias através das receitas de famílias. 
            Cada receita guarda uma história, cada mordida remete a uma memória e traz sabores que transportam para outro momento. <br>
            Encontre receitas tradicionais, sofisticadas, fáceis, rápidas ou elaboradas, tudo em um só lugar. 
            O recheio de emoções transborda a cada mordida.
        </p>
    </section>

    <section class="content">
        <div class="block">
            <figure>
                <img src="img/doces.jpg" alt="Bolo de chocolate decorado com frutas">
            </figure>
            <div>
                <h2>Doces</h2>
                <p>Receitinhas de doces deliciosos.</p>
                <a href="pages/doces.html" class="button">Saiba Mais</a>
            </div>
        </div>

        <div class="block">
            <img src="img/massas.jpg" alt="Prato de macarrão com molho caseiro">
            <div>
                <h2>Massas</h2>
                <p>Receitinhas de massas incríveis.</p>
                <a href="pages/massas.html" class="button">Saiba Mais</a>
            </div>
        </div>

        <div class="block">
            <img src="img/carnes.jpg" alt="Prato de macarrão com molho caseiro">
            <div>
                <h2>Carnes</h2>
                <p>Receitinhas de Carnes incríveis.</p>
                <a href="pages/carnes.html" class="button">Saiba Mais</a>
            </div>
        </div>

        <div class="block" id="home">
            <img src="img/sopas.png" alt="Coxinhas e salgadinhos variados">
            <div>
                <h2>Sopas</h2>
                <p>Receitinhas de sopinhas saborosas.</p>
                <a href="pages/sopas.html" class="button">Saiba Mais</a>
            </div>            
        </div>
        
        <div class="block" id="home">
            <img src="img/lanches.jpg" alt="Coxinhas e salgadinhos variados">
            <div>
                <h2>Lanches</h2>
                <p>Receitinhas de salgados saborosos.</p>
                <a href="pages/lanches.html" class="button">Saiba Mais</a>
            </div>            
        </div>

        <div class="block">
            <img src="img/bebidas.jpg" alt="Suco natural com frutas frescas">
            <div>
                <h2>Bebidas</h2>
                <p>Receitinhas de bebidas refrescantes.</p>
                <a href="pages/bebidas.html" class="button">Saiba Mais</a>
            </div>
        </div>

        
    </section>
</main>

<footer class="rodape">
    <p>@2025 - StoryBites - Receitas que Contam Histórias</p>   
    <p>Todos os direitos reservados. Segurança e privacidade.</p>
</footer>

</body>
</html>