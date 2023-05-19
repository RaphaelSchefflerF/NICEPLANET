<?php
//Inclui o Arquivo de Conexao
include('conexao.php');
//Verifica se o usuario apertou o Botao de Confirmar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirma'])) {
    //Variaveis recebendo valores
    $nome = trim($_POST['nomeCompleto']);
    $senha = trim($_POST['senhaRegis']);
    $email = trim($_POST['emailRegis']);
    //Insere as Variaveis dentro do banco de Dados
    $sql = "INSERT INTO usuario (nomeUsuario, senha, email) VALUES ('$nome', '$senha', '$email')";
    //Verifica se o registro foi inserido com sucesso
    if (mysqli_query($mysqli, $sql)) {
        echo "Registro inserido com sucesso.";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conn);
    }
    //Fecha a conexao com o Banco
    mysqli_close($mysqli);
}

//HTML com formulario de Registro
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Registrar</h2>
                <p>Por favor, preencha este formulário para criar uma conta.</p>
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label>Nome Completo</label>
                        <input type="text" name="nomeCompleto" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Email </label>
                        <input type="email" name="emailRegis" class="form-control" required />
                    </div>
                    <div class="form-group mb-3">
                        <label>Senha</label>
                        <input type="password" name="senhaRegis" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Confirmar Senha</label>
                        <input type="password" name="confirmaSenha" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" name="submit" class="btn btn-primary" value="Confirmar Registro">
                    </div>
                    <p>Já tem uma conta?<a href="index.php">Login aqui.</a>.</p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>