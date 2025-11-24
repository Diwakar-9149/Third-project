<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        University Website Desing - Easy Tutorials
    </title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
     @yield('css')
</head>
    <body>
        <section class="header">
            <nav>
                <a href="index.html"><img src="{{asset('image/logo.png')}}"></a>
                <div class="nav-links">
                   <!-- <i class="fa fa-times" onclick="hideMenu()" aria-hidden="true"></i>-->
                    <ul>
                        <li><a href="{{url('/')}}">HOME</a></li>
                        <li><a href="{{url('/log')}}">ABOUT</a></li>
                        <li><a href="{{url('/blog')}}">BLOG</a></li>
                        <li><a href="{{url('/contact')}}">CONTACT</a></li>
                    </ul>
                </div>
               <!-- <i class="fa fa-bars" onclick="showMenu()" aria-hidden="true"></i>-->
            </nav>
            
           @yield('header-content') 
        </section>
             @yield('content') <!-- Content will be injected here -->
        <section class="footer">
            <h4>About US</h4>
            <p>Lorem ipsum dolor sit amet, consecture adipiscing elitr. Pellentsque aliquet turpis nulla,relefend faucibus est sollicitudin ut<br> .Maecenas ut venenatis ex, et dapibus purus Donec sit.
            </p>
            <div class="icon">
               <a href=""> <i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
            <p>Made with <i class="fa fa-heart-o"></i> By Raja Diwakar</p>
        </section>
        ! ---------------js for toggle menu--
        <script>
            var navlinks = documnet.getElementId("navlinks");

            function showMenu() {
                navlinks.style.right = "0";
            }

            function hideMenu() {
                navlinks.style.right = "-200px";
            }
        </script>
    </body>
</html>