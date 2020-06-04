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
        $dir = getcwd();
        $content = scandir($dir);
        foreach($content as $file){
          $size = filesize($file);
          $type = filetype($file);
          $owner = fileowner($file);
          echo "<br>".$file." ".$size." bytes, ".$type.", by ".$owner;
        }
       ?>
    </div>
  </body>
</html>
