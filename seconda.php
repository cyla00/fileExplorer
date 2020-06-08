<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <div>
      <?php
      if (isset($_POST['dirs'])){
        $dirs = $_POST['dirs'];
        $subcont = scandir($dirs);
        foreach($subcont as $files){
          if(is_dir(realpath($files))){
            $path = realpath($files);
            $format = "<input class='filebtn' type='submit' name='dirs' value='$path'><br>";
            // $format = '<input class="filebtn" type="submit" name="dirs" value="' .realpath($files). '"><br>';
          }
          else{
          echo "<class=>$files<br>";
          }
        }
      }
      ?>
    </div>
  </body>
</html>
