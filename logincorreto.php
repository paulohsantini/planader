<?php

if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
  echo "<script>
    alert('Não deu');
    window.location.href = 'index.php';
    </script>
    ";
}

//mysqli_connect("localhost", "root", "erechim") or trigger_error(mysqli_error());
//mysqli_select_db("planader") or trigger_error(mysqli_error());

$conexao = mysqli_connect("localhost", "root", "erechim");
mysqli_select_db($conexao, "planader");

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
// Validação do usuário/senha digitados
$sql = "SELECT `id`, `nome`, `nivel` FROM `cadastroInstituicao` WHERE (`email` = '". $email ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1"; 
$query = mysqli_query($conexao, $sql);
if (mysqli_num_rows($query) != 1) {
  // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
  echo "Login inválido!"; exit;
} else {
  // Salva os dados encontados na variável $resultado
  $resultado = mysqli_fetch_assoc($query);
    
     if (!isset($_SESSION)) session_start();
  // Salva os dados encontrados na sessão
  $_SESSION['UsuarioID'] = $resultado['id'];
  $_SESSION['UsuarioNome'] = $resultado['nome'];
  $_SESSION['UsuarioNivel'] = $resultado['nivel'];
  
    if($_SESSION['UsuarioNivel'] == 1)
        header('Location: restrito.php');
    elseif($_SESSION['UsuarioNivel'] == 2)
        header('Location: adminsgeral.php');
    elseif($_SESSION['UsuarioNivel'] == 3)
        header('Location: adminprincipal.php');
}
?>