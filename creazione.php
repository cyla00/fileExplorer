
<div class="">
  <div class="creazione">
    <form class="creazioneForm" action="prima.php" method="post">
        <label for="Fname"><img src="img/document.png" alt="fileicon" width='17' height='17'></label>
        <input type="text" name="filename" value="">
        <label for=""><img src="img/folder.png" alt="foldericon" width='17' height='17'></label>
        <input type="text" name="foldername" value="">
      <input type="submit" name="create" value="Crea">
      <?php
      $submit_listener = isset($_POST['create']);
      if(isset($_POST['create'])){
        if($filename_listener = $_POST['filename']){
          if(file_exists($filename_listener)){
            echo "the file exists";
          }
          else{
            touch($filename_listener);
          }
        }
        if($foldername_listener = $_POST['foldername']){
          mkdir($foldername_listener);
        }
      }
       ?>
    </form>
  </div>
</div>
