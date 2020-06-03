<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title>fileExplo</title>
  </head>
  <body>
    <div class="main">
      <?php
      $dir = "C:\wamp64\www\innerwww\FileExplorer";
      if (is_dir($dir)){
        if ($dh = opendir($dir)){
          while (($file = readdir($dh)) !== false){
            echo $file . "<br>";
          }
          closedir($dh);
        }
      }
       ?>
    </div>
  </body>
</html>
