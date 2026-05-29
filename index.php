webs<!DOCTYPE html>
<html land="en">
<head>
        <!--Meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="abstract" content="Atomic Energy Central School, Narora. AECS, Narora">
         <meta  name="description" content="AECS, Narora is located in the Anu Vihar Township Narora which is situated on the bank of river Ganges, in district Bulandshahar, U.P. Atomic Energy Central School, Narora runs in two buildings. Primary section  secondary section. e magazine. e-magazine">
        <!---->
    
        <!--CDN FONTS LINKS Missing-->
            <link href="https://fonts.googleapis.com/css?family=Lato:200,300,400,400i,500,700" rel="stylesheet">
            
        <!-- Missing -->
    <!-- css & js -->
    
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <!-- image slider css -->
        <link rel="stylesheet" href="./css/swiper.min.css">
        <link rel="stylesheet" href="./css/image-slider.css">

<!--        <link rel="stylesheet" type="text/css" href="css/queries.css">-->
        
        <title>AECS Narora</title>
    
        <!--favicons -->
        <link rel="stylesheet" href="css/navigation.css">
        <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
        <link rel="manifest" href="images/favicons/manifest.json">
        <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="images/favicons/favicon.ico">
        <meta name="msapplication-config" content="images/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    <!-- ######  -->
    <style>

.container{
    background-color: transparent;
    box-shadow: 10 10 5 #333;
    grid-column: 1 / -1;
    height : 20vh;
    width : 70vw;
    position: absolute;
    left: 0;
    bottom : 20%;
    margin: 0 4%;
}

.swiper-container {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 50px;
}
.swiper-slide {
  background-position: center;
  background-size: cover;
  width: 300px;
  height: 300px;
}


        /* Screens bigger than 1200px  */
@media only screen and (max-width:1200px){}
    
/* Small tablet to big tablet */
@media only screen and (max-width:1023px){
   /*  Media query for quote typer js   */

   h1#second-id{
        font-size : 3.4rem;
    }

    /*####################  Media query for quote typer js  ###################### */
    .container{
        height : 14vh;
        width : 58vw;
        margin: 0 4%;
    }
    .secondary-nav{
        width:40%;
        }
    
    .form-box{
        top:0;
        right:0;
        position: absolute;
        z-index: 10;
        width:60%;
        padding:2% 3%;
        background-color: rgba(255, 255, 255, 0.7);
        height:100%;
        text-align: center;
    }
}

/* Phones to small tablets */
@media only screen and (max-width:767px){
    /*  Media query for quote typer js   */

    h1#second-id{
        font-size : 3rem;
    }

    /*####################  Media query for quote typer js  ###################### */

    .container{
        height : 18vh;
        margin: 0 4%;
        width : 100vw;
    }

/*  media query for navigation  */
.navigation__link:link, .navigation__link:visited {
      font-size: 1.5rem;
      font-weight: 300;
      padding: .4rem .41rem;
    }
    /* ###############Media query for navigation##################   */

    #form{
        width:100%;
        display: block;
        padding:3% 4%;
    }
    .map{
        display:block;
        height:500px;
    }
    .form-box{
        display: relative;
        width:300px;
        padding:1% 1%;

    }
    .mobile-nav-icon{
        display: inline-block;
    }
     .secondary-nav{
        display:none;
    }
    .min-nav{
        display:block;
    }
#navigation-links{
        float:left;
    }
    .link-names{
        float:left;
    }
    #forms-navigation{
        float:right;
        text-align: left;
    }
    #forms-docs-links{
        text-align: left;
        float:right;
    }
    #navigation-links h2{
        font-size:160%;
        line-height: 30px;
    }
     #navigation-links li a{
        font-size:140%;
    }
    #forms-docs-links ul {
    padding:0% 2%;;
    }
    #forms-docs-links ul li{
        margin:1% 0%;
    }
    #menu li {
            padding:1% 2%;
    }
    #menu li i {
        font-size:150%;
    }
}

/* Small phone from 0 to 480 px  */
@media only screen and (max-width:480px){


    h1#second-id{
        font-size : 2rem;
    }

/*  media query for navigation  */
    .navigation__link:link, .navigation__link:visited {
      font-size: .8rem;
      font-weight: 300;
      padding: .2rem .4rem;
    }

    .main-nav{
        display:none;
    }
    nav{
        display : none;
    }
    form .span-2-of-3 {
        width: 66.13%; 
    }
    footer{
        margin:3% 0%;
    }

     form .span-1-of-3 {
        width: 32.26%; 
    }
    #form{
        width:100%;
        display: block;
        padding:6% 8%;
        margin:5%;
    }
    .secondary-nav{
        display:none;
    }
    .min-nav{
        display:block;
    }
    .testimonials h2{
        font-size:220%; 
        margin-bottom:20px;
    }
    .testimonials-header{
        padding-left:20px;
        padding-right:20px;
        box-sizing: border-box;
    }
     .testimonials-header p{
         font-size:100%;
    }
    .testimonials-carousel li blockquote{
        font-size:75%;
    }
    .hero-text-box h1{
        font-size:250%;
    }
    #navigation-links{
        float:left;
    }
    .link-names{
        float:left;
    }
    #forms-navigation{
        float:right;
        text-align: left;
    }
    #forms-docs-links{
        float:right;
        text-align: left;
    }
    #navigation-links h2{
        font-size:160%;
        line-height: 30px;
    }
     #navigation-links li a{
        font-size:140%;
    }
    #forms-docs-links ul {
    padding:0% 2%;;
    }
    #forms-docs-links ul li{
        margin:1% 0%;
    }
    #menu li {
            padding:1% 2%;
    }
    #menu li i {
        font-size:150%;
    }
    
}
        #form{
/*            display:"none";*/
        }
    </style>
</head>
<body>

<!-- 
<div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item"><a class="navigation__link" href="main/downloads/downloads.php">Downloads</a></li>
                <li class="navigation__item"><a class="navigation__link" href="main/result/results.php">Results</a></li>
                <li class="navigation__item"><a class="navigation__link" href="main/tc/tc.php">Results</a></li>
                <li class="navigation__item"><a class="navigation__link" href="main/gallery/gallery1/gallery.php">Gallery</a></li>
                <li class="navigation__item"><a class="navigation__link" href="main/notice/notice.php">Notice</a></li>
                <li class="navigation__item"><a class="navigation__link" href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=897239" TITLE="Follow the below steps:
Click the check box stating I have read and accepted the terms and conditions stated above
Select Payment Category
Enter all the fields including amount payable and follow the instructions.">Fee Payment(New)</a></li>
                </ul>
        </nav>
    </div> -->



    <!--HEADER SECTION-->
    <header class="sticky">
        <img src="images/logo.png">
        <nav>
            <ul id="menu" class="main-nav">
                
                <li><a href="main/downloads/downloads.php"><i class="icon ion-android-download"></i><br>Downloads</a></li>
                <li><a href="main/result/results.php"><i class="icon ion-ios-paper"></i><br>Results</a></li>
                <li><a href="main/tc/tc.php"><i class="icon ion-clipboard"></i><br>TC Issued</a></li>
                <li><a href="main/gallery/gallery1/gallery.php"><i class="icon ion-android-image"></i><br>Gallery</a></li>
                <li><a href="main/notice/notice.php"><i class="icon ion-document"></i><br>Notice</a></li>
                <li><a href="main/Tenders/Tenders.php"><i class="icon ion-document"></i><br>Tenders</a></li>
                <li><a href="main/School_Info/School_Info.php"><i class="icon ion-clipboard"></i><br>Mandatory Public Disclosure</a></li>
                <li><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=897239" TITLE="Follow the below steps:
Click the check box stating I have read and accepted the terms and conditions stated above
Select Payment Category
Enter all the fields including amount payable and follow the instructions."><i class="icon ion-cash"></i><br>Fee Payment (New)</a></li>
                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSe38svlZvxdUGGXTyvGj4PbSgpwaEEVhKWf8Wzw37pRMyHFgg/viewform?usp=sf_link" target="_blank" TITLE="Submission of signed Application Form & Fee Receipt for DAE Wards
                    Last date for submission : 20 March 2022
                    { Uploading of duly signed Application form 
                     & 
                    payment receipt of SBI Collect by parents : 28.02.2022 to 20.03.2022"><i class="icon ion-cash"></i><br>Submission of signed Application Form & Fee Receipt for DAE Wards (Session 2022-23)</a></li>
                <li><a href="main/gallery/others/gallery.php"><i class="icon ion-android-image"></i><br>International Day of Yoga 2022</a></li>
            </ul>
<!--
            <div id="mobile-nav-display">
               <a style="float:right;margin-top:20px;cursor:pointer;" id="remove"><i class="ion-navicon-round" style="font-size:200%;"></i></a>
            </div>
-->
        </nav>
        <!--Language Preferences-->






<!-- 
            <a class="logo-btn">
    <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

 -->










            <!-----------------Language Preferences-->
            </a>
    </header>
    <div class="clearfix">
    </div>
    <!--# HEADER SECTION #-->
    <!-- HERO -->
    <section class="section-hero">

    <!-- Image Slider  -->
                

    <?php
            $pre = "main/gallery";
            $dirs = array(
                $pre."/gallery1/images/", 
                $pre."/gallery2/images/", 
                $pre."/gallery3/images/", 
                $pre."/NCC/images/", 
                $pre."/others/images/", 
            );

            // gallery 1 
            $gallery1 = scandir($dirs[0]);
            array_shift($gallery1);
            array_shift($gallery1);
               // gallery 2
               $gallery2 = scandir($dirs[1]);
               array_shift($gallery2);
               array_shift($gallery2);
                  // gallery 1 
            $gallery3 = scandir($dirs[2]);
            array_shift($gallery3);
            array_shift($gallery3);
               // gallery 1 
               $gallery4 = scandir($dirs[3]);
               array_shift($gallery4);
               array_shift($gallery4);
                  // gallery 1 
            $gallery5 = scandir($dirs[4]);
            array_shift($gallery5);
            array_shift($gallery5);


            $scannedDirs = array();
            $imageArray = array();
            // looping dirs    
            foreach($dirs as $dir){
                array_push($scannedDirs, scandir($dir));
                // echo "<h4>". scandir($dir)[2] ."</h4>";
                // if (file_exists(scandir($dir)[0])) {
                //     /// main logic here 
                //     echo "<h4>". "The file exists" ."</h4>";
                // } 
            }

              for($x = 0; $x < sizeof($gallery1) && $x <= 1 ;++$x){ 
                array_push($imageArray,$dirs[0].$gallery1[$x]);
              }
              for($x = 0; $x < sizeof($gallery2) && $x <= 1;++$x){ 
                array_push($imageArray,$dirs[1].$gallery2[$x]);
              }
              for($x = 0; $x < sizeof($gallery3) && $x <= 1;++$x){ 
                array_push($imageArray,$dirs[2].$gallery3[$x]);
              }
              for($x = 0; $x < sizeof($gallery4) && $x <= 1;++$x){ 
                array_push($imageArray,$dirs[3].$gallery4[$x]);
              }
              for($x = 0; $x < sizeof($gallery5) && $x <= 1;++$x){ 
                array_push($imageArray,$dirs[4].$gallery5[$x]);
              }

            // $home = scandir($dirs);
            // array_shift($home);
            // array_shift($home);
            /**/
            $d = 0;
    ?>

    <div class="container">
                <!-- Swiper -->
                <div class="swiper-container-self" style="margin-left: -20%;">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php  foreach($imageArray as $image){  ?>
                            <img  style="background-size: cover;" class="swiper-slide" class="self-image" 
                                src="<?php echo $image ?>"/>
                        <?php   } ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
                    <!-- end swiper container -->
                </div>
                <!-- end swiper container self -->
            </div>

              <!-- ###################Image Slider##################  -->


        <div class="row hero">
             <div class="hero-text-box">
                  <h1 class="typer" id="second-id" data-delay="40" data-words=" Fortune Favours Brave, Education makes us humble"
                  data-colors="#fff,#fff,#fff"></h1>
                <!--<a class="btn btn-full" href="#">I&apos;m hungary</a>
                <a class="btn btn-ghost" href="#">show me more</a>-->
            </div>
            <!-- <div class="hero-text-bottom">
                <a href="main/notice/notice.php"><h2 class="cursor"  data-cursorDisplay="View Notice" data-owner="some-id"><i class="ion-ios-android"></i></h2></a>
            </div> -->

        </div>
        <!-- secondary nav -->
        <div class="secondary-nav">
            <div class="members-nav">
                  <i class="ion-android-people profile big-font"></i>
                <ul class="people-navigator">
                    <li><a href="#"><i class="ion-ios-circle-filled"></i></a></li>
                    <li><a href="#"><i class="ion-ios-circle-filled"></i></a></li>
                    <li><a href="#"><i class="ion-ios-circle-filled"></i></a></li>
		    <li><a href="#"><i class="ion-ios-circle-filled"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
          
            <ul class="people-carousel">
                 <li>
                   <div class="member-photo">
                        <img src="images/principle.png">
                    </div>
                    <div class="member-info">
                        <h2>Principal</h2>
                        <p>Mahendra Kumar Meena<br>AECS Narora Bulandshahr</p>
                    </div>
                </li> 
                <li>
                   <div class="member-photo">
                        <img src="images/vice.png">
                    </div>
                    <div class="member-info">
                        <h2>Vice Principal</h2>
                        <p>Deshraj Kishana</p>
                    </div>
                </li>
                <li>
                   <div class="member-photo">
                        <img src="images/hm.png" width="141" height="140">
                    </div>
                    <div class="member-info">
                        <h2>Rajendran P R</h2>
                        <p>Head Master</p>
                    </div>
                </li>
                <li>
                   <div class="member-photo">
                        <img src="images/member.png">
                    </div>
                    <div class="member-info">
                        <h2>Website Admin</h2>
                        <p>Ashok Kumar Rao</p>
                        <p>PGT Computer Science</p>
                    </div>
                </li> 
               
            </ul>
            <div class="separator">
                   <img src="images/separator.png" width="100%;" alt="separator">
            </div>
            <div class="nav-links">
                <i class="ion-ios-information-outline icon-big"></i>
                <h2>Know More</h2>
                <ul>
                    <li><a target="blank" href="htmldocs/LMC.html">LMC</a></li>
                    <li><a target="blank" href="htmldocs/SAC.html">SAC</a></li>
                    <li><a target="blank" href="htmldocs/Labs.html">Laboratories</a></li>
                    <li><a target="blank" href="htmldocs/staff.html">Staff</a></li>
                    <li><a target="blank" href="htmldocs/syllabus/Split.html">Syllabus</a></li>
                    <li><a target="blank" href="htmldocs/Strength.html">Strength</a></li>
                    <li><a target="blank" href="htmldocs/RTI.pdf">RTI</a></li>
                    <li><a target="blank" href="htmldocs/E-news letter.docx">E-newsletter</a></li>
                </ul>
            </div>
            <div id="forms-docs-links" id="forms-navigation">
                    <h2>ANNOUNCEMENTS &amp; CIRCULARS</h2>
                        <?php 
                                $dir = "php/forms&application/";
                                $home = scandir($dir);
                                array_shift($home);
                                array_shift($home);
                                /**/
                        ?>
                    <ul>
                 <!--  link Generation  -->
                        <?php for($x = 0; $x < sizeof($home); $x++){ ?>
                             <?php 
                                 $download = "<a target='_blank' style='color:#2E95BB;text-decoration:none;font-size:200%;font-weight:400;margin-right:10px;' href='php/downloads.php?f=$home[$x]'><i class='ion-ios-download link-icons'></i></a>";
                                 $view_value = $dir.$home[$x];
                                 $view = "<a target='_blank' style='color:#fc3;text-decoration:none;font-size:100%;font-weight:200;margin-right:5px' href='$view_value'><i class='ion-document link-icons'></i></a>";
                                 $filename  = pathinfo($home[$x]);
                                $disp_name = $filename['filename'];
                                $view_value = "<a target='_blank' style='color:#fc3;text-decoration:none;font-size:120%;font-weight:400;margin-right:5px' href='$view_value'>$disp_name</a>";
                             ?>
                        <li> <a class="link-names"><?php echo $view_value; ?> </a>
                             <a class='link-links'><?php echo $download;?> </a>
                        </li>
                        <?php } ?>
                 
                  </ul>
                 </div>
            <div class="clearfix"></div>
            
        </div>
    </section>
    
    <!-- NAVIGATION AT 480Px  *************************************************************************** -->
    
         <div class="min-nav">
            <div class="members-nav">
                  <i class="ion-android-people profile big-font"></i>
                <ul class="people-navigator">
                    <li><a href="#"><i class="ion-ios-circle-filled"></i></a></li>
                    <li><a href="#"><i class="ion-ios-circle-filled"></i></a></li>
                    <li><a href="#"><i class="ion-ios-circle-filled"></i></a></li>
                    <li><a href="#"><i class="ion-ios-circle-filled"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
          
            <ul class="people-carousel">
                <li>
                   <div class="member-photo">
                        <img src="images/member.png">
                    </div>
                    <div class="member-info">
                        <h2>Website Admin</h2>
                        <p>Ashok Kumar Rao<br>PGT Computer Science</p>
                    </div>
                </li>
                <li>
                   <div class="member-photo">
                        <img src="images/principle.png">
                    </div>
                    <div class="member-info">
                        <h2>Principal</h2>
                        <p>Mahendra Kumar Meena</p><br>
                        <p>AECS Narora <br>Bulandshahr</p>
                    </div>
                </li> 
                <li>
                   <div class="member-photo">
                        <img src="images/vice.png">
                    </div>
                    <div class="member-info">
                        <h2>Vice Principal</h2>
                        <p>Deshraj Kishana<br></p>
                    </div>
                </li>
            </ul>
           
            <div class="separator">
                   <img src="images/separator.png" width="100%;" alt="separator">
            </div>
             <div class="main">
                  <div class="nav-links" id="navigation-links">
                    <i class="ion-ios-information-outline icon-big"></i>
                    <h2>Know More</h2>
                    <ul>
                        <li><a href="htmldocs/LMC.html">LMC</a></li>
                        <li><a href="htmldocs/SAC.html">SAC</a></li>
                        <li><a href="htmldocs/Laboratories.html">Laboratories</a></li>
                        <li><a href="htmldocs/staff.html">Staff</a></li>
                        <li><a href="htmldocs/syllabus/Split.html">Syllabus</a></li>
                        <li><a href="htmldocs/Strength.html">Strength</a></li>
                    </ul>
                </div>
               <div id="forms-docs-links" id="forms-navigation">
                    <h2>ANNOUNCEMENTS &amp; CIRCULARS</h2>
                        <?php 
                                $dir = "php/forms&application/";
                                $home = scandir($dir);
                                array_shift($home);
                                array_shift($home);
                                /**/
                        ?>
                    <ul>
                 <!--  link Generation  -->
                        <?php for($x = 0; $x < sizeof($home); $x++){ ?>
                             <?php 
                                 $download = "<a target='_blank' style='color:#2E95BB;text-decoration:none;font-size:200%;font-weight:400;margin-right:10px;' href='downloads.php?f=$home[$x]'><i class='ion-ios-download link-icons'></i></a>";
                                 $view_value = $dir.$home[$x];
                                 $view = "<a target='_blank' style='color:#fff;text-decoration:none;font-size:100%;font-weight:200;margin-right:5px' href='$view_value'><i class='ion-document link-icons'></i></a>";
                                 $filename  = pathinfo($home[$x]);
                                $disp_name = $filename['filename'];
                                $view_value = "<a target='_blank' style='color:#fff;text-decoration:none;font-size:120%;font-weight:400;margin-right:5px' href='$view_value'>$disp_name</a>";
                             ?>
                        <li> <a class="link-names"><?php echo $view_value; ?> </a>
                             <a class='link-links'><?php echo $download;?> </a>
                        </li>
                        <?php } ?>
                  </ul>
                 </div>
                 <div class="clearfix">
                 </div>
             </div>
            <!--<div class="current-updates">
                <ul class='gallery-images'>
                    <li>
                        <a href="#">
                            <img src="images/gallery_preview/1.png"  class="img1" alt="gallery1">
                        </a>
                    </li>
                    <li>
                     <a href="#">
                        <img src="images/gallery_preview/2.png"  class="img2" alt="gallery2">
                    </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/gallery_preview/3.png"  class="img3" alt="gallery2">
                    </a>
                    </li>
                </ul>
            </div> -->
        </div>
        
        <!-- NAVIGATION AT 480Px  *************************************************************************** -->

    
    <!--# HERO #-->
    
    <section class="testimonials">
        <div class="testimonials-header">
            <h2>Members of AEES</h2>
            <p>GOVERNING BODY OF AEES The administrative set up of <br>the society consists of a Governing Council with a CBSE, Secretary, </p>
        </div>
            <ul class="testimonials-carousel">
                <li>
                    <img src="images/members/1.png" alt="About Member">
                    <p class="name">Shri. Desh Deepak Jain</p>
                    <p class="position">Chairman LMC</p>
                    <blockquote>
                        <pre>
	Station Director
	Narora Atomic Power Station
                        
                        </pre>
                    </blockquote>
                </li>
                 <li>
                    <img src="images/members/2.png" alt="About Member">
                    <p class="name">Shri P. Lahiri </p>
                    <p class="position">Secretary, AEES</p>
                    <blockquote>
                        <i>Shri P. Lahiri has acquired B.E. degree in Electrical Engineering from Regional Engineering College, Durgapur in the year 1978. After successful completion of one year OCES training programme of 22nd batch of BARC Training School, Shri Lahiri joined Engineering Services Group of BARC as Scientific Officer/C.
He started his professional journey as engineer of Technical Services Division, BARC and was associated with design, engineering and erection of infrastructure projects. During later part of career he steered the development of new BARC campus at Vishakhapatnam. Before retirement he was holding the responsibility of Regional Director, BARC Facilities, Visakhapatnam for planning, Design and construction of new campus of BARC at Visakhapatnam. He retired as Distinguished Scientist.
As the recognition of his contribution to the Department, he was awarded the DAE Special Achievement Award in 2011.
After superannuation in January 2016, Shri Lahiri was involved in Design Safety review committee of various projects of BARC. Shri Lahiri has been appointed as Secretary, Atomic Energy Education Society w.e.f. 07-04-2019.

                        </i>
                    </blockquote>
                </li>
                 <li>
                    <img src="images/members/3.png" alt="About Member">
                    <p class="name">Dr. V. P. Venugopalan</p>
                    <p class="position">Chairman, AEES</p>
                    <blockquote>
                        <i> Dr. V. P. Venugopalan, former Outstanding Scientist and Director, Bioscience Group, Bhabha Atomic Research Centre, took charge as Chairman, AEES, in the forenoon of 15 Nov 2021.

After completing his masters from the Cochin University of Science and Technology, Dr . Venugopalan obtained his Ph.D. from the National Institute of Oceanography, Goa. Subsequently, he did his post-doctoral research (as a DBT Overseas Fellow) at the Technical University of Munich, Germany. In the initial years after joining BARC in 1989, he worked on the operational (biofouling and biofilm) and environmental (thermal discharge from condensers) issues relating to cooling water systems of coastal nuclear power plants in India. Later on, his major contribution was in the area of environmental biotechnology, particularly in development of biological wastewater treatment schemes. His research efforts in the above areas have resulted in more than 150 publications and three patents. For the past several years, he has been serving as a member of the DAE Advisory Committee on Steam and Water Chemistry (COSWAC). As Director of the Bioscience Group, BARC, he focused his attention on the application of nuclear techniques for the development of new crop varieties and preservation of perishable agricultural produce. He is a Senior Professor in the Homi Bhabha National Institute, a deemed-to-be University under the DAE umbrella. As a research supervisor in various universities, he has produced eleven PhDs.

After superannuation, he has been serving the Department of Atomic Energy as a Raja Ramanna Fellow. 

                        </i>
                    </blockquote>
                </li>
            </ul>
             <ul class="testipager">
                        <li><a href="#"><i class="ion-ios-circle-filled"></i></a></li>
                        <li><a href="#"><i class="ion-ios-circle-filled"></i></a></li>
                        <li><a href="#"><i class="ion-ios-circle-filled"></i></a></li>
            </ul>
    </section>
    
    
    <!--Form and Maps -->

<!--   # Forms and Maps-->
   
    <?php include("php/footer.php") ?>
    <div class="copyright-info">
            <div class="copyright-text">
                    <p>Copyright 2020 </p>               
             </div>
        </div>
   
    <!--Members Testimonials -->
        <!-- Javascripts are Included at last for web performance -->
        

<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------Script for Image Slider----------------------------------------------------- -->

  <!-- Swiper JS -->
  <script src="./scripts/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows : true,
    },
    autoplay: {
        delay: 1000,
    },
    loop: true,
    pagination: {
      el: '.swiper-pagination',
    },
  });
</script>
<!-- ------------------------------------------------------   ende  ------------------------------------------------------ -->
<!-- ---------------------------------------------------Script for Image Slider----------------------------------------------------- -->


    <script type="text/javascript" src="scripts/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/caroufredsel.js"></script>
    <script type="text/javascript" src="scripts/typer.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
    <script type="text/javascript" src="scripts/gmaps.js"></script>
    <script type="text/javascript" src="scripts/selectivizr.js"></script>
    <script type="text/javascript" src="scripts/respond.js"></script>
    <script type="text/javascript" src="scripts/html5shiv-printshiv.js"></script>
    <script type="text/javascript" src="scripts/html5shiv.js"></script>

</body>
</html>