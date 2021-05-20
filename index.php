<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require("bd/conexao.php");

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <script type="text/javascript" src="../../js/script.js"></script>

    <title>Contato</title>

</head>

<body>


    <header>
        <div class="flex cabecalho">
            <h1>PhMunhozz</h1>
            <nav>
                <ul class="lista-menu">
                    <li><a href="?pg=inicio">Inicio</a></li>
                    <li><a href="?pg=sobre">Sobre</a></li>
                    <li><a href="?pg=contato/formulario">Contato</a></li>
                    <?php
                    if (!isset($_SESSION["nome"])) {
                    ?>
                        <li><a href="?pg=login/formulario">Login</a></li>
                    <?php
                    } else {
                    ?>
                        <li><a href="?pg=area_restrita">Área restrita</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <?php

        /* Operador ternário para verificar se o pg está setado no GET e não está vazio
                        Caso verdadeiro: usa o valor do GET["pg"]
                        Caso falso: usa o valor "inicio"
                    */
        $pg = (isset($_GET["pg"]) && !empty($_GET["pg"])) ? $_GET["pg"] : "inicio";

        include("paginas/" . $pg . ".php");

        ?>

    </main>

    <footer>
        <p class="flex">Entre em contato:<br>paulo.munhoz@aluno.unincor.edu.br</p>
        <hr width="30%" color="#f0f0f0">
        <p class="txt-center">&copy;Copyright Paulo Munhoz - 7º Período CPU</p>
    </footer>


</body>

</html>