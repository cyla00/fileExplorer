<?php
require "./index.php"
function scala(){
  $dir = getcwd();
  $content = scandir($dir);
  foreach($content as $item){
    if(is_file($item)){
      echo "$item <br>";
    }
  }
}
 ?>
