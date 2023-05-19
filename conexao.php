<?php
//Variaveis recebendo valores
$usuario='root';
$senha='';
$database='projeto';
$host='localhost';

// Conectar ao banco de dados
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Verificar a conexão
if ($mysqli -> error){
    die("Falha ao conectar ao Banco de Dados".$mysqli->error);
}

