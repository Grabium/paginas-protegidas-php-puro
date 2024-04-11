<?php
  session_start();
?>
<html>
  <head>
    <title>index</title>
  </head>
  <body>
    <h1>Pequeno Teste Com Loguin</h1>
    <h3>Página livre que testa se está protegida.</h3>
    <h2><a href="protegida.php">Ir á página 100% protegida</a></h2>
    </hr>
    <?php if(isset($_SESSION["usuario"])){ ?>  
        <h3><?php echo (ucfirst($_SESSION["usuario"])); ?>, podes fazer o logout <a href="logout.php">aqui</a>.</h3>
    <?php } ?>

   
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>

  
</html>