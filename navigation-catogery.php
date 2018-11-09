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
                        <li><a href="index.php" title="">Home</a></li>
                        <li class="current"><a href="navigation-catogery.php" title="">Categories</a></li>
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


    <!-- s-content
    ================================================== -->

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
                            <h1 class="entry__title"><a href="./category.php?name=Spanish Music">Spanish</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Spain / South America</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=English Music">English</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">US / UK</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Latin Music">Latin</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Latin American Culture</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=kpop music">Korean Music</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Korean Culture</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=chinese music">Chinese</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Chinese Culture</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=bollywood music">Indian</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Indian Culture</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=arabic music">Arabic</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Arabic Culture</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=portuguese music">Portuguese</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Portugues Culture</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=russian music">Russian</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Russian Culture</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=punjabi music">Punjabi Music</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Punjabi Culture</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=japanese music">Japanese</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Japanese Culture</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=french music">French</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">French Culture</a> 
                            </span>
                        </div>
                    </div>
                    <br>
                      <br>
                </article> <!-- end article -->
            </div>
        </div>
    






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
                            <h1 class="entry__title"><a href="./category.php?name=tseries">T-Series</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Music - Youtube Channel</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Netd Muzik">Netd Muzik</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Music - Youtube Channel</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Justin Bieber">Justin Bieber</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Music Channel - Youtube</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Charlie Puth">Charlie Puth</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Music Channel - Youtube</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=chain smokers">The Chain Smokers</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Music - Youtube</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Calvin Harris">Calvin Harris</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Music - Youtube</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=GMM Grammy">GMM Grammy</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Music Channel - Youtube</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Spinnin Records">Spinnin’ Records</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Ariana Grande">Ariana Grande</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Rihanna">Rihanna</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Taylor Swift">Taylor Swift</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Coldplay">Coldplay</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=anne marie">Anne Marie</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=jBlavin">jBlavin</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Ed Sheeran">Ed Sheeran</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Drake VEVO">Drake VEVO</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Alan Walker">Alan Walker</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=LuisFonsiVEVO">LuisFonsiVEVO</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Dope Lyrics">Dope Lyrics</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Disney Music VEVO">Disney Music VEVO</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Marshmello">Marshmello</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Martin Garrix">Martin Garrix</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Bebe Rexhna">Bebe Rexhna</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Bad Bunny">Bad Bunny</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Enrique Iglesias">Enrique Iglesias</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Dua Lipa">Dua Lipa</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=Marshmello">Marshmello</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
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
                            <h1 class="entry__title"><a href="./category.php?name=JFlaMusic">JFlaMusic</a></h1>
                            
                        </div>
                       
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Youtube Channel - Music</a> 
                            </span>
                        </div>
                    </div>
                    <br>
                      <br>
                </article> <!-- end article -->
            </div>
        </div>
    


</section>
</section>






















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
                      <br>
                      <br>
                </article> <!-- end article -->


            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->
    </section> <!-- s-content -->


    <!-- s-extra
    ================================================== -->

</section>
  














































    
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


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>


</html>