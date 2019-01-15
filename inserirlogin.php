<?php

require("conexao.php");

if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
  header("Location: index.php"); exit;
}

mysqli_select_db($conexao, $database) or trigger_error(mysqli_error());

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
// Validação do usuário/senha digitados
$sql = "SELECT `id`, `nome`, `nivel` FROM `cadastroInstituicao` WHERE (`email` = '". $email ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1"; 
$query = mysqli_query($conexao, $sql);
if (mysqli_num_rows($query) != 1) {
  // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
  echo "<script>
    alert('Não foi possivel efetuar seu login!');
    window.location.href = 'login.php';
    </script>
    ";; exit;
} else {
  // Salva os dados encontados na variável $resultado
  $resultado = mysqli_fetch_assoc($query);
    
     if (!isset($_SESSION)) session_start();
  // Salva os dados encontrados na sessão
  $_SESSION['UsuarioID'] = $resultado['id'];
  $_SESSION['UsuarioNome'] = $resultado['nome'];
  $_SESSION['UsuarioNivel'] = $resultado['nivel'];
  
    if($_SESSION['UsuarioNivel'] == 1)
        header('Location: organizacoes.php');
    elseif($_SESSION['UsuarioNivel'] == 2)
        header('Location: IFSeEscritorio.php');
    elseif($_SESSION['UsuarioNivel'] == 3)
        header('Location: externos.php');
}
?>