<?php
 
if (isset($_GET['search'])){
       $value = $_GET['q'];
}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <script src="js/jquery-3.2.1.min.js"></script>

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
    <script src="http://chancejs.com/chance.min.js"></script>
    <script type="text/javascript" src="js/indexscript.js"> 

        
    </script>


    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">
       
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
                        <li class="current"><a href="index.php" title="">Home</a></li>
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
        <div class="pageheader-content row">
            <div class="col-full">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('images/thumbs/featured/featured-guitarman.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="music.php">Music</a></span>

                                <h1><a href="search.php" title="">Fastest Mp3 Media Search Engine.</a><p style="color: #fff;font-size: 0.5em;">Download/Stream Online with us</p></h1>

                               
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->

                    <div class="featured__column featured__column--small">

                        <div class="entry" style="background-image:url('images/thumbs/featured/featured-watch.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="./category.php?name=POP Music">POP Music</a></span>

                                <h1><a href="./category.php?name=POP Music" title="">Genre of Popular Music originated from US/UK.</a><p style="color: #fff;font-size: 0.6em;">Catogeries : POP hit</p></h1>
                                

                            
                            </div> <!-- end entry__content -->
                          
                        </div> <!-- end entry -->

                        <div class="entry" style="background-image:url('images/thumbs/featured/featured-beetle.jpg');">

                            <div class="entry__content">
                                <span class="entry__category"><a href="./category.php?name=Classic Music">Classic Music</a></span>

                                <h1><a href="./category.php?name=Classic Music" title="">Throwback To The Good Old Days.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__small -->
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->
    </section> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->




<!-- S Content -->






















 <section class="s-content">
        
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                   
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#"></a>
                            </div>
                            <h1 class="entry__title"><a id="pos1" href="./category.php?name=POP Music"></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p id="des1">
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a id="catogery1" href="category.html">Design</a> 
                            </span>
                        </div>
                    </div>
                    <br>
                      <br>
                </article> <!-- end article -->

                 <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                   
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#"></a>
                            </div>
                            <h1 class="entry__title"><a id="pos0" href="./category.php?name=Jazz Music"></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p id="des0">
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a id="catogery0" href="#">Design</a> 
                            </span>
                        </div>
                    </div>
                      <br>
                      <br>
                </article> <!-- end article -->


              
   <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                   
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#"></a>
                            </div>
                            <h1 class="entry__title"><a id="pos2" href="./category.php?name=Classic Music"></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p id="des2">
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a id="catogery2" href="#">Design</a> 
                            </span>
                        </div>
                    </div>
                     <br>
                      <br>
                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                   
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#"></a>
                            </div>
                            <h1 class="entry__title"><a id="pos3" href="./category.php?name=Folk Music"></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p id="des3">
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a id="catogery3" href="#">Design</a> 
                            </span>
                        </div>
                    </div>
                    <br>
                      <br>
                </article> <!-- end article -->

                    <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                   
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#"></a>
                            </div>
                            <h1 class="entry__title"><a id="pos4" href="./category.php?name=Acoustic Music"></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p id="des4">
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a id="catogery4" href="#">Design</a> 
                            </span>
                        </div>
                    </div>
                     <br>
                      <br>
                </article> <!-- end article -->

               

                 <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                   
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#"></a>
                            </div>
                            <h1 class="entry__title"><a id="pos5" href="./category.php?name=Childrens Music"></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p id="des5">
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a id="catogery5" href="#">Design</a> 
                            </span>
                        </div>
                    </div>
                       <br>
                      <br>
                </article> <!-- end article -->


                
                 <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                   
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#"></a>
                            </div>
                            <h1 class="entry__title"><a id="pos6" href="./category.php?name=Hip hop"></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p id="des6">
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a id="catogery6" href="#">Design</a> 
                            </span>
                        </div>
                    </div>
                   <br>
                      <br>
                </article> <!-- end article -->

               
                 <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                   
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#"></a>
                            </div>
                            <h1 class="entry__title"><a id="pos7" href="./category.php?name=Electronic Music"></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p id="des7">
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a id="catogery7" href="#">Design</a> 
                            </span>
                        </div>
                    </div>
                      <br>
                      <br>
                </article> <!-- end article -->
                  
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                   
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#"></a>
                            </div>
                            <h1 class="entry__title"><a id="pos8" href="./category.php?name=K POP"></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p id="des8">
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a id="catogery8" href="#">Design</a> 
                            </span>
                        </div>
                    </div>
                         <br>
                      <br>
                </article> <!-- end article -->


               <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                   
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#"></a>
                            </div>
                            <h1 class="entry__title"><a id="pos9" href="./category.php?name=Indian POP"></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p id="des9">
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a id="catogery9" href="#">Design</a> 
                            </span>
                        </div>
                    </div>
                      <br>
                      <br>
                </article> <!-- end article -->


                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                   
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#"></a>
                            </div>
                            <h1 class="entry__title"><a id="pos10" href="./category.php?name=Spanish Music"></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p id="des10">
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a id="catogery10" href="#">Design</a> 
                            </span>
                        </div>
                    </div>
                    <br>
                      <br>
                </article> <!-- end article -->


                 <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                   
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="#"></a>
                            </div>
                            <h1 class="entry__title"><a id="pos11" href="./category.php?name=Latin Music"></a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p id="des11">
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a id="catogery11" href="#">Design</a> 
                            </span>
                        </div>
                    </div>
                      <br>
                      <br>
                </article> <!-- end article -->


            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->
    </section> <!-- s-content -->


    <!-- s-extra
    ================================================== -->
  














































    
    <!-- s-footer
    ================================================== -->
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
                        <span>© Copyright Philosophy 2018</span> 
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


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>


</html>