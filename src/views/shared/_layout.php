<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wallet</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="row p-none-f m-none">
    <aside class="sideBar bg-color-first-light">
        <header>
            <h1 class="brand"><a href="/">My Wallet</a></h1>
        </header>
        <nav class="menu">
            <a href="#" class="menu__item">Geral</a>
            <a href="#" class="menu__item">Transações</a>
            <a href="#" class="menu__item">Configurações</a>
        </nav>
        <footer>
            <p>&copy; 2022. Raeltech.</p>
        </footer>
    </aside>
    <main class="main bg-color-second-light">
        <header class="header">
            <form action="#" class="form searchBar">
                <fieldset>
                    <legend>Search</legend>
                    <input type="search" name="search" placeholder="Search...">
                </fieldset>
            </form>
            <nav class="userMenu">
                <a href="#" class="userMenu__item">Acessar</a>
                <a href="#" class="userMenu__item">Cadastrar</a>
            </nav>
        </header>
        <?php include($renderBody); ?>
    </main>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
    <script src="/js/script.js"></script>
</body>

</html>