<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!empty($_POST)) {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $contato = $_POST["contato"];
    $mensagem = $_POST["mensagem"];
}

?>

<html>

<head>

    <title>Tabela</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />

</head>

<body>

    <header>
        <div class="flex cabecalho">
            <h1>PhMunhozz</h1>
            <nav>
                <ul class="lista-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li>Tabela</li>
                </ul>
            </nav>
        </div>
    </header>

    <table>
        <tr>
            <?php
            foreach ($_POST as $chave => $valor) {
            ?>
                <th><?= ucfirst($chave) ?></th>
            <?php
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($_POST as $valor) {
            ?>
                <td><?= $valor ?></td>
            <?php
            }
            ?>
        </tr>
    </table>

    <footer>
        <p class="flex">Entre em contato:<br>paulo.munhoz@aluno.unincor.edu.br</p>
        <hr width="30%" color="#f0f0f0">
        <p class="txt-center">&copy;Copyright Paulo Munhoz - 7º Período CPU</p>
    </footer>
</body>

</html>