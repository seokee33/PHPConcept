<?php
require('lib/print.php');
 ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php print_title(); ?></title>
  </head>
  <body>
<ol>
  <h1><a href="index.php">WEB</h1>
  <?php
    print_list();
  ?>
</ol>
<a href="create.php">create</a>
<form action="create_process.php" method="post">
  <p>
    <input type="text" name="title" placeholder="Title">
  </p>
  <p>
    <textarea name = "description"
              placeholder="Description">
    </textarea>
  </p>
  <p>
    <input type="submit">
  </p>
</form>
<?php
require('view/bottom.php');
 ?>
