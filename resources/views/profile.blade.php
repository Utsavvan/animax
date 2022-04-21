<!DOCTYPE html>
<html>

<head>
    <title>Watch movies,series,anime</title>

    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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

<body>

<!------------ Navbar ------------>

<nav>
    <a href="/" title="Website name">
        <div class="icon">Ani<b style="color: red;">M</b>ax</div>
    </a>
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
        <li><a href="#">about</a></li>

        @if (Auth::check())
            <li><a href="/profile"><i class="fa fa-user-circle-o user" aria-hidden="true"></i></a></li>Profile
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

<div class="wrapper">
    <div class="left">

        <h4>{{$username}}</h4>

    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            @if (session()->has('message1'))
                <div class="alert alert-success">
                    {{ session('message1') }}
                </div>
            @endif
            <div class="info_data">
                <form method="post">
                    @csrf
                    <div class="data col">
                        <h4>Email</h4>
                        <input type="email" class="form-control col-md-7 col-xs-12"
                               placeholder="" value="{{$email}}" name="email">
                    </div>
                    <div class="data col">
                        <h4>Username</h4>
                        <input type="text" class="form-control col-md-7 col-xs-12"
                               placeholder="" value="{{$username}}" name="username">
                    </div>
                    <button type="submit" name="form1" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

        <div class="projects">
            <h3>subscription</h3>
            <div class="projects_data">
                <div class="data col">
                    @if(Auth::user()->role_id==5)
                    <h4>Premium</h4>
                    <p>₹1500/month</p>
                    @else
                    <h4>No plan subscribed</h4>
                    @endif
                </div>
                <div class="data col">
                    <h4>Content</h4>
                    <p>650+ top movies</p>
                </div>
            </div>
        </div>

        <div class="password">

            <h1>Password</h1>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <form data-parsley-validate class="form-horizontal form-label-left" method="POST">
                @csrf
                {{--        @method('PATCH')--}}
                <div class="form-group">
                    <input type="password" class="form-control col-md-7 col-xs-12"
                           placeholder="Enter old password" name="oldpassword">
                </div>

                <div class="form-group">
                    <input type="password" placeholder="Enter new password"
                           class="form-control col-md-7 col-xs-12" name="newpassword">
                </div>
                <button type="submit" name="form2" class="btn btn-primary">Update</button>

            </form>
        </div>


        <br>
        <button class="favorite styled" type="button">
            <a href="/logout">Log Out</a>
        </button>


    </div>

</div>

<!---------- Footer --------->

<footer class="footer">
    <div class="container01">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- OWL CAROUSEL -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
<!--- ionicon link-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- APP SCRIPT -->
<script src="{{asset('jquery/jquery.js')}}"></script>

</body>

</html>