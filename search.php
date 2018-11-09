<?php
 

           
             
              if(isset($_COOKIE['question'])){
                $name = $_COOKIE['question'];
                  $net = $_COOKIE['question'];
             }
             else{
               $name = "";
             }



?>
<!DOCTYPE html>
<html>
<head>
	 <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Music Vibes</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <style type="text/css">
      body{
        background-color: #181818;
      }
    </style>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="js/app.js"></script>
        <script src="https://apis.google.com/js/client.js?onload=init"></script>
        <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script type="text/javascript">
            window.onload=function(){
  document.getElementById("butt").click();
};
        </script>
        <style type="text/css">


    
.loader {
  text-align: center;
  padding: 50px;
  border: 15px solid #f3f3f3;
  border-radius: 50%;
  border-top: 15px solid #3498db;
  width: 80px;
  height: 80px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>






</head>
<body>




  <section style="padding-bottom: 0px;"   class="s-pageheader--home">
       
        <header class="header" style="margin: 0px;padding: 0px;">
            <div class="header__content row">

                <div style="padding: 0px;" class="header__logo">
                    <a class="logo" style="font-size: 1.2em;color: #fff;" href="index.php">
                       Music Vibes
                    </a>
                </div> <!-- end header__logo -->

                <ul class="header__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->

                <a class="header__search-trigger" href="#0"></a>

                <div class="header__search">

                    <form role="search" method="GET" class="header__search-form" id="youtubesearch" action="./search.php">
                        
                            <span class="hide-content">Search for:</span>
                            <input style="color: #fff;" type="search" id="search" class="search-field" placeholder="Type Keywords" value="<?php echo $name ?>" name="q" title="Search for:" autocomplete="off">
                            <br>
                            <button id="butt" type="submit" value="Search" class="form-control" name="search">Submit</button>
                    </form>
        
                    <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

                </div>  <!-- end header__search -->


                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <ul class="header__nav">
                        <li><a href="index.php" title="">Home</a></li>
                        <li><a href="navigation-catogery.php" title="">Categories</a></li>
                        <li><a href="music.php" title="">Music</a></li>
                        <li class="current"><a href="search.php" title="">Search</a></li>
                        <li><a href="trending.php" title="">Trending</a></li>
                        <li><a href="#" title="">About</a></li>
                        <li><a href="#" title="">Contact</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->
            </div> <!-- header-content -->
        </header> <!-- header -->


      



        
            <div style="padding: 10px;" class="">
             <div class="row">
                <a style="font-size: 1.5em;" href="#"><p id="ress"  style="color: #fff; padding: 0px;margin: 0px;text-align: center;">Search here for Anything</p></a>
            <div style="color: #fff;border-radius: 0.6em;" id="results"><div style="text-align: center;" class="loader"></div> <span style="width: 100%; text-align: center;">Loading ... </span></div>
             </div>
           </div>


       <!-- end pageheader-content row -->
    </section> <!-- end s-pageheader -->


    <style type="text/css">
      @media only screen and (max-width: 800px){
        .need audio{
          width: 200px;
        }
      }
    </style>




             

        <!-- scripts -->
       <script>
            setTimeout(function myFunction4(){
               var elementClicked;
                $("butt").click(function(){
                   elementClicked = true;
                });
                if( elementClicked != true ) {
                    console.log("Not Clicked");
                    document.getElementById("butt").click();
                }else{
                    console.log("Clicked");
                    alert("element clicked");
                }
            },5000)

          
            setInterval(function(){
                var textfeid = document.getElementById('search').value;
               $('#ress').html("Search results : "+textfeid);
               $('title').text("MP3 Lio - "+textfeid);
            },1000)

            
            setTimeout(function myFunction2(){
                
            },8000)
       </script>
    
       <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <style type="text/css">
      body{
        background-color: #181818;
      }
    </style>




</body>
</html>


 <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-two md-four mob-full s-footer__sitelinks">
                        
                    <h4>Quick Links</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">Home</a></li>
                        <li><a href="#0">Blog</a></li>
                        <li><a href="#0">Styles</a></li>
                        <li><a href="#0">About</a></li>
                        <li><a href="#0">Contact</a></li>
                        <li><a href="#0">Privacy Policy</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->

                <div class="col-two md-four mob-full s-footer__archives">
                        
                    <h4>Archives</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">January 2018</a></li>
                        <li><a href="#0">December 2017</a></li>
                        <li><a href="#0">November 2017</a></li>
                        <li><a href="#0">October 2017</a></li>
                        <li><a href="#0">September 2017</a></li>
                        <li><a href="#0">August 2017</a></li>
                    </ul>

                </div> <!-- end s-footer__archives -->

                <div class="col-two md-four mob-full s-footer__social">
                        
                    <h4>Social</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">Facebook</a></li>
                        <li><a href="#0">Instagram</a></li>
                        <li><a href="#0">Twitter</a></li>
                        <li><a href="#0">Pinterest</a></li>
                        <li><a href="#0">Google+</a></li>
                        <li><a href="#0">LinkedIn</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class="col-five md-full end s-footer__subscribe">
                        
                    <h4>Our Newsletter</h4>

                    <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Copyright Music Vibes 2018</span> 
                        <span>Designed and Developed By <a href="https://www.instagram.com/internet_builders/">Internet Builders</a></span>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>