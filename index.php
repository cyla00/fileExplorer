<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title></title>
  </head>
  <body>
    <?php require("creazione.php") ?>
    <div class="">
      <?php
      function simplePath($dir) {
        if($dir == '') return './';
          $dir = str_replace('//', '/', str_replace('\\', '/', $dir));
          if($dir[strlen($dir)-1] != '/') $dir .= '/';
          return $dir;
      }
      if(!empty($_GET['dir'])) $dir = simplePath($_GET['dir']);
       else $dir = './';
      $opendir = false;
      if(is_dir($dir)) $opendir = @opendir($dir);
       if(!$opendir) {
        $dir = './';
        $opendir = opendir('./') or die();
      }
      echo '<div style="float:right;"><a href="?dir=./">Root</a></div>';
      echo '<h1>'.$dir.'</h1>';
      if(substr($dir, 0, 2) == './') $dir = substr($dir, 2);
      while(($file = readdir($opendir)) !== false) {
        if(is_file($dir.$file)) {
          echo '<div class="filecontainer"><img class="imgfile" src="./img/document.png" alt="" width="19" height="19"><a class="dirbtn" href="'.$dir.$file.'" title="'.$dir.$file.'">'.$file.'</a></div><br/>', "\n";
        }
        elseif(is_dir($dir.$file) && $file != '.') {
          echo '<div class="filecontainer"><img class="imgfile" src="./img/folder.png" alt="" width="19" height="19"><a class="dirbtn" href="?dir='.urlencode($dir.$file).'" title="'.$dir.$file.'">'.$file.'</a></div><br/>', "\n";
        }
      }
      closedir($opendir);
      ?>
    </div>
  </body>
</html>
