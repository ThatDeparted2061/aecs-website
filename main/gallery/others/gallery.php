<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery</title>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <style>
         *{
            padding:0;
            margin:0;
        }
        body {
            font-family: raleway;
            font-weight: 300;
            font-size:14px;
            background: -webkit-linear-gradient(90deg, #F25734 10%, #C91F31 90%);
            background: -moz-linear-gradient(90deg, #F25734 10%, #C91F31 90%);
            background: -ms-linear-gradient(90deg, #F25734 10%, #C91F31 90%);
            background: -o-linear-gradient(90deg, #F25734 10%, #C91F31 90%);
            background: linear-gradient(90deg, #F25734 10%, #C91F31 90%);
        }
        h1 {
            color: #fff;
            text-align: center
        }
        ul {
            list-style:none;
            margin: 0 auto;
            padding: 0;
            display: block;
            max-width: 900px;
            text-align: center;
        }
        ul li {
            display: inline-block;
            padding: 1px;
            margin:2px;
            color:#fff;
        }
        ul li img {
            display: block;
        }
        a {
            text-decoration: none;
        }
        header{
            margin:0 auto;
            text-align: center;
            padding:1.2% 0%;
        }
        header .heading{
            color:#fff;
            font-size:2.8em;
            font-weight: 200;
        }
        ul.nav li{
            padding:1% .5%;
        }
        ul.nav li a{
            text-decoration: none;
            color:#fff;
            font-weight: 100;
        }
         ul.nav li a:link,
         ul.nav li a:visited{
             font-weight: 200;
             color:#fff;
        }
         ul.nav li a:hover,
         ul.nav li a:active{
             font-weight: 400;
             color:#333;
        }
        #selected a{
            color:#333;
            font-weight: 400;
            
        }
    </style>
</head>
<body>
    <div class="col-sm-3">
    </div>
    <div class="clear">
    </div>
    <?php
            /* testing */
            $dir = "images/";
            $home = scandir($dir);
            array_shift($home);
            array_shift($home);
            /**/
            $d = 0;
    
    ?>
    <header>
       <p class="heading">Image Gallery</p>
        <ul class="nav">
            <li><a href="../../../index.php">Home</a></li>
            <li><a href="../gallery1/gallery.php">Sports</a></li>
            <li><a href="../gallery2/gallery.php">CCA</a></li>
            <li><a href="../gallery3/gallery.php">Anual Day</a></li>
            <li><a href="../NCC/gallery.php">NCC</a></li>
            <li id="selected"><a href="../others/gallery.php">Others</a></li>
        </ul>
    </header>
             <ul id="imageGallery row">
                <!-- check if more image exists-->
                <?php  for($x = 0; $x < sizeof($home);++$x){ ?>
                    <li><a href="<?php echo $dir.$home[$x];  ?>"><img src="<?php echo $dir.$home[$x];  $d++; $path_parts = pathinfo($home[$x]); ?>" width="100" alt="<?php echo $path_parts["filename"]; ?>"></a></li>  
                    <?php   } ?>
            </ul>
    <footer>
    </footer>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/app.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>










