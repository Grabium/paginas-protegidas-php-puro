<html>
  <head>
    <title>Formulário</title>
  </head>
  <body>
    <h1>Login</h1>
    <?php if(isset($_GET["erro"])){
      echo ("</hr><h2>".$_GET["erro"]."</h2></hr>");
    } ?>
    <h2>Mas antes, faça o loguin:</h2>
    <form action="login.php" method="post">
      <p>Loguin:<input type="text" name="login"/></p>
      <p>Senha: <input type="password" name="senha"/></p>
      <input type="submit" value="Enviar"/>
      
    </form>
    
  </body>
</html>