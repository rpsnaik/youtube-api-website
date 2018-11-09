<?php
 
if(isset($_GET['id'])){
      $value = $_GET['id'];
}
if(isset($_GET['title'])){
      $ti = $_GET['title'];
 }
 if(isset($_GET['dat'])){
      $date = $_GET['dat'];
 }else{
      $date = "Not Available";
 }


  if(isset($_GET['des'])){
      $description = $_GET['des'];
 }else{
      $description = "Not Available";
 }

       


?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Music Vibes</title>
    <meta name="description" content="">
    <meta name="author" content="">

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

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      body{
        background-color: #181818;
      }
    </style>
    <style type="text/css">
    #vid{
             width: 640px;
             height: 360px;
           }
         @media only screen and (max-width: 800px) {
           #vid{
             width: 400px;
             height: 225px;
           }
         }
         @media only screen and (max-width: 600px) {
           #vid{
             width: 270px;
             height: 151px;
           }
         }
    </style>
</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <section class=" s-pageheader--home">
       
        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" style="color: #fff;font-size: 1.2em;" href="index.php">
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

                    <form role="search" method="GET" class="header__search-form" id="youtubesearch" action="./query.php">
                        
                            <span class="hide-content">Search for:</span>
                            <input style="color: #fff;" type="search" id="search" class="search-field" placeholder="Type Keywords" value="" name="q" title="Search for:" autocomplete="off">
                            <br>
                            <button type="submit" value="Search" class="form-control" name="search">Submit</button>
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
                        <li><a href="search.php" title="">Search</a></li>
                        <li><a href="trending.php" title="">Trending</a></li>
                        <li><a href="#" title="">About</a></li>
                        <li><a href="#" title="">Contact</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->
         
<!--
       
-->

<section  class="ress">
        
        <div class="row">
            <div class="masonry">

                <div class=""></div>

                <article class="" data-aos="">
                        
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#">Status : Published</a>
                            </div>
                            <h1 style="text-transform: capitalize;" class="entry__title"><a href="http://www.youtube.com/embed/{{videoid}}"><?php echo $ti ?></a></h1>


                             <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">

                           <div class="item">
 
              <div class="row middle-md middle-sm middle-xs middle--lg">
                  <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                       <iframe class="" id="vid"  src="//www.youtube.com/embed/<?php echo($value) ?>" frameborder="0" allowfullscreen></iframe>
                  </div>
              </div>
               
         </div>
           
              

        <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/mediaelement/latest/mediaelement-and-player.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/mediaelement/latest/mediaelementplayer.css"></script>
<style type="text/css">
  iframe{
  height:0;
  }
  #player2{
    display: none;
  }
  .need{
    
  }
</style>

  </div>

   <br>
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>


    <br>
    


 
           </div>
                            
                        </div>
                        <div class="entry__excerpt">
                          <p><?php echo "Published at : ".$date; ?></p>
                            <p style="color: #777;padding: 0px;margin: 0px;">
                                Description : <?php echo $description ?>
                            </p>
                            <br>
                            <a href="http://en.fetchfile.net/?url=<?php echo($value) ?>" target="_blank"><p class="btn btn-danger"> <i class="fa fa-download"></i> Download</p></a>
                            <a  href="./mp3lio-musicplayer.php?id=<?php echo($value) ?>&title=<?php echo $ti ?></a>&des=<?php echo $description ?>&da=<?php echo($date)?>" <p class="btn btn-danger"> <i class="fa fa-play"></i> Play MP3</p></a>
                           
 
                        </div>
                        <div class="entry__meta">
                            <br><br>
                            <span class="entry__meta-links">
                                <a href="music.php">Music</a> 
                                
                            </span>
                            <!--https://youtube.com/watch?v={{videoid}}-->

                            
                           

                        </div>
                    </div>
    
                </article> 
                  </div>
              </div>
          </section>






         <!-- end pageheader-content row -->
    </section> <!-- end s-pageheader -->




    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
     <footer class="s-footer">

       
     <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <br>
                        <br>
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


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>


</html>







<div id="player"></div>





<script type="text/javascript">
  
  var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        width: 600,
        height: 400,
        videoId: '<?php echo($value) ?>',
        playerVars: {
            color: 'white',
            
        },
        events: {
            onReady: initialize
        }
    });
}

function initialize(){

    // Update the controls on load
    updateTimerDisplay();
    updateProgressBar();

    // Clear any old interval.
    clearInterval(time_update_interval);

    // Start interval to update elapsed time display and
    // the elapsed part of the progress bar every second.
    time_update_interval = setInterval(function () {
        updateTimerDisplay();
        updateProgressBar();
    }, 1000)

}


function updateTimerDisplay(){
    // Update current time text display.
    $('#current-time').text(formatTime( player.getCurrentTime() ));
    $('#duration').text(formatTime( player.getDuration() ));
    $('#secs').text(player.getDuration());
}



function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 1000 );
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}

function formatTime(time){
    time = Math.round(time);

    var minutes = Math.floor(time / 60),
    seconds = time - minutes * 60;

    seconds = seconds < 10 ? '0' + seconds : seconds;

    return minutes + ":" + seconds;
}
</script>










<br>

<style type="text/css">
  #myProgress {
  width: 75%;
  background-color: #ddd;
}

#myBar {
  width: 75%;
  height: 14px;
  background-color: #4CAF50;
}
</style>



<script>
var x = document.getElementById("player2");
x.volume = 1;
 

setInterval(function getVolume() { 
    $('#vol').text("Volume : "+(x.volume)*100);
},500);
function setHalfVolume() { 
    x.volume=x.volume - 0.2;


     var width=0;
    var elem = document.getElementById("myBar");   
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width=(x.volume)*100;
      elem.style.width = width + '%'; 
    }
  }



}
   
function setFullVolume() { 
    x.volume =x.volume + 0.2;

      var width=0;
      var elem = document.getElementById("myBar");   
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width=(x.volume)*100;
      elem.style.width = width + '%'; 
    }
  }
} 
</script> 



    <script type="text/javascript">
      $(function(){
        $('audio').mediaelementplayer();
      })
      function toggleSound() {
  var audioElem = document.getElementById('player2');
  if (audioElem.paused){
      audioElem.play();
      $('#play-pause').html("Pause");
  }
  else{
    audioElem.pause();
    $('#play-pause').html("Play");

  }
}
    </script>




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
    
















