<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title></title>
  </head>
  <body>
    <?php require('creazione.php') ?>
    <div>
      <?php
      if (isset($_POST['Folder_Input'])){
        $dirs = $_POST['Folder_Input'];
        $subcont = scandir($dirs);
        foreach($subcont as $sub_file_content){
          $is_folder = is_dir($sub_file_content);
          $is_file = is_file($sub_file_content);
          $format = "<img src='img/document.png' width='20' height='20'><input class='filegrahp' type='submit' name='subfiles' value='$sub_file_content'><br>";
          switch($format){
            case $is_folder:
            $format = "<img src='img/folder.png' width='20' height='20'><input class='filegrahp' type='submit' name='subfiles' value='$sub_file_content'><br>";
            case $is_file:
            $format = "<img src='img/document.png' width='20' height='20'><input class='filegrahp' type='submit' name='subfiles' value='$sub_file_content'><br>";
          }
          echo $format;
        }
      }
      if(isset($_POST['File_Input'])){
        $File_listener = $_POST['File_Input'];
        //add display file content ##
      }
      ?>
    </div>
  </body>
</html>
