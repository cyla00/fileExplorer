<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title>fileExplo</title>
  </head>
  <body>
    <div class="lista">
      <form class="listaDir" action="seconda.php" method="post">
        <?php
        $dir = getcwd();
        $content = scandir($dir);
        foreach($content as $files){
          if(is_dir(realpath($files))){
            $format = '<input class="filebtn" type="submit" name="dirs" value="' . realpath($files) . '"><br>';
            echo $format;
          }
          else{
          echo "<p class='filebtn'>$files</p><br>";
          }
          if(!is_dir(realpath($files))){
            $display = '<input class="filebtn" type="submit" name="dirs" value="' . file_get_contents(realpath($files)) . '"><br>';
            echo $display;
          }
        }
         ?>
      </form>
    </div>
  </body>
</html>
