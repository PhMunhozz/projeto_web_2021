<?php

if (empty($_POST) && empty($_SESSION)) {
    header('Location: ?pg=contato/formulario');
}

if (!empty($_POST)) {
    $_SESSION["dados"][] = $_POST;
}

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

# Insert no banco de dados
$sql = "INSERT INTO contatos (nome, telefone, email, mensagem) VALUES ('$nome', '$telefone', '$email', '$mensagem')";

if (mysqli_query($conn, $sql)) {
    echo "Dados inseridos no banco!";
} else {
    echo "Erro ao inserir dados";
}

exit();

?>

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

<a id="btn-limpar-sessao" href="?pg=contato/limpar_sessao">Limpar sessão</a>