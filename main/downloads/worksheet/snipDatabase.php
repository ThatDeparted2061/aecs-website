<!--   Class 6 to 12 Databases    -->
  <h3>Class 12</h3>
  <div class="box">
        <?php
      /* Setting up Database Directory Location */
    $dir    = 'class12/';
    $files12 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files12);
    array_shift($files12);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-sm btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
    
            for($x = 0; $x < sizeof($files12);++$x){
                $download_value[$x] = "<a href='d12.php?f=$files12[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
        $c = sizeof($files12);
       echo "<table  class='mytable table table-condensed table-responsive'><thead><tr><th>Sr. NO</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < $c;++$x){
                $d = $x +1;
                 $path_parts = pathinfo($files12[$x]);
                        echo "<tr><td>" .$d. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                    }
                 echo "</table>";
        ?>
    
  </div>
    <h3>Class 11</h3>
  <div>
     <?php
      /* Setting up Database Directory Location */
    $dir    = 'class11/';
    $files11 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files11);
    array_shift($files11);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-xs btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
            for($x = 0; $x < sizeof($files11);++$x){
                $download_value[$x] = "<a href='d11.php?f=$files11[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
       $c = sizeof($files11);
       echo "<table  class='mytable table table-condensed table-responsive table-hover'><thead><tr><th>Sr.No</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < $c;++$x){
                $path_parts = pathinfo($files11[$x]);
                        echo "<tr><td>" .$y. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                    }
                 echo "</table>";
                
        ?>
    
  </div>
  <h3>Class 10</h3>
  <div>
     <?php
      /* Setting up Database Directory Location */
    $dir    = 'class10/';
    $files10 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files10);
    array_shift($files10);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-xs btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
            for($x = 0; $x < sizeof($files10);++$x){
                $download_value[$x] = "<a href='d10.php?f=$files10[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
       echo "<table class='mytable table table-condensed table-responsive table-hover'><thead><tr><th>Sr.No</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < sizeof($files10);++$x){
                 $path_parts = pathinfo($files10[$x]);
                        echo "<tr><td>" .$y. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                        ++$y;
                    }
                 echo "</table>";
                
        ?>
    
  </div>
   <h3>Class 9</h3>
  <div>
  <?php
      /* Setting up Database Directory Location */
    $dir    = 'class9/';
    $files9 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files9);
    array_shift($files9);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-xs btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
            for($x = 0; $x < sizeof($files9);++$x){
                $download_value[$x] = "<a href='d9.php?f=$files9[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
       echo "<table class='mytable table table-condensed table-responsive table-hover'><thead><tr><th>Sr.No</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < sizeof($files9);++$x){
                $path_parts = pathinfo($files9[$x]);
                        echo "<tr><td>" .$y. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                        ++$y;
                    }
                 echo "</table>";
                
        ?>
  </div>
      <h3>Class 8</h3>
  <div>
    <?php
      /* Setting up Database Directory Location */
    $dir    = 'class8/';
    $files8 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files8);
    array_shift($files8);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-xs btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
            for($x = 0; $x < sizeof($files8);++$x){
                $download_value[$x] = "<a href='d8.php?f=$files8[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
       echo "<table class='mytable table table-condensed table-responsive table-hover'><thead><tr><th>Sr.No</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < sizeof($files8);++$x){
                 $path_parts = pathinfo($files8[$x]);
                        echo "<tr><td>" .$y. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                        ++$y;
                    }
                 echo "</table>";
                
        ?>
  </div>
     <h3>Class 7</h3>
  <div>
    <?php
      /* Setting up Database Directory Location */
    $dir    = 'class7/';
    $files7 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files7);
    array_shift($files7);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-xs btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
            for($x = 0; $x < sizeof($files7);++$x){
                $download_value[$x] = "<a href='d7.php?f=$files7[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
       echo "<table class='mytable table table-condensed table-responsive table-hover'><thead><tr><th>Sr.No</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < sizeof($files7);++$x){
                $path_parts = pathinfo($files8[$x]);
                        echo "<tr><td>" .$y. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                        ++$y;
                    }
                 echo "</table>";
                
        ?>
  </div>
       <h3>Class 6</h3>
  <div>
  <?php
      /* Setting up Database Directory Location */
    $dir    = 'class7/';
    $files6 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files6);
    array_shift($files6);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-xs btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
            for($x = 0; $x < sizeof($files6);++$x){
                $download_value[$x] = "<a href='d6.php?f=$files6[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
       echo "<table class='mytable table table-condensed table-responsive table-hover'><thead><tr><th>Sr.No</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < sizeof($files6);++$x){
                $path_parts = pathinfo($files8[$x]);
                        echo "<tr><td>" .$y. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                        ++$y;
                    }
                 echo "</table>";
                
        ?>
  </div>
        
<!-- class 6 to 12 Databases   -->