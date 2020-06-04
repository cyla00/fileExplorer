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
          echo ("<br><button class='filebtn'>$file $type</button>");
          if(is_dir($file)){
            $subdir = scandir($file);
            foreach($subdir as $subfile){
              echo ("<div id='subbtn'><br><a id='link' href='https://github.com/cyla00'>$subfile</a></div>");
            }
          }
        }
       ?>
    </div>
  </body>
</html>
