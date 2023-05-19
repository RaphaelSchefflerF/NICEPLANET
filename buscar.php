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
            <form class="d-flex" method="post" action="" role="search">
                <ul class="me-2 navbar-nav">
                    <select name="select" class="form-select" aria-label="Default select example">
                        <option selected>Selecione a tabela</option>
                        <option value="1">Produtor</option>
                        <option value="2">Propriedade</option>
                    </select>
                </ul>
                <input name="buscar" class="form-control me-2" type="search" placeholder="Digite um ID" aria-label="Search">
                <input type="submit" name="confirma" class="btn btn-primary" value="Confirma">
            </form>
            <ul class="navbar-nav me-auto"></ul>
        </nav>
    </div>
    <div class="container mt-5">
<?php
    // Inclui o Arquivo de Conexão
    include('conexao.php');
    // Verifica se o botão foi pressionado
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirma'])) {
        // Cria variáveis para armazenar os valores do formulário
        $pesquisa = $_POST['buscar'];
        $selected = $_POST['select'];
        // Verifica o valor selecionado
        if ($selected == 1) {
            $sql = "SELECT * FROM Produtor WHERE idProdutor = $pesquisa";
            $resultado = mysqli_query($mysqli, $sql);
            if (mysqli_num_rows($resultado) > 0) {
                // Início da tabela
                echo "<table class='table'>";
                echo "<tr><th>ID</th><th>Nome</th><th>CPF</th></tr>";
                // Exibe os dados em linhas da tabela
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $linha['idProdutor'] . "</td>";
                    echo "<td>" . $linha['nomeProdutor'] . "</td>";
                    echo "<td>" . $linha['cpfProdutor'] . "</td>";
                    echo "</tr>";
                }
                // Fim da tabela
                echo "</table>";
            } else {
                // Nenhum registro encontrado com o ID fornecido
                echo "Nenhum registro encontrado.";
            }
        } elseif ($selected == 2) {
            $sql = "SELECT * FROM Propriedade WHERE idPropriedade = $pesquisa";
            $resultado = mysqli_query($mysqli, $sql);
            if (mysqli_num_rows($resultado) > 0) {
                // Início da tabela
                echo "<table class='table'>";
                echo "<tr><th>ID</th><th>Nome</th><th>Cadastro</th></tr>";
                echo "<tbody>";
                // Exibe os dados em linhas da tabela
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $linha['idPropriedade'] . "</td>";
                    echo "<td>" . $linha['nomePropriedade'] . "</td>";
                    echo "<td>" . $linha['cadastroRural'] . "</td>";
                    echo "</tr>";
                }
                // Fim da tabela
                echo "</tbody>";
                echo "</table>";
            } else {
                // Nenhum registro encontrado com o ID fornecido
                echo "Nenhum registro encontrado.";
            }
        }
    }
?>
</div>
    <div style="text-align:center">
        <p><br>
            <a href="painel.php">Voltar ao Menu Principal</a>
        </p></br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
