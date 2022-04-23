<!DOCTYPE html>
<html>

<head>
    <title>Watch movies,series,anime</title>

    <!-- Css -->
    <link rel="stylesheet" type="text/css" href={{ asset("./css/style.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("./css/grid.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("./css/subscription.css")}}>
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

</head>

<body>

    <!------------ Navbar ------------>

    <input type="checkbox" id="check">
    <nav>
        <a href="/" title="Website name">
            <div class="icon">Ani<b style="color: red;">M</b>ax</div>
        </a>
        <div class="search_box">
            <form action="search">
                <input type="search" name="query" placeholder="Search here">
                {{-- <span class="fa fa-search"></span>--}}
                <button id="s-btn" type="submit">Search</button>
            </form>
        </div>
        <ol>
            <li><a href="/">home</a></li>
            <li><a href="/contact">contact</a></li>
            <li><a href="/about">about</a></li>

            @if (Auth::check())
            <li><a href="/profile"><i class="fa fa-user-circle-o user" aria-hidden="true"></i> Profile</a></li>
            @else

            <li><a href="/register">Register</a></li>
            <li><a href="/login">login</a></li>
            @endif
        </ol>
        <label for="check" class="bar">
            <span class="fa fa-bars" id="bars"></span>
            <span class="fa fa-times" id="times"></span>
        </label>
    </nav>

    <!---------------- End Of Navbar  --------------->



    <!------------- Banner ------------->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="./images/black-banner.png" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Black Panther
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non
                                odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione
                                mollitia accusantium, facere ab suscipit.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="./images/supergirl-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Supergirl
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non
                                odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione
                                mollitia accusantium, facere ab suscipit.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="./images/wanda-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Wanda Vision
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non
                                odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione
                                mollitia accusantium, facere ab suscipit.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
            </div>
        </div>
    </div>
    <!------------ END of Banner ----------->



    <!-- LATEST SERIES SECTION -->

    <div class="section">
        <div class="container">
            <div class="section-header">
                latest series
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                @foreach($movie as $movies)
                <div class="movie-card">
                    <div class="card-head">
                        <img src="{{ Voyager::image($movies->poster)}}" alt="" class="card-img">

                        <div class="card-overlay">

                            <div class="bookmark">
                                <ion-icon name="bookmark-outline"></ion-icon>
                            </div>

                            <div class="rating">
                                <ion-icon name="star-outline"></ion-icon>
                                <span>{{$movies->rating}}</span>
                            </div>

                            <div class="play">
                                <a href="/movie/{{$movies->title}}" title="Website name">
                                    <ion-icon name="play-circle-outline"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <a href="/movie/{{$movies->title}}" title="Website name">
                            <h3 class="card-title">{{$movies->title}}</h3>

                            <div class="card-info">
                                <span class="genre">{{$movies->Category}}</span>
                                <span class="year">{{$movies->release_date}}</span>
                            </div>
                        </a>
                    </div>

                </div>
                @endforeach
                <!-- END MOVIE ITEM -->

            </div>
        </div>
    </div>
    <!-- END LATEST SERIES SECTION -->

    <!-- PRICING SECTION -->
    <div class="section">
        <div class="container">
            <div class="pricing">
                <div class="pricing-header">
                    An<span class="main-color">i</span>Max pricing
                </div>
                <div class="pricing-list">
                    <div class="row">
                        <div class="col-4 col-md-12 col-sm-12 container">
                            <div class="pricing-box hightlight">
                                <div class="pricing-box-header">
                                    <div class="pricing-name">
                                        Premium
                                    </div>
                                    <div class="pricing-price">
                                        $35.99 <span>/month</span>
                                    </div>
                                </div>
                                <div class="pricing-box-content">
                                    <p>Originals</p>
                                    <p>Swich plans anytime</p>
                                    <p>65+ top Live</p>
                                    <p><del>TV Channels</del></p>
                                </div>
                                <div class="pricing-box-action">
                                    @if (Auth::check())
                                    <form action="{{ route('make.payment') }}" method="POST" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <input type="text" name="name" hidden value={{$username}} class="form-control" placeholder="Name" required>
                                        <input type="text" name="mobile" hidden class="form-control" value={{rand(9111111111,9199999999)}} maxlength="10" placeholder="Mobile No.">
                                        <input type="email" class="form-control" hidden value={{$useremail}} placeholder="Email" name="email" required>
                                        <button id="" type="submit">Subscribe</button>
                                    </form>
                                    @else
                                    {{-- <li><a href="/login">Subscribe</a></li>--}}
                                    <button onclick="window.location.href='/login';">
                                        Subscribe
                                    </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRICING SECTION -->

    <!-- LATEST SERIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest series
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                @foreach($amovie as $moviel)
                <div class="movie-card">
                    <div class="card-head">
                        <img src="{{ Voyager::image($moviel->poster)}}" alt="" class="card-img">

                        <div class="card-overlay">

                            <div class="bookmark">
                                <ion-icon name="bookmark-outline"></ion-icon>
                            </div>

                            <div class="rating">
                                <ion-icon name="star-outline"></ion-icon>
                                <span>{{$moviel->rating}}</span>
                            </div>

                            <div class="play">
                                <a href="/movie/{{$moviel->title}}" title="Website name">
                                    <ion-icon name="play-circle-outline"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <a href="/movie/{{$moviel->title}}" title="Website name">
                            <h3 class="card-title">{{$moviel->title}}</h3>

                            <div class="card-info">
                                <span class="genre">{{$moviel->Category}}</span>
                                <span class="year">{{$moviel->release_date}}</span>
                            </div>
                        </a>

                    </div>

                </div>
                @endforeach
                <!-- END MOVIE ITEM -->

            </div>
        </div>
    </div>
    <!-- END LATEST SERIES SECTION -->

    <!-- SPECIAL MOVIE SECTION -->
    <div class="section">
        <div class="hero-slide-item">
            <img src="./images/transformer-banner.jpg" alt="">
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
                <div class="item-content-wraper">
                    <div class="item-content-title">
                        Transformer
                    </div>
                    <div class="movie-infos">
                        <div class="movie-info">
                            <i class="bx bxs-star"></i>
                            <span>9.5</span>
                        </div>
                        <div class="movie-info">
                            <i class="bx bxs-time"></i>
                            <span>120 mins</span>
                        </div>
                        <div class="movie-info">
                            <span>HD</span>
                        </div>
                        <div class="movie-info">
                            <span>16+</span>
                        </div>
                    </div>
                    <div class="item-content-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non odit, cum
                        vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione mollitia
                        accusantium, facere ab suscipit.
                    </div>
                    <div class="item-action">
                        <a href="#" class="btn btn-hover">
                            <i class="bx bxs-right-arrow"></i>
                            <span>Watch now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SPECIAL MOVIE SECTION -->

    <!-- LATEST SERIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest series
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                @foreach($cmovie as $movie)
                <div class="movie-card">
                    <div class="card-head">
                        <img src="{{ Voyager::image($movie->poster)}}" alt="" class="card-img">

                        <div class="card-overlay">

                            <div class="bookmark">
                                <ion-icon name="bookmark-outline"></ion-icon>
                            </div>

                            <div class="rating">
                                <ion-icon name="star-outline"></ion-icon>
                                <span>{{$movie->rating}}</span>
                            </div>

                            <div class="play">
                                <a href="/movie/{{$movie->title}}" title="Website name">
                                    <ion-icon name="play-circle-outline"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <a href="/movie/{{$movie->title}}" title="Website name">
                            <h3 class="card-title">{{$movie->title}}</h3>
                            <div class="card-info">
                                <span class="genre">{{$movie->Category}}</span>
                                <span class="year">{{$movie->release_date}}</span>
                            </div>
                        </a>
                    </div>

                </div>
                @endforeach
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST SERIES SECTION -->


    <!---------- Footer --------->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact us</a></li>
                        <li><a href="/privacy">Privacy policy</a></li>

                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="/faq">FAQ</a></li>
                        <!-- <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li> -->
                    </ul>
                </div>
                <!-- <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dress</a></li>
                </ul>
            </div> -->
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>E-mail</h4>
                    <ul>
                        <li><a href="mailto: animaxproject@gmail.com">animaxproject@gmail.com</a></li>

                    </ul>
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
    <script src="{{ asset('./jquery/jquery.js')}}"></script>

</body>

</html>