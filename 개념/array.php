<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $fruits = array('apple','banana');
    echo $fruits[1].'<br>';
    var_dump(count($fruits));
    array_push($fruits,'orange');
    var_dump($fruits);
    ?>
  </body>
</html>
