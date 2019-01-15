<?php


require ("conexao.php");
//include "conexao.php";

$nome=$_POST["nome"];
$site=$_POST["site"];
$email=$_POST["email"];
$cnpj=$_POST["cnpj"];
$endereco=$_POST["endereco"];
$cidade=$_POST["cidade"];
$telefone=$_POST["telefone"];
$ramo=$_POST["ramo"];
$responsavel=$_POST["nomecontato"];
$senha=$_POST["senha"];

$sql = "INSERT INTO cadastroinstituicao VALUES (null, '$nome', '$site', '$email', '$cnpj', '$endereco', '$cidade', '$telefone', '$ramo', '$responsavel', SHA1('$senha'), 1, 1, now()) ";
 
if(isset($_POST['nome'])){
    echo "<script>
    alert('Obrigada pelo cadastro!');
    window.location.href = 'login.php';
    </script>
    ";
}else{
     echo "<script>
    alert('Não foi possivel efetuar seu cadastro!');
    window.location.href = 'index.php';
    </script>
    ";
}

$res=mysqli_query($conexao,$sql);
mysqli_close($conexao);

?>