<?php
session_start();

if(!isset($_SESSION["usuario"])){ 
  header("location: formlogin.php",TRUE,301);
}else{
  $usuario = ucfirst($_SESSION["usuario"]);
?>
  <html>
    <head>
      <title>Página protegida</title>
    </head>
    <body>
      <h1>Olá, <?php echo $usuario;?></h1>
      <h2>Esta é a página protegida e 100% acessível apenas com o loguin.</h2>
      <h2><a href="index.php">Retornar para a página livre e protegida.</a></h2>
      <?php if(isset($_SESSION["usuario"])){ ?>  
          <h3><?php echo (ucfirst($_SESSION["usuario"])); ?>, podes fazer o logout <a href="logout.php">aqui</a>.</h3>
      <?php } ?>
    </body>
  </html>
<?php } ?>