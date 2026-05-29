<html>
<head>
    <title></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        #main{
            font-family:monospace;    
            border-left:#fc3;
            border-radius:3px;
            border-left-width: 100%
        }
        #top{
            background:#55a79a;  
            width:100%;
            color:#fff;
        }
        #top-in{
           padding:1.5% 1.5% 1.5% 0%; 
        }
        #top-below{
            background:#0275d8;
            width:100%;
            padding:0.5% 0% 0.5% 2%;
        }
        .table thead {
            background-color: #55a79a;
            color:#fff;
            
        }
        .mytable{
            font-size:.8em;
            border-bottom: 1px solid #777;
        }
        #heading{
            text-align: center;
        }
        .jumbotron{
            background:#fff;
            padding:.4em;
        }
        #footer{
            font-size:0.85em;
            font-family: monospace;
        }
        
    </style>
</head>
<body>
    
    <header id='top'>
        <div class="container-fluid">
            <div id="top-in" class="row">
                    <div class="col-sm-3">
                         <a href="../index.php"><img src="images/AECS-LOGO2.png" width="100%"></a>
                </div>
                <div class="col-sm-9">
                </div>
            </div>
        </div>
            <div id="top-below">
                <div class="row">
                     <div class="col-xs-3 pull-left">
                             Currently Under Update <?php ?>
                    </div>
                    <div class="col-xs-3 pull-left">
                        <a href='../downloads/downloads.php' class='btn btn-xs btn-primary'>Downloads</a>
                    </div>
                </div>
             </div>
    </header>
    <div class="container" id="main">
        <div class="row">
            <div class="jumbotron col-sm-12">   
                <h2 id="heading">Result</h2>
            </div>
        </div>
         <?php
            /**/
              /* Setting up Database Directory Location */
                $dir    = 'store/';
                $home = scandir($dir);
                $files2 = scandir($dir, 1);
                array_shift($home);
                array_shift($home);
             $downStyle = "<div class='btn btn-xs btn-success'>Download</div>";
            $download_value = array();
            $x = 0;
            echo "<br>";
               // print_r($files2);

            echo "<br>";
            
            for($x = 0; $x < sizeof($home);++$x){
                $download_value[$x] = "<a href='download.php?f=$home[$x]'>$downStyle<br></a>";
            }
            $x = 0;
            $y = 1;
        
            $c = sizeof($home);
        echo "<table class='mytable table table-condensed table-responsive table-hover'><thead><tr><th>Sr.No</th><th>Result(<i style='color:#fc3;'>Board</i>)</th><th>Download</th><th>View Online</th></tr></thead>";
             for($j = 1; $j < $c; $j++){
                    //output the data
                $d = $j + 1;
                  $path_parts = pathinfo($home[$j]);
                  $address = 'store/' . $path_parts['filename'] . '.' . $path_parts['extension'];
                        echo "<tr><td>" .$d. "</td><td>".$path_parts['filename']."</td><td>" . $download_value[$j]."</td><td>" . "<a target='blank' href='$address'>view</a>" . "</td></tr>";
                   }
                 echo "</table>";
       
        ?>
        
    </div>
    
    
    
    <!--#header-->
    <footer class="navbar navbar-default navbar-fixed-bottom ">
        <div class="container">
                <p id="footer" class="navbar-text pull left">
                    AECS NARORA &bull; COPYRIGHT 2017 
                </p>
                <a class="navbar-btn btn-sm btn-primary pull-right" href="../../index.php">Home</a>
        </div>
    </footer>
    
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/jquery.min.js"></script>
    
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>