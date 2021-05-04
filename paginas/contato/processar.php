<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (empty($_POST) && empty($_SESSION)) {
    header('Location: contato.php');
}

// var_dump($_SESSION);

if (!empty($_POST)) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $contato = $_POST["contato"];
    $mensagem = $_POST["mensagem"];
    $_SESSION["dados"][] = $_POST;
}

?>

<html>

<head>

    <title>Tabela</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css" />
    <script type="text/javascript" src="../../js/script.js"></script>

</head>

<body>

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

    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Mensagem</th>
        </tr>
        <?php
        foreach ($_SESSION["dados"] as $valor_dados) {
        ?>
            <tr>
                <?php
                foreach ($valor_dados as $valor) {
                ?>
                    <td><?= $valor ?></td>
                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <a href="limpar_sessao.php">Limpar sessão</a>

    <footer>
        <p class="flex">Entre em contato:<br>paulo.munhoz@aluno.unincor.edu.br</p>
        <hr width="30%" color="#f0f0f0">
        <p class="txt-center">&copy;Copyright Paulo Munhoz - 7º Período CPU</p>
    </footer>
</body>

</html>