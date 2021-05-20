<?php

if(!empty($_POST)){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if($usuario == "admin" && md5($senha) == md5("admin123")){
        $_SESSION["nome"] = "Paulo";

?>
        <div class="txt-center">
            <span style="color:green;">Login efetuado!</span>
        </div>
        <script>
            setTimeout(function() {
                window.location.href = "?pg=area_restrita";
            }, 3000);
        </script>
<?php
    }
    else{
?>
        <p class="txt-center" style="color:red;">Dados inválidos! Tente novamente.</p>
        <p class="txt-center"><a href="javascript:history.back();">Voltar</a></p>
<?php
    }
}
else{
    header("Location: ?pg=login/formulario");
}
?>
