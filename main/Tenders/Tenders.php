<!DOCTYPE html>
<html>
<head>
	<title>AECS Notice</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	    <!--favicons -->
        <link rel="apple-touch-icon" sizes="114x114" href="../favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicons/favicon-16x16.png">
        <link rel="manifest" href="../favicons/manifest.json">
        <link rel="mask-icon" href="../favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="../favicons/favicon.ico">
        <meta name="msapplication-config" content="favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
     <style>
        *{
            padding:0;
            margin:0;
            font-size:14px;
            font-family: "AvenirNextLTPro-Regular", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        header{
            background-color: #2E64C3;
            padding:.8% 0%;
            color:#fff;
            text-align: center;
        }
        .notice-text{
            font-weight: bold;
            color:rgba(255,255,255,.7);
        }
        header span{
            font-weight: bold;
            color:rgba(255,255,255,.7);
        }
        main{
            text-align: center;

        }
        main .home-btn{
            font-family: inherit;
            opacity: .70;
            margin-top: 60px;
            margin-bottom: 20px;
            display: inline-block;
           border: 2px solid #4F8EF7;
            padding:.80% 4%;
            font-size: 130%;
            color:#2E64C3;
            font-weight: 500;
            letter-spacing: 2px;
            transition: all .2s ease-in;
        }
        main .home-btn:hover{
            background-color: #2E64C3;
            opacity: 1;
            color:#fff;
        }

         main a.home-link{
            color:#2E64C3;
            text-transform: uppercase;
            text-decoration: none;
        }
         main a.home-link:link,
         main a.home-link:visited{
            color:#fff;
        }
         main a.home-link:hover,
         main a.home-link:active{
             color:#fff;
        }
        .copyright-info{
            margin:0 auto;
            padding:.50% 0% 0% 0%;
            font-size:60%;
            font-weight: 300;
            color:#fff;
            width:100%;
            background-color:#333;
            text-align: center;
        }
        .copyright-info .copyright-text{
            opacity: .6;
        }
        #main-content{
            width:50%;
            margin: auto;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #2E64C3 !important;
        }
        .table{
            text-align: left;
        }
        .table > thead > tr > th {
          vertical-align: bottom;
          border-bottom: 2px solid #2E64C3;
        }
        .download-btn-style{
            text-decoration:none;
            font-style: none;
        }
        .download-btn-style:hover{
            text-decoration:none;
        }
        .download-btn-style:hover{
        }
     </style>
</head>
<body>

 <?php
            /* testing */
            $dir = "store/";
            $home = scandir($dir);
            array_shift($home);
            array_shift($home);
             $upDateOn = $dir.$home[0]; 
            /**/
    ?>

    <?php
    	// for($x = 0 ; $x < sizeof($home); $x++){
     //    		echo "<br>".$home[$x]."<br>"."time : ";
     //    		$dirFilename = $dir.$home[$x];
     //    		echo "Last modified: ".date("F d Y H:i:s.",fileatime($dirFilename));	
	    // 	}

    ?>

            <header>
                   AECS NARORA <?php echo date("Y");?> / <span>Tenders</span>  
            </header>


            <main>
                <!-- notice -->
            <div id="main-content">
                    <table class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Tenders</th>
                                <th>On Date</th>
                            </tr>
                        </thead>
                        <tbody>

                                    <h3>Newer</h3>   
                                <?php
                                    for($x = 0; $x < sizeof($home); $x++){
                                        $download = "";
                                          $dirFilename = $dir.$home[$x];

                                        echo "<tr><td><a class='download-btn-style' href='$dir$home[$x]'>" . $home[$x] . "</a></td><td>" .date("F d Y H:i:s.",fileatime($dirFilename))."</td>"."</tr>";
                                        if($x == 2){
                                            break;
                                        }
                                    }
                                        echo "<tr><td>" . "</td></tr>";
                                ?>

                        </tbody>
                    </table>
                <!--  #notice  -->    
                    
                        <h3>Previous</h3>
                <!-- OLD -->

                     <table class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Tenders</th>
                                <th>On Date</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    if($home >= 2){
                                               for($x = 3; $x < sizeof($home); $x++){
                                                    $download = "";
                                                      $dirFilename = $dir.$home[$x];
                                                    echo "<tr><td><a class='download-btn-style' href='$dir$home[$x]'>" . $home[$x] . "</a></td><td>" .date("F d Y H:i:s.",fileatime($dirFilename))."</td>"."</tr>";
                                                    if($x == 2){
                                                        break;
                                                }
                                        } 
                                    }
                                        echo "<tr><td>" . "</td></tr>";
                                ?>

                        </tbody>
                    </table>
                <!-- #OLD -->
            </div>



               <a class="home-link" href="../../index.php">
                    <div class="home-btn">
                                            home  
                    </div>
                </a>   
                <p class="page-info">
                    The notice here by are updated on date <?php echo date("F d Y H:i:s.",fileatime($upDateOn)); ?>
                </p>
            </main>

            <footer>
                <div class="copyright-info nav navbar-nav navbar-fixed-bottom">
                    <div class="copyright-text">
                            <p>Copyright 2017 &bull; AECS NARORA </p>               
                     </div>
                </div>
            </footer>
</body>
</html>