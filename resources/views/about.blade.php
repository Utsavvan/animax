<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OurTeam Section - FantacyDesigns</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-
B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
          rel="stylesheet">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous"/>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Navbar search box script  -->
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>

</head>

<body style="background: black;">
<!------------ Navbar ------------>

{{--nav bar--}}

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

<!---------------- End Of Navbar  --------------->


<div class="about">

    <h1 class="abouth">About Us:</h1>
    &nbsp;<h3>About Animax: </h3>
    <p style="text-align: center; font-size: large;">Stories move us.
        They make us feel more emotion, see new perspectives,
        and bring us closer to each other.
    <p>At Animax, we want to entertain the world. Whatever your taste, and no matter where you live, we give you
        access to best-in-class TV shows, movies and documentaries. Our members control what they want to watch,
        when they want it, with no ads, in one simple subscription. We’re streaming in more than 30 languages and
        190 countries, because great stories can come from anywhere and be loved everywhere. We are the world’s
        biggest fans of entertainment, and we’re always looking to help you find your next favorite story.</p>
    <p><b>Friendly User Interface </b>- Content organization on Disney+ Hotstar is a result of a thoughtful user
        experience
        approach and strong design principles that ensure that the user is not overwhelmed with the breadth of
        content available. Using a mix of algorithms and human curation, users at any stage of their interaction
        with Disney+ Hotstar will discover content and see their experience evolve with their interaction patterns
        over time.</p>
</div>
<h1 style="color: red; text-align: center;">About our teams</h1><br>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="images/Emm.png">
                </div>
                <h3 class="title">Emma.</h3>
                <span class="post">Web Developer</span>
                <ul class="social">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="images/Emm.png">
                </div>
                <h3 class="title">James.</h3>
                <span class="post">Web Designer</span>
                <ul class="social">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="images/Emm.png">
                </div>
                <h3 class="title">Zoe</h3>
                <span class="post">Full Stack</span>
                <ul class="social">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="images/Emm.png">
                </div>
                <h3 class="title">Lucas</h3>
                <span class="post">Graphic Designer</span>
                <ul class="social">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                    <li><a href="#" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
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

</html>