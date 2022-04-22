<!DOCTYPE html>
<html>

<head>
    <title>FAQ</title>
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

    <style>
        body {
            background-color: #181616;
            ;
        }
        
        .layout {
            width: 600px;
            margin: auto;
        }
        
        .main-color {
            color: var(--main-color);
        }
        
        .pricing-box.hightlight {
            border-top: 5px solid var(--main-color);
        }
        
        .accordion {
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            background: white;
            border-radius: 10px;
        }
        
        .accordion__question p {
            margin: 5px;
            padding: 0;
            font-family: Verdana;
            font-size: 20px;
        }
        
        .accordion__answer p {
            margin: 5px;
            padding: 10px;
            font-size: large;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: rgb(255, 255, 255);
            background: #c0392b;
            border-radius: 10px;
        }
        
        .accordion:hover {
            cursor: pointer;
        }
        
        .accordion__answer {
            display: none;
        }
        
        .accordion.active .accordion__answer {
            display: block;
        }
        
         :root {
            --main-color: #c0392b;
        }
        
        .pricing-header {
            margin-bottom: 30px;
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            text-transform: uppercase;
            color: #ffffff;
        }
    </style>
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

    <div class="pricing-header">
        An<span class="main-color">i</span>Max
    </div>
    <div class="layout">
        <div class="accordion">
            <div class="accordion__question">
                <p>Where is Taj Mahal located?</p>

            </div>
            <div class="accordion__answer">
                <p>Taj Mahal is located in Agra, Uttar Pradesh.</p>

            </div>
        </div>
        <div class="accordion">
            <div class="accordion__question">
                <p>How many planets are there in solar system?</p>

            </div>
            <div class="accordion__answer">
                <p>
                    There are eight planets in solar system. Mercury, Venus, Earth, Mars, Jupiter, Saturn, Uranus, and Neptune.
                </p>

            </div>
        </div>
    </div>

    <script>
        let answers = document.querySelectorAll(".accordion");
        answers.forEach((event) => {
            event.addEventListener('click', () => {
                if (event.classList.contains("active")) {
                    event.classList.remove("active");
                } else {
                    event.classList.add("active");
                }
            })
        })
    </script>
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