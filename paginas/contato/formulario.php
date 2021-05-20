<article class="flex">
    <section class="coluna">
        <form id="form" method="POST" action="?pg=contato/processar_formulario">
            <h2>Formulário de Contato</h2>
            <div class="form-flex">
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome...">
                <input type="text" name="telefone" id="telefone" placeholder="Digite seu contato...">
                <input type="email" name="email" id="email" placeholder="Digite seu email...">
                <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Digite sua mensagem..."></textarea>
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </section>
</article>