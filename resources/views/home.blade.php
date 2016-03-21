@extends('layouts.base') 
@include('layouts.emailsignup')

<head>
    <title>HackCville - Home</title>
    <style>
        img-diag {
            width: 100px;
            height: 100px;
            -webkit-clip-path: polygon(0 0, 0 100px, 100px 50px, 100px 0);
        }
        #cover {
            background: url(img/cover.jpg) 50% 0 fixed;
            opacity: 0.4;
            filter: alpha(opacity=40);
            height: auto;
            margin: 0 auto;
            width: 100%;
            position: relative;
            padding: 100px 0;
        }
        #about {
            background: blue 50% 0 fixed;
            opacity: 0.4;
            filter: alpha(opacity=40);
            height: auto;
            margin: 0 auto;
            width: 100%;
            position: relative;
            padding: 200px 0;
        }
        #numbers {
            background: url(img/cover.jpg) 50% 0 fixed;
            height: auto;
            margin: 0 auto;
            width: 100%;
            position: relative;
            padding: 100px 0;
            color: #fff;
        }
    </style>

    <script>
        $(document).ready(function() {
            // cache the window object
            $window = $(window);

            $('section[data-type="background"]').each(function() {
                // declare the variable to affect the defined data-type
                var $scroll = $(this);

                $(window).scroll(function() {
                    // HTML5 proves useful for helping with creating JS functions!
                    // also, negative value because we're scrolling upwards
                    var yPos = -($window.scrollTop() / $scroll.data('speed'));

                    // background position
                    var coords = '50% ' + yPos + 'px';

                    // move the background
                    $scroll.css({
                        backgroundPosition: coords
                    });
                }); // end window scroll
            }); // end section function
        }); // close out script
    </script>

</head>

@section('content')

<body>

    <!-- Cover -->
    <section id="cover" data-speed="6" data-type="background">
        <div class="container">
            <div class="row-fluid text-center">
                <h1>WE'RE<br>HACKCVILLE.</h1>
                <br>
                <h3>Our programs prepare students like you for careers in startups and entreprenuership.</h3>
                <span><a href="#about">LEARN MORE</a></span>
            </div>
        </div>
    </section>

    <!-- HackCville About -->
    <section id="about" data-speed="4" data-type="background">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-lg-4">
                    <img class="img-responsive" src="http://hackcville.com/wp-content/uploads/2014/09/hackcville-logo1.png">
                </div>
                <div class="col-lg-4">
                    <img class="img-responsive" src="http://hackcville.com/wp-content/uploads/2014/09/hackcville-logo1.png">
                </div>
                <div class="col-lg-4">
                    <img class="img-responsive" src="http://hackcville.com/wp-content/uploads/2014/09/hackcville-logo1.png">
                    <img class="img-responsive" src="http://hackcville.com/wp-content/uploads/2014/09/hackcville-logo1.png">
                </div>
            </div>
        </div>
    </section>

    <!-- By the Numbers -->
    <section id="numbers" data-speed="2" data-type="background">
        <div class="container">
            This is the final section!
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section id="newsletter" data-speed="2" data-type="background">
        <div class="container">
            This is the final section!
        </div>
    </section>


    <section class="">
        <div class="">
            <div class="slide">
                <div class="">
                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <h1 class="">Apply to our programs</h1>
                                    <p class="text-sm  text-center" style="font-size: 24px;">
                                        HackCville offers three programs for students interested
                                        <br>in entrepreneurship, media and education.&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="">
            <div class="">
                <div class="row">
                    <h1 class="">programs for any interest.</h1>
                    <div class="">
                        <div class="">
                            <div class="overlay">
                                <div class="">
                                    <a href="" class="">Take a look</a>
                                </div>
                            </div>
                        </div>
                        <p class="">
                            Hustle class</p>
                    </div>

                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="">
                                    <a href="" class="btn btn-white-border">take a look</a>
                                </div>
                            </div>
                        </div>
                        <p class="">
                            The Pioneer</p>
                    </div>

                    <div class="col-md-4 col-sm-6 padd-top-md padd-bottom-md">
                        <div class="bg-img" style="background-image:url('https://images.unsplash.com/photo-1453133451515-5ff7c1d0d63c?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;w=400&amp;fit=max&amp;s=8e29eb26ae7415b02c1d1af049595152')">
                            <div class="overlay">
                                <div class="padd-top-2x padd-bottom-2x text-center">
                                    <a href="#" class="btn btn-white-border">take a look</a>
                                </div>
                            </div>
                        </div>
                        <p class="hero-subtitle text-center padd-top-xs" style="font-size: 20px;">
                            Rethink</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @yield('emailsignup')


</body>

@endsection
