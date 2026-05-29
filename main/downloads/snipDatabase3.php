<h3>Misclleneous Downloads</h3>
  <div>
   <?php
      /* Setting up Database Directory Location */
    $dir    = 'others/';
    $files12 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files12);
    array_shift($files12);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-xs btn-success' target='blank'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
            for($x = 0; $x < sizeof($files12);++$x){
                $download_value[$x] = "<a href='others.php?f=$files12[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
       echo "<table class='table mytable table-hover'><thead><tr><th>Sr. NO</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < sizeof($files12);++$x){
                 $path_parts = pathinfo($files12[$x]);
                        echo "<tr><td>" .$y. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                        ++$y;
                    }
                 echo "</table>";
        ?>
    
  </div>
