<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/series-page.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Navbar search box script  -->
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>


    <title>Series page</title>
</head>

<body>

<!------------ Navbar ------------>

<input type="checkbox" id="check">
<nav>
    <div class="icon">Ani<b style="color: red;">M</b>ax</div>
    <div class="search_box">
        <input type="search" placeholder="Search here">
        <span class="fa fa-search"></span>
    </div>
    <ol>
        <li><a href="index.html">home</a></li>
        <li><a href="Contact.html">contact</a></li>
        <li><a href="#">services</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">login here</a></li>
    </ol>
    <label for="check" class="bar">
        <span class="fa fa-bars" id="bars"></span>
        <span class="fa fa-times" id="times"></span>
    </label>
</nav>

<!---------------- End Of Navbar  --------------->

<!------------- Movie Intro --------->

<section class="movie-banner">
    <div class="m-banner-img">
        <img src="images/seriespage/strangerthings.jpg" alt="" srcset="">
    </div>

    <div class="banner-container">
        <div class="title-container">
            <div class="title-top">
                <div class="movie-title">
                    <h1>Stranger Things</h1>
                </div>
                <div class="more-about-movie">
                    <span class="quality">Full HD</span>
                    <div class="rating">
                        8.2 <img src="https://img.icons8.com/external-tal-revivo-shadow-tal-revivo/11/000000/external-imdb-an-online-database-of-information-related-to-films-and-television-programs-logo-shadow-tal-revivo.png" />
                    </div>
                    <span>28 August 2017</span>
                    <span>3 Seasons</span>
                </div>
                <div class="language">
                    <span>English</span>
                </div>
                <div class="details">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente odit voluptate est nesciunt omnis officiis, sequi dolores impedit cum necessitatibus obcaecati facere incidunt nulla quasi minus quam, optio enim!
                </div>
            </div>
            <div class="title-bottom">
                <div class="category">
                    <strong>Category</strong><br/>
                    <a href="">Action</a>,<a href="">Mistery</a>,<a href="">Comedy</a>
                </div>
                <a href="" class="watch-btn">Watch Trailer</a>
            </div>
        </div>
        <!-- <div class="play-btn-container">
            <div class="play-btn">
                <a href="javascript:void">
                    <i class="fas fa-play"></i>
                </a>
            </div>
        </div>
        <div id="play" class="play">

            <a href="javascript:void" class="close-movie">
                <i class="fas fa-times"></i>
            </a>

            <div class="play-movie">
                <video id="m-video" controls>
                    <source src="videos/1.mp4" type="video/mp4">
                </video>
            </div>
        </div> -->
    </div>
</section>
<!--
      - filter bar
    -->
<section class="season">
    <div class="filter-bar">

        <div class="filter-radios">

            <input type="radio" name="grade" id="featured" class="season1" checked>
            <label for="featured" data-filter="season1">Season 1</label>

            <input type="radio" name="grade" id="popular" class="season2">
            <label for="popular" data-filter="season2">Season 2</label>

            <input type="radio" name="grade" id="newest" class="season3">
            <label for="newest" data-filter="season3">Season 3</label>

            <input type="radio" name="grade" id="biggest" class="season4">
            <label for="biggest" data-filter="season4">Season 4</label>

            <div class="checked-radio-bg"></div>

        </div>
    </div>
</section>

<!-- Season 1 -->
<div class="section" style="margin-top: -50px; margin-left: 40px; margin-right: 40px;" id="season1" data-tags="season1">
    <div class="container">
        <div class="movies-slide carousel-nav-center owl-carousel">
            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 1- Game begin</h3>
                </div>
            </div>

            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/Bat-man.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 2- Can do it?</h3>
                </div>

            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 1- Game begin</h3>
                </div>
            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/Bat-man.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 2- Can do it?</h3>
                </div>

            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 1- Game begin</h3>
                </div>
            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/Bat-man.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 2- Can do it?</h3>
                </div>

            </div>
            <!-- END MOVIE ITEM -->

        </div>
    </div>
</div>
<!-- Season 1 End -->

<!-- Season 2 -->
<div class="section" style="margin-top: -50px; margin-left: 40px; margin-right: 40px;" id="season2" data-tags="season2">
    <div class="container">
        <div class="movies-slide carousel-nav-center owl-carousel">

            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/Bat-man.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 2- Can do it?</h3>
                </div>

            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 1- Game begin</h3>
                </div>
            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/Bat-man.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 2- Can do it?</h3>
                </div>

            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 1- Game begin</h3>
                </div>
            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/Bat-man.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 2- Can do it?</h3>
                </div>

            </div>
            <!-- END MOVIE ITEM -->

        </div>
    </div>
</div>
<!-- Season 2 End -->

<!-- Season 3 -->
<div class="section" style="margin-top: -50px; margin-left: 40px; margin-right: 40px;" id="season3" data-tags="season3">
    <div class="container">
        <div class="movies-slide carousel-nav-center owl-carousel">
            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 1- Game begin</h3>
                </div>
            </div>
            <!-- END MOVIE ITEM -->

        </div>
    </div>
</div>
<!-- Season 3 End -->

<!-- Season 4 -->
<div class="section" style="margin-top: -50px; margin-left: 40px; margin-right: 40px;" id="season4" data-tags="season4">
    <div class="container">
        <div class="movies-slide carousel-nav-center owl-carousel">
            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 1- Game begin</h3>
                </div>
            </div>
            <!-- END MOVIE ITEM -->

            <!-- MOVIE ITEM -->
            <div class="series-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">
                        <div class="play-btn play">
                            <a href="javascript:void">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Episode 1- Game begin</h3>
                </div>
            </div>
            <!-- END MOVIE ITEM -->

        </div>
    </div>
</div>
<!-- Season 4 End -->

<!------ Play Video ------>

<div id="play" class="play">
    <!--close-btn--->
    <a href="javascript:void" class="close-movie">
        <i class="fas fa-times"></i>
    </a>
    <!--movie------->
    <div class="play-movie">
        <video id="m-video" controls>
            <source src="videos/1.mp4" type="video/mp4">
        </video>
        <!-- <div id="player"></div>

        <script>
            var player = new Playerjs({
                id: "player",
                file: "videos/1.mp4"
            });
        </script> -->
    </div>
</div>

<!-------End Play Video  ---->

<!-- LATEST SERIES SECTION -->
<div class="section">
    <div class="container">
        <div class="section-header">
            latest series
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel">
            <!-- MOVIE ITEM -->
            <div class="movie-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">

                        <div class="bookmark">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </div>

                        <div class="rating">
                            <ion-icon name="star-outline"></ion-icon>
                            <span>6.4</span>
                        </div>

                        <div class="play">
                            <ion-icon name="play-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Red Notice</h3>

                    <div class="card-info">
                        <span class="genre">Action/Comedy</span>
                        <span class="year">2021</span>
                    </div>
                </div>

            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="movie-card">
                <div class="card-head">
                    <img src="images/movies/Bat-man.jpg" alt="" class="card-img">

                    <div class="card-overlay">

                        <div class="bookmark">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </div>

                        <div class="rating">
                            <ion-icon name="star-outline"></ion-icon>
                            <span>6.4</span>
                        </div>

                        <div class="play">
                            <ion-icon name="play-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Bat Man</h3>

                    <div class="card-info">
                        <span class="genre">Action</span>
                        <span class="year">2006</span>
                    </div>
                </div>

            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="movie-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">

                        <div class="bookmark">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </div>

                        <div class="rating">
                            <ion-icon name="star-outline"></ion-icon>
                            <span>6.4</span>
                        </div>

                        <div class="play">
                            <ion-icon name="play-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Red Notice</h3>

                    <div class="card-info">
                        <span class="genre">Action/Comedy</span>
                        <span class="year">2021</span>
                    </div>
                </div>

            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="movie-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">

                        <div class="bookmark">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </div>

                        <div class="rating">
                            <ion-icon name="star-outline"></ion-icon>
                            <span>6.4</span>
                        </div>

                        <div class="play">
                            <ion-icon name="play-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Red Notice</h3>

                    <div class="card-info">
                        <span class="genre">Action/Comedy</span>
                        <span class="year">2021</span>
                    </div>
                </div>

            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="movie-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">

                        <div class="bookmark">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </div>

                        <div class="rating">
                            <ion-icon name="star-outline"></ion-icon>
                            <span>6.4</span>
                        </div>

                        <div class="play">
                            <ion-icon name="play-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Red Notice</h3>

                    <div class="card-info">
                        <span class="genre">Action/Comedy</span>
                        <span class="year">2021</span>
                    </div>
                </div>

            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <div class="movie-card">
                <div class="card-head">
                    <img src="images/movies/red-notice.jpg" alt="" class="card-img">

                    <div class="card-overlay">

                        <div class="bookmark">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </div>

                        <div class="rating">
                            <ion-icon name="star-outline"></ion-icon>
                            <span>6.4</span>
                        </div>

                        <div class="play">
                            <ion-icon name="play-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Red Notice</h3>

                    <div class="card-info">
                        <span class="genre">Action/Comedy</span>
                        <span class="year">2021</span>
                    </div>
                </div>

            </div>
            <!-- END MOVIE ITEM -->
        </div>
    </div>
</div>
<!-- END LATEST SERIES SECTION -->

<!------------- End Movie Intro --------->

<!---------- Footer --------->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dress</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!---------- End Footer --------->


<!-- SCRIPT -->
<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- OWL CAROUSEL -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<!--- ionicon link-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- APP SCRIPT -->
<script src="{{asset('jquery/jquery.js')}}"></script>

<script>
    $(function($) {
        $.autofilter();
    });
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<script>
    try {
        fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
            method: 'HEAD',
            mode: 'no-cors'
        })).then(function(response) {
            return true;
        }).catch(function(e) {
            var carbonScript = document.createElement("script");
            carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
            carbonScript.id = "_carbonads_js";
            document.getElementById("carbon-block").appendChild(carbonScript);
        });
    } catch (error) {
        console.log(error);
    }
</script>

</body>

</html>