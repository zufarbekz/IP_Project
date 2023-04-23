@extends('master')

@section('title', 'Main')

@section('content')

    <!-- start home -->
    <section class="banner-area">
        @include('layouts.home')
    </section>
    <!-- End home -->

    <div id="news"></div>
    <!-- Start news -->
    <section class="top-course-area section-gap">
        @include('layouts.news')
    </section>
    <!-- End news -->

    <div id="service"></div>
    <!-- Start service -->
    <section class="service-area section-gap">
        @include('layouts.service')
    </section>
    <!-- End service -->

    <div id="products"></div>
    <!-- Start products-->
    <section class="unique-feature-area section-gap" class="products">
        @include('layouts.products')
    </section>
    <!-- End products-->

    <div id="review"></div>
    <!-- Start review -->
    <section class="review-area section-gap">
        @include('layouts.review')
    </section>
    <!-- End review -->

    <div id="contact"></div>
    <!-- Start footer -->
    <footer class="bg-light text-center text-lg-start">
        @include('layouts.contact')
    </footer>
    <!-- End footer -->

    <script src="./resources/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
        var header = document.getElementById("navbarText");
        var links = header.getElementsByClassName("nav-link");
        for (var i = 0; i < links.length; i++) {
            links[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>

@endsection

