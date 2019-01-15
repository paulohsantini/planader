<?php
header("content-type: text/html;charset=utf-8");
$host = "localhost";
$user = "root";
$password = "";
$database = "planader";
$conexao = mysqli_connect($host, $user, $password);
if(!($conexao)){
    echo "Não foi possivel estabelecer uma conexão com o MYSQL.";
    exit;
}  
$selection = mysqli_select_db($conexao,$database) or die(mysqli_error());
if(!($selection)){
    echo "Não foi possivel selecionar o gerenciador MYSQL.";
    exit;
}
//mysqli_query($conexao, "SET NAMES 'utf8'");
//mysqli_query($conexao, 'SET character_set_connection=utf8');
//mysqli_query($conexao, 'SET character_set_client=utf8');
//mysqli_query($conexao, 'SET character_set_results=utf8');
?>