<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>function</h1>
    <?php
    $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit,

    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php
    echo nl2br($str); // html은 개행태그가 없으면 줄바꿈이 일어나지 않는데 nl2br()을 사용하면 개행이 된 문자열을 그대로 사용할수있다.
    ?>
  </body>
</html>
