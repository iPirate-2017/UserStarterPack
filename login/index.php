<?php
  require('utils/request.php');
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     if(!userLogged()): ?>
      <form action="utils/request.php" method="post">
          <p>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email"/>
            <br><br>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password"/>

            <input type="submit" value="Valider"/>
          </p>
      </form>
    <?php endif; ?>
  </body>
</html>
