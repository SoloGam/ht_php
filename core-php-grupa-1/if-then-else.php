<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Salut!</title>
  </head>
  <body>
    <h1>Saluut!!!</h1>
    <?php
        $a = (date('H')<12) ? 'Buna dimineata!' : 'Buna ziua!';
        echo $a;
    ?>

  </body>
</html>
