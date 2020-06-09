<form class="listaDir" action="seconda.php" method="post">
  <?php
  $dir = getcwd();
  $content = scandir($dir);
  foreach($content as $files){
    $path = realpath($files);
    if($path && is_dir($path)){
      $format = "<img src='img/folder.png' width='20' height='20'><input class='filegrahp' type='submit' name='Folder_Input' value='$files'><br>";
      echo $format;
    }
    if($path && is_file($path)){
      $format = "<img src='img/document.png' width='20' height='20'><input class='filegrahp' type='submit' name='File_Input' value='$files'><br>";
      echo $format;
    }
  }
   ?>
</form>
