<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilo.css">
    <script type="text/javascript" src="../../js/script.js"></script>

    <title>Contato</title>

</head>

<body>
    <main>

        <header>
            <div class="flex cabecalho">
                <h1>PhMunhozz</h1>
                <nav>
                    <ul class="lista-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="contato.php">Contato</a></li>
                        <li><a href="processar.php">Tabela</a></li>
                    </ul>
                </nav>
            </div>
        </header>


        <article class="flex">
            <section class="coluna">
                <form id="form" method="POST" action="processar.php">
                    <h2>Formulário de Contato</h2>
                    <div class="form-flex">
                        <input type="text" name="nome" id="nome" placeholder="Digite seu nome..." >
                        <input type="email" name="email" id="email" placeholder="Digite seu email..." >
                        <input type="text" name="contato" id="contato" placeholder="Digite seu contato..." >
                        <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Digite sua mensagem..." ></textarea>
                        <input type="submit" value="Cadastrar">
                    </div>
                </form>
            </section>
        </article>

        <footer>
            <p class="flex">Entre em contato:<br>paulo.munhoz@aluno.unincor.edu.br</p>
            <hr width="30%" color="#f0f0f0">
            <p class="txt-center">&copy;Copyright Paulo Munhoz - 7º Período CPU</p>
        </footer>
    </main>

</body>

</html>