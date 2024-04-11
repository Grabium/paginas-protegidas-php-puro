<?php 
session_start(); 

$usuarioPesquisado = "gabriel";
$passPesquisada = "1234";
$erro = "";


//verifica se há campo vazio:
if((!isset($_POST["login"]))||($_POST["login"]=="")){
  $erro = "Preencha o login.";
}elseif((!isset($_POST["senha"]))||($_POST["senha"]=="")){
  $erro = "Preencha a senha.";
}else{

  //já que não está vazio:
  $login=$_POST["login"];
  $senha=$_POST["senha"];

  //Vamos supor que houve uma pesquisa SQL no BD
  if(($login != $usuarioPesquisado)||($senha != $passPesquisada)){
    $erro="Login ou senha inválidos.";
  }else{
    $_SESSION["usuario"] = $usuarioPesquisado;
  }
    
}

//SE houve $erro ou SENAO o $_SESSION["usuario"] foi setado:
if($erro!=""){
  header("Location: formlogin.php?erro=$erro",true,301);
}elseif(isset($_SESSION["usuario"])){
  header("Location: protegida.php",true,301);
}

  
?>

  
  