<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css -->
    <link rel="stylesheet" type="text/css" href= "{{ asset('css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href= "{{ asset('css/movie-page.css') }}" >

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


    <title>Movie Page</title>
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
            <li><a href="#">home</a></li>
            <li><a href="#">contact</a></li>
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
    @foreach($movie as $movies)
    <section class="movie-banner">
        <div class="m-banner-img">
            <img src="{{ Voyager::image($movies->banner)}}" alt="" srcset="">
        </div>

        <div class="banner-container">
            <div class="title-container">
                <div class="title-top">
                    <div class="movie-title">
                        <h1>{{$movies->title}}</h1>
{{--                        @foreach($movie as $movie)--}}
{{--                            <h1>{{$movie->id}}</h1>--}}
{{--                            <h1>{{$movie->movie}}</h1>--}}
{{--                        @endforeach--}}
                    </div>
                    <div class="more-about-movie">
                        <span class="quality">{{$movies->quality}}</span>
                        <div class="rating">
                            {{$movies->rating}} <img src="https://img.icons8.com/external-tal-revivo-shadow-tal-revivo/11/000000/external-imdb-an-online-database-of-information-related-to-films-and-television-programs-logo-shadow-tal-revivo.png" />
                        </div>
                        <span>{{$movies->release_date}}</span>
                        <span>{{$movies->timing}}</span>
                    </div>
                    <div class="language">
                        <span>{{$movies->language}}</span>
                    </div>
                    <div class="details">
                        {{$movies->description}}
                    </div>
                </div>
                <div class="title-bottom">
                    <div class="category">
                        <strong>Category</strong><br/>
{{--                        <a href="">Action</a>,<a href="">Mistery</a>,<a href="">Comedy</a>--}}
                        {{$movies->Category}}
                    </div>
                    <a href="{{$movies->trailer}}" target="_blank" class="watch-btn">Watch Trailer</a>
                </div>
            </div>
            <div class="play-btn-container">
                <div class="play-btn">
                    <a href="javascript:void">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
            <div id="play" class="play">
                <!--close-btn--->
                <a href="javascript:void" class="close-movie">
                    <i class="fas fa-times"></i>
                </a>
                <!--movie------->
                <div class="play-movie">
                    <video id="m-video" controls>
                        <source src="{{ Voyager::image($movies->movie) }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <!-- LATEST SERIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest series
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- Suggested MOVIE ITEM -->
                @foreach($suggestedMovie as $smovie)
                    <div class="movie-card">
                        <div class="card-head">
                            <img src="{{ Voyager::image($smovie->poster)}}" alt="" class="card-img">

                            <div class="card-overlay">

                                <div class="bookmark">
                                    <ion-icon name="bookmark-outline"></ion-icon>
                                </div>

                                <div class="rating">
                                    <ion-icon name="star-outline"></ion-icon>
                                    <span>{{$smovie->rating}}</span>
                                </div>

                                <div class="play">
                                    <ion-icon name="play-circle-outline"></ion-icon>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <h3 class="card-title">{{$smovie->title}}</h3>

                            <div class="card-info">
                                <span class="genre">{{$smovie->Category}}</span>
                                <span class="year">{{$smovie->release_date}}</span>
                            </div>
                        </div>

                    </div>
            @endforeach
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
    <script src="{{ asset('./jquery/jquery.js')}}"></script>


</body>

</html>