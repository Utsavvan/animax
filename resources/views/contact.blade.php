<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/Style01.css">
 <!-- Css -->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 <link rel="stylesheet" type="text/css" href={{ asset("./css/style.css")}}>


 <!-- GOOGLE FONTS -->
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
 

 <!-- Navbar search box script  -->
 <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    </head>

<body >
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
	


    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>   </p>
        </div>
        
        <div class="container01">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing </p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>7852574854</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>animaxstrem66@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="ContactForm">
                <form>
                    <h2>Send Massage</h2>
                    <div class="inputBox">
                        <input type="text" name="" required>
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="" required>
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type you Message.....</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
    
   
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