<?php


require ("conexao.php");
//include "conexao.php";

$nomeOrg=$_POST["nomeOrg"];
$demanda=$_POST["demanda"];
$atendimento=$_POST["atendimento"];
$previsao=$_POST["previsao"];

$sql = "INSERT INTO cadastrodemanda VALUES ('$nomeOrg', '$demanda', '$atendimento', '$previsao') ";
 
if(isset ($_POST['demanda']) && isset($_POST['atendimento']) && isset($_POST['previsao'])){
    echo "<script>
    alert('Obrigada pelo cadastro!');
    window.location.href = 'organizacoes.php';
    </script>
    ";
}else{
     echo "<script>
    alert('Não foi possivel efetuar seu cadastro!');
    window.location.href = 'cadDemanda.php';
    </script>
    ";
}

$res=mysqli_query($conexao, $sql);
mysqli_close($conexao);

?>