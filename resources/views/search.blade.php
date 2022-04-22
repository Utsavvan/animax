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


    <title>Search Page</title>
</head>
<body>

<!-- nav bar -->

<input type="checkbox" id="check">
    <nav>
        <a href="/" title="Website name">
            <div class="icon">Ani<b style="color: red;">M</b>ax</div>
        </a>
        <div class="search_box">
            <form action="/search">
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

<div class="section">
    <div class="container">
        <div class="section-header">
            Search Results
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel">
            <!-- Suggested MOVIE ITEM -->
            @foreach($data as $smovie)
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
                            <a href="/movie/{{$smovie->title}}" title="Website name">
                            <div class="play">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </div>
                            </a>
                        </div>
                    </div>


                    <div class="card-body">
                        <a href="/movie/{{$smovie->title}}" title="Website name">
                        <h3 class="card-title">{{$smovie->title}}</h3>

                        <div class="card-info">
                            <span class="genre">{{$smovie->Category}}</span>
                            <span class="year">{{$smovie->release_date}}</span>
                        </div>
                        </a>
                    </div>

                </div>
        @endforeach
        <!-- END MOVIE ITEM -->
        </div>
    </div>
</div>

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
</body>
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
</html>