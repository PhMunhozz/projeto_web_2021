<?php

if (isset($_SESSION["nome"])) {
    header("Location: ?pg=area_restrita");
}

?>


<article class="flex">
    <section class="coluna">
        <form method="POST" action="?pg=login/processar_formulario">
            <h2>Login</h2>
            <div class="form-flex">
                <input type="text" name="usuario" id="usuario" required placeholder="Digite seu usuário..." />
                <input type="password" name="senha" id="senha" required placeholder="Digite sua senha..." />
                <input type="submit" value="Login">
            </div>
        </form>
    </section>
</article>