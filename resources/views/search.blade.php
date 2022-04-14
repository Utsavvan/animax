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
<input type="checkbox" id="check">
<nav>
    <div class="icon">Ani<b style="color: red;">M</b>ax</div>
    <div class="search_box">
        <form action="search">
            <input type="search" name="query" placeholder="Search here">
            {{--        <span class="fa fa-search"></span>--}}
            <button id="s-btn" type="submit">Search</button>
        </form>
    </div>
    <ol>
        <li><a href="#">home</a></li>
        <li><a href="#">contact</a></li>
        <li><a href="#">services</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">Register</a></li>
        <li><a href="/login">login</a></li>
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