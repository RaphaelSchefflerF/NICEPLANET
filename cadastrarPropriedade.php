<?php
//Inclui o Arquivo de Conexao
include('conexao.php');
//Verifica se o Botao foi apertado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirma'])) {
    //Duas Variaveis Recebendo os Valores do HTML
    $nome = trim($_POST['nomePropriedade']);
    $nrRural = trim($_POST['nrCadastro']);
    //Insere as Variaveis no Banco de Dados
    $sql = "INSERT INTO propriedade (nomePropriedade, cadastroRural) VALUES ('$nome', '$nrRural')";
    //Verifica se foi registrado com sucesso e informa uma msg
    if (mysqli_query($mysqli, $sql)) {
        echo "Registro inserido com sucesso.";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conn);
    }
    //Fecha a conexao com o Banco
    mysqli_close($mysqli);
}
//HTML com o formulario e com o Botao de voltar ao painel
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Propriedade</title>
</head>

<body>
    <nav class="navbar bg-primary">
        <div class="container">
            <a class="navbar-brand">
                <img src="img/LogoNiceplanet.png" width="190px">
            </a>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h4>Registrar Propriedade</h4>
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label>Nome da Propriedade: </label>
                        <input type="text" name="nomePropriedade" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Número do Cadastro Rural: </label>
                        <input type="text" name="nrCadastro" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" name="confirma" class="btn btn-primary" value="Confirma">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div style="text-align:center">
        <p><br>
            <a href="painel.php">Voltar ao Menu Principal</a>
        </p></br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>