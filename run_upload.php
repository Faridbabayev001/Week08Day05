<?php
$AdSoyad = $_POST["name"];
$Yer = $_POST["location"];
   if (!empty($AdSoyad)&&!empty($Yer)) {
      $Files = fopen("uploaded.txt","a+");
      $target_dir = "uploads/";
         $target_file = date('dmYGis'). basename($_FILES["Photo"]["name"]);
            move_uploaded_file($_FILES["Photo"]["tmp_name"],"uploads/".$target_file);
      $txt = $AdSoyad."|".$Yer."|".$targetdir.$target_file ."@@@##@@@";
         fwrite($Files, $txt);
            fclose($Files);
         header("Location:index.php");
     }

      header("Location:index.php");




 ?>
