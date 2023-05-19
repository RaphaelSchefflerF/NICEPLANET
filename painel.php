<?php
//Inclui o Arquivo Protect.php
include('protect.php');
//HTML Com a pagina do Painel, com os botoes de cadastrar Produtor, Prodriedade e Buscar, alem do botao sair que volta ao login
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-primary">
        <div class="container">
            <a class="navbar-brand">
                <img src="img/LogoNiceplanet.png" width="190px">
            </a>
        </div>
    </nav>
    <div style="text-align:center" class="mt-4">
        <h2>Bem Vindo ao Painel.</h2>
        <div class="row justify-content-center mt-3">
            <div class="col-1">
                <label>Cadastrar</label>
                <a href="cadastrarProdutor.php" button type="button" class="btn btn-info"> Produtor </a>
            </div>
            <div class="col-1">
                <label>Cadastrar</label>
                <a href="cadastrarPropriedade.php" button type="button" class="btn btn-info"> Propriedade </a>
            </div>
            <div class="col-1">
            <label>Fazer</label>
                <a href="buscar.php" button type="button" class="btn btn-secondary"> Busca </a>
            </div>
        </div>

        <p><br>
            <a href="logout.php">Sair</a>
        </p></br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>