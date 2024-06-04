<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar Start -->
        @include('includes.navbar')
        <!-- Navbar End --> 

        
        
        <!-- Spinner Start -->
        @include('includes.spinner')
        <!-- Spinner End -->

        

       
        @yield('content')
        

        <!-- Footer Start -->
        @include('includes.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('includes.jsfooter')

</body>

</html>