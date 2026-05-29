  <h3>Class 5</h3>
  <div>
 <?php
      /* Setting up Database Directory Location */
    $dir    = 'class5/';
    $files5 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files5);
    array_shift($files5);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-xs btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
            for($x = 0; $x < sizeof($files5);++$x){
                $download_value[$x] = "<a href='d5.php?f=$files5[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
       echo "<table class='mytable table table-condensed table-responsive table-hover'><thead><tr><th>Sr.No</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < sizeof($files5);++$x){
                $path_parts = pathinfo($files5[$x]);
                        echo "<tr><td>" .$y. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                        ++$y;
                    }
                 echo "</table>";
                
        ?>
  </div>
    <h3>Class 4</h3>
  <div>
    <?php
      /* Setting up Database Directory Location */
    $dir    = 'class4/';
    $files4 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files4);
    array_shift($files4);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-xs btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
            for($x = 0; $x < sizeof($files4);++$x){
                $download_value[$x] = "<a href='d4.php?f=$files4[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
       echo "<table class='mytable table table-condensed table-responsive table-hover'><thead><tr><th>Sr.No</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < sizeof($files4);++$x){
                $path_parts = pathinfo($files4[$x]);
                        echo "<tr><td>" .$y. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                        ++$y;
                    }
                 echo "</table>";
                
        ?>
    
  </div>
  <h3>Class 3</h3>
  <div>
    <?php
      /* Setting up Database Directory Location */
    $dir    = 'class3/';
    $files3 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files3);
    array_shift($files3);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-xs btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
            for($x = 0; $x < sizeof($files3);++$x){
                $download_value[$x] = "<a href='d3.php?f=$files3[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
       echo "<table class='mytable table table-condensed table-responsive table-hover'><thead><tr><th>Sr.No</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < sizeof($files3);++$x){
                $path_parts = pathinfo($files3[$x]);
                        echo "<tr><td>" .$y. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                        ++$y;
                    }
                 echo "</table>";
                
        ?>
    
  </div>
   <h3>Class 2</h3>
  <div>
      <?php
      /* Setting up Database Directory Location */
    $dir    = 'class2/';
    $files2 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files2);
    array_shift($files2);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-xs btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
            for($x = 0; $x < sizeof($files2);++$x){
                $download_value[$x] = "<a href='d2.php?f=$files2[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
       echo "<table class='mytable table table-condensed table-responsive table-hover'><thead><tr><th>Sr.No</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < sizeof($files2);++$x){
                 $path_parts = pathinfo($files2[$x]);
                        echo "<tr><td>" .$y. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                        ++$y;
                    }
                 echo "</table>";
                
        ?>
  </div>
      <h3>Class 1</h3>
  <div>
      <?php
      /* Setting up Database Directory Location */
    $dir    = 'class1/';
    $files1 = scandir($dir);
    $files2 = scandir($dir, 1);
    array_shift($files1);
    array_shift($files1);
      ?>
       <?php
            /**/
             $downStyle = "<div class='btn btn-xs btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
            for($x = 0; $x < sizeof($files1);++$x){
                $download_value[$x] = "<a href='d1.php?f=$files1[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
       echo "<table class='mytable table table-condensed table-responsive table-hover'><thead><tr><th>Sr.No</th><th>File Name</th><th>Download</th></tr></thead>";
            for($x = 0; $x < sizeof($files1);++$x){
                 $path_parts = pathinfo($files1[$x]);
                        echo "<tr><td>" .$y. "</td><td>".$path_parts['filename']. '<td>'.$download_value[$x]."</td></tr>";
                        ++$y;
                    }
                 echo "</table>";
                
        ?>
  </div>

    