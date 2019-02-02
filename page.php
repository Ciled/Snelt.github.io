<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
if (isset($_COOKIE["username"]))
  echo "Welcome " . $_COOKIE["username"] . "!<br>";
else
  echo "Welcome guest!<br>";
?>
  </body>
</html>
