<?php

if(!isset($_SESSION["nome"])){
    header('Location: ?pg=login/formulario');
}

?>

<h1 class="txt-center">Área restrita</h1>

<p class="txt-center">Bem-vindo(a), <?= $_SESSION["nome"] ?>!</p>

<div class="txt-center" id="btn-limpar-sessao">
    <a href="?pg=login/limpar_sessao">Sair</a>
</div>