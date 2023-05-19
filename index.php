<?php
//Inclui o Arquivo de Conexao
include('conexao.php');
//Verifica se o email e senha foram preenchidos
if(isset($_POST['email']) || isset($_POST['senha'])){
    //Verifica se o email foi preenchido , caso nao, pede pra preenche - lo
    if(strlen($_POST['email']) == 0){
        echo "Preencha seu E-mail";
    //Verifica se a senha foi preenchida , caso nao, pede pra preenche - la
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua Senha";
    //Caso os dois estejam preenchidos entra no Else.
    }else{
        //Cria duas Variaveis recebendo os Valores do Html
        $email = $mysqli->real_escape_string($_POST['email']); //real_escape_string = Limpa o campo para não ter invasao no banco de dados
        $senha = $mysqli->real_escape_string($_POST['senha']);
        //Procura no Banco de dados se os dados estiver corretos
        $sql_code = "SELECT * FROM usuario WHERE email ='$email' AND senha= '$senha'";
        $sql_query = $mysqli->query($sql_code) or die('"Falha na execução do Código SQL:" .mysqli->error'); // mudei o campo para outro add ASPAS
        $quantidade =$sql_query->num_rows;
        //Verifica a quantidade de Usuario e se for igual a 1 entra no if
        if ($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            //Verifica se a sessao foi aberta
            if (!isset($_SESSION)){
                //Inicia a Sessao
                session_start();
            }
            //Pega os id e o nome do usuario
            $_SESSION["id"] = $usuario["id"];
            $_SESSION["nome"] = $usuario["nomeUsuario"];
            //Redireciona para o Painel
            header("Location: painel.php");
        } 
        //Caso a quantidade for diferente de 1 da falha ao Logar
        else{
            echo"Falha ao Logar";
        }
    }
}
//HTML com o formulario de login de email e senha, alem do Registre-se aqui
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5" >
            <div class="row">
                <div class="col-md-12">
                    <h2>Login</h2>
                    <p>Por favor, preencha seu e-mail e senha.</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>    
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Confirma">
                        </div>
                        <p>Não tem conta? <a href="registrar.php">Registre-se Aqui.</a>.</p>
                    </form>
                </div>
            </div>
        </div>    
    </body>
