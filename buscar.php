<?php

include('conexao.php');
if (isset($_GET['busca'])) echo $_GET['busca'];{

}
else {
    $pesquisa = $mysqli->real_escape_string($_GET['busca']);
    $selected= $mysqli($_GET['select']);

    if( $selected  == 1);{
        $sql_code = "SELECT * FROM produtor WHERE fabricante LIKE '%$pesquisa%' OR modelo LIKE '%$pesquisa%' OR veiculo LIKE '%$pesquisa%'";
    }

    $sql_code = "SELECT * FROM produtor WHERE fabricante LIKE '%$pesquisa%' OR modelo LIKE '%$pesquisa%' OR veiculo LIKE '%$pesquisa%'";

    $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error);

    }


        //estou fazendo isso
        $id = 1

        $sql = "SELECT * FROM tabela_usuarios WHERE id = $id";

        $resultado = mysqli_query($conn, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            // Dados encontrados
            $linha = mysqli_fetch_assoc($resultado);
            // Acesse os valores por meio de $linha['nome_da_coluna']
            echo "ID: " . $linha['id'];
            echo "Nome: " . $linha['nome'];
            echo "Email: " . $linha['email'];
            // ...
        } else {
            // Nenhum registro encontrado com o ID fornecido
            echo "Nenhum registro encontrado.";
        }
                
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Sistema de Busca</title>
</head>

<body bgcolor="dark">
    <nav class="navbar bg-primary">
        <div class="container">
            <a class="navbar-brand">
                <img src="img/LogoNiceplanet.png" width="190px">
            </a>
        </div>
    </nav>
    <div class="container mt-5">
        <nav class="navbar">
            <form class="d-flex" role="search">
                <ul class="me-2 navbar-nav">
                    <select name="select" class="form-select" aria-label="Default select example">
                        <option selected>Selecione a tabela</option>
                        <option value="1">Produtor</option>
                        <option value="2">Propriedade</option>
                    </select>
                </ul>
                <input name="busca" class="form-control me-2" type="search" placeholder="  " aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Pesquisar</button>
            </form>
            <ul class="navbar-nav me-auto"></ul>
        </nav>
    </div>
    <div style="text-align:center">
        <p><br>
            <a href="painel.php">Voltar ao Menu Principal</a>
        </p></br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>