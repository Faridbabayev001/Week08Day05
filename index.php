<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <style media="screen">
   </style>
   <body>
      <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3 class="title">Qeydiyyat</h3>
                    <form method="post" action="run_upload.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Adı">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="location" placeholder="Yer adı">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="Photo">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-default pull-right" type="submit" value="Yukle" name="Submit">
                        </div>
                    </form>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Yükləyən</th>
                                    <th>Yer</th>
                                    <th>Şəkil</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                 $Files = fopen("uploaded.txt","a+") or die ("Fayl yuklenmeyib");
                                      $FileList = [];
                                         while (!feof($Files)) {
                                            $FileList[] = fgets($Files);
                                         };
                                    fclose($Files);
                                    $FileList = explode("@@@##@@@",file_get_contents("uploaded.txt"));


                                    foreach ($FileList as $key => $value) {
                                       $FileList[$key] = explode("|",$value);
                                    };

                                    foreach ($FileList as $value) {
                                       echo "<tr>";
                                       if (isset($value[1])) {
                                          echo "<td>$value[0]</td><td>$value[1]</td><td><img src='uploads/$value[2]' style='width:100px;height:100px;'></td>";
                                       }

                                       echo "</tr>";
                                    }
                               ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
   </body>
</html>
