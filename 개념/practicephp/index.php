<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="./index.php">WEB</a></h1>
    <ol>
      <?php
        $list = scandir('./data');
        $i = 0;
        while($i <count($list)){
          if($list[$i] != '.'){
            if($list[$i] != '..'){
              echo "<li<a href =\"./index.php?id=$list[$i]\">$list[$i]</li>";
            }
          }
        }
       ?>
    </ol>
  </body>


</html>
