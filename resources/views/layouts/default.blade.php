<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.header')
</head>

<body>
    <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
                <i class="fas fa-bars"></i>
        </span>
        
        <a class="logo" href="#"><span class="name">englishcom.uk</span></a>

        <ul class="main-nav" id="js-menu">
        <li>
            <a class="nav-links" id="home" href="{{ url('/') }}">Home</a>
        </li>
        <li>
            <a class="nav-links" id="class" href="{{ url('/classes') }}">Classes</a>
        </li>
        <li>
            <a class="nav-links" id="international" href="{{ url('/international') }}">International</a>
        </li>
        <li>
            <a class="nav-links" id="national" href="{{ url('/national') }}">National</a>
        </li>
        <!--<li>
            <a class="nav-links" id="blog" href="{{ url('/blog') }}">Blog</a>
        </li>-->
        <li>
            <a class="nav-links" id="contact" href="{{ url('/contact') }}">Contact</a>
        </li>
        </ul>
  </nav>
  
    <div class="container">
        @yield('content')
    </div>


    <footer class="text-center text-white" style="background-color: #f1f1f1;">
    <!-- Grid container -->
    <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
        <!-- Facebook -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://www.facebook.com/englishcom.uk"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
        ></a>

        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" >
    © 2021 Copyright:englishcom.uk

    </div>

    </footer>
    @include('layouts.footer')
    
    <script type="text/javascript">
        $(document).ready(function() {
            let mainNav = document.getElementById("js-menu");
            let navBarToggle = document.getElementById("js-navbar-toggle");

            navBarToggle.addEventListener("click", function() {
                mainNav.classList.toggle("active");
            });


            $(".main-nav li a").click(function () {
                var id = $(this).attr("id");
                $('#' + id).siblings().find(".active").removeClass("active");
                $('#' + id).addClass("active");
                localStorage.setItem("selectedolditem", id);
            });

            var selectedolditem = localStorage.getItem('selectedolditem');

            if (selectedolditem != null) {
                $('#' + selectedolditem).siblings().find(".active").removeClass("active");
                $('#' + selectedolditem).addClass("active");
            }else{
                $('#home').addClass("active");
            }

        });
    </script>

</body>


</html>
