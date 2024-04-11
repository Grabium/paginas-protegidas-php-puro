<?php
session_start();
$_SESSION = array();
session_destroy();
//header("Location: index.php", true,301);
?>

<html>
  <head>
    <title>Logout</title>
  </head>
  <body>
      <h1>Logout bem sucedido!</h1>
      <h2><a href="index.php">Retornar</a></h2>
  </body>
</html>