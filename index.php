<html>
   <head>
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="estilos.css">
   </head>
   <body>
      <div id="login">
         <form action= "usuarios.php" method="GET">
            <label>Usuario: </label>
            <input type="text" name="user" required/>
            <label>Contraseña: </label>
            <input type="password" name="password" required/><br><br>
            <input type="submit" value="Enviar"/>
         </form>
      </div>
   </body>
</html>