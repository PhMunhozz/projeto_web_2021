<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!empty($_POST)){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $contato = $_POST["contato"];
    $mensagem = $_POST["mensagem"];

}

?>

<html>

    <head>

        <title>Formulário processado</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />

    </head>

    <body>

        <table>
            <tr>
                <?php 
                    foreach ($_POST as $chave => $valor){
                ?>
                    <th><?= ucfirst($chave) ?></th>
                <?php
                    }
                ?>
            </tr>
            <tr>
                <?php
                    foreach($_POST as $valor){
                ?>
                    <td><?= $valor ?></td>
                <?php
                    }
                ?>
            </tr>
        </table>

    </body>

</html>