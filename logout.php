<?php
//Verifica a sesssao
if (!isset($_SESSION)){
    //Inicia a sessao
    session_start();

}
//Destroi a sessao 
session_destroy();
//Redireciona para a pagina Index.php
header("Location: index.php");
?>