<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Buna</title>
  </head>
  <body>
    <h1>Buna!</h1>
    <p>
      <?php
       if (is_numeric($_GET['a']) && is_numeric($_GET['b']))
        echo $_GET['a'] + $_GET['b'];
       else
        echo "Cel putin un parametru nu este numar";
       ?>
    </p>

  </body>
</html>
