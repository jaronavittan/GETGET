<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
   
      <form action="site.php" method="get">
        Password: <input type="password" name="password"> <br>
        <input type="submit">
      </form>
      <br><br>

      <?php
        echo $_GET["password"];
      ?>    
  </body>
</html>
