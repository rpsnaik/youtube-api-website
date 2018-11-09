<?php
 

 if(isset($_GET['id'])){
      $value = $_GET['id'];
 }
 else{
   $value = "Not Available";
 }
  if(isset($_GET['title'])){
      $ti = $_GET['title'];
 }
 else{
   $ti = "Not Available";
 }
  if(isset($_GET['des'])){
      $description = $_GET['des'];
 }
 else{
  $description = "Not Available";
 }

       
       
       
       
       
       
/*

       echo $value;
       echo $ti;
       echo $description;
       echo $channel;
       echo $date;
       echo $date;
       echo $type;

       */


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
      html,body
{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}
    </style>

</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <section  style="padding-bottom: 0px;" class="s-pageheader--home">
       
        <header class="header" style="margin: 0px;padding: 0px;">
            <div style="padding: 0px;" class="header__content row">

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
                        <li class="current"><a href="music.php" title="">Music</a></li>
                        <li><a href="search.php" title="">Search</a></li>
                        <li><a href="trending.php" title="">Trending</a></li>
                        <li><a href="#" title="">About</a></li>
                        <li><a href="#" title="">Contact</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->


         





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


             <img src="https://img.youtube.com/vi/<?php echo($value)  ?>/hqdefault.jpg">
              

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
    display: 200;
  }
  .need{
    background-color: #e3e3e3;
    padding: 20px 10px 10px 20px;
  }
  .slidecontainer {
    width: 100%;
}

.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #333;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    background: #e3e3e3;
    border: 1px solid #000;
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    background: #000;
    cursor: pointer;
}
</style>
   <div class="need">
    <audio id="player2" volume preload="none" style="width: 300px;">
        <source src="https://www.youtube.com/watch?v=<?php echo $value ?>" type="video/x-youtube">
    </audio>
  
 <span>Volume : <br><input style="width: 300px;height: 20px;" class="slider" id="vol-control" type="range" min="0" max="100" step="2" oninput="SetVolume(this.value)" onchange="SetVolume(this.value)"></input></span>
</div>
<script>
    function SetVolume(val)
    {
        var player = document.getElementById('player2');
        console.log('Before: ' + player.volume);
        player.volume = val / 100;
        console.log('After: ' + player.volume);
    }
</script>
   <br>
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>


<!--

    <button id="play-pause" onclick="javascript:toggleSound();">Play</button>
    <button onclick="document.getElementById('player2').muted=!document.getElementById('player2').muted">Mute/ Unmute</button>
    <br>
      
    <p>Click the buttons to get or set the volume of the audio player.</p>


<button style="font-size: 1.2em;" onclick="setHalfVolume()" type="button">-</button>
<button style="font-size: 1.2em;" onclick="setFullVolume()" type="button">+</button>


<p id="vol" style="padding: 0px;margin: 0px;">Volume : </p>
<div style="padding: 0px;margin: 0px;" id="myProgress">
  <div id="myBar"></div>
</div>
-->
<br>
<a href="./stream-online.php?id=<?php echo($value) ?>&title=<?php echo($ti) ?>&des=<?php echo($description) ?>"><p class="btn btn-danger"> <i name="q" style="font-size: 1.4em;" class="fa fa-video"></i> Play Video</p></a>
<a href="http://en.fetchfile.net/?url=<?php echo($value) ?>" target="_blank"><p class="btn btn-danger"> <i class="fa fa-download"></i> Download</p></a>
 
           </div>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p style="color: #777;padding: 0px;margin: 0px;">
                                Description : <?php echo $description ?>
                            </p>
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



                 




















        
         </div>
        <!-- end pageheader-content row -->
    </section>

     <!-- end s-pageheader -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <br>



    <!-- s-footer
    ================================================== -->
    


    <!-- preloader
    ================================================== -->
   


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
x.volume = 0.8;
 

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



</article>
</div>
</div>
</section>
</section>
</body>
</html>




















