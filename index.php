<?php
if(isset($_GET['p'])){
    $paginas = $_GET['p'];
} else{
    $paginas = null;
}

switch($paginas){
    case "cadastro":
    $pagina = "log/cadastro.php";
    $titulo = "Cadastro";
    $nav = '_navLog';
    break;

    case 'login':
    $pagina = "log/login.php";
    $titulo = "Login";
    $nav = '_navLog';
    break;

    case 'vizualizacao':
    $pagina = "dashboard/vizualizacao.php";
    $titulo = "Vizualização";
    $nav = '_navDashboard';
    break;

    case 'importacao':
    $pagina = "dashboard/importacao.php";
    $titulo = "Importação";
    $nav = '_navDashboard';
    break;

    case "sair":
      $pagina = "dashboard/sair.php";
      $titulo = "Sair";
      $nav = '_navLog';
      break;

    default:
    $pagina = "log/login.php";
    $titulo = "Login";
    $nav = '_navLog';
    break;
}
function mensagem($message, $cor){
  if($cor == 'sucesso'){
    $cor = 'rgb(56, 255, 162)';
    require_once "Vendor/parciais/message.html";
  }else{
    $cor = 'rgb(255, 100, 100)';
    require_once "Vendor/parciais/message.html";

  }
  
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $titulo; ?></title>
    <?php require_once "Vendor/parciais/_head.html"; ?>
  <head>

<body style="background-color: #23B6A2; background-image: url('Vendor/img.jpg'); background-size: 100%;">

<header style="width: 100%;">
  <?php require_once "Vendor/parciais/$nav.html"; ?>
</header>
<?php 

require_once "Vendor/$pagina"; ?>

</body>
</html>