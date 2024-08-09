<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>

<body>
    
    @include('home.header')
        <!-- Navbar End -->


        <!-- Carousel Start -->
        @include('home.slider')
        <!-- Carousel End -->


        <!-- Search Start -->
        @include('home.search')
        <!-- Search End -->


        <!-- Category Start -->
        @include('home.category')
        <!-- Category End -->


        <!-- About Start -->
        @include('home.about')
        <!-- About End -->


        <!-- Jobs Start -->
        @include('home.job')
        <!-- Jobs End -->


        <!-- Testimonial Start -->
        {{-- @include('home.testimonial') --}}
        <!-- Testimonial End -->
        

        <!-- Footer Start -->
        @include('home.footer')
</body>

</html>