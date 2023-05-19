<?php
//Verifica a sesssao
if (!isset($_SESSION)){
    //Inicia a sessao
    session_start();
}
//Verifica se o usuario esta logado ou nao
if(isset($_SESSION["id"])) {
    //Redireciona para a pagina Index.php
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\"> ENTRAR</a></p>");
}

?>