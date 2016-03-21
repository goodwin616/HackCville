@extends('layouts.base')

<head>
    <title>HackCville - Home</title>
    <style>
        img-diag {
            width: 100px;
            height: 100px;
            -webkit-clip-path: polygon(0 0, 0 100px, 100px 50px, 100px 0);
        }
        #cover {
            background: url(images/intro.png) 50% 0 fixed;
            opacity: 0.4;
            filter: alpha(opacity=40);
            height: auto;
            margin: 0 auto;
            width: 100%;
            position: relative;
            padding: 100px 0;
        }
        #about {
            background: blue 5% 0 fixed;
            opacity: 0.4;
            filter: alpha(opacity=40);
            height: auto;
            margin: 0 auto;
            width: 100%;
            position: relative;
            padding: 200px 0;
        }
        #numbers {
            background: url(images/about.png) 50% 0 fixed;
            height: auto;
            margin: 0 auto;
            width: 100%;
            position: relative;
            padding: 100px 0;
            color: #fff;
        }
        #newsletter {
            background: url(images/about.png) 50% 0 fixed;
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
            <div class="row-fluid">
                Content goes here!
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
    </div>



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
    <section class="omg_component">
        <div class="bg-img parallax-content" style="background-image: url(&quot;https://images.unsplash.com/photo-1450297428000-5f0b50540da9?crop=entropy&amp;fit=crop&amp;fm=jpg&amp;h=675&amp;ixjsv=2.1.0&amp;ixlib=rb-0.3.5&amp;q=80&amp;w=1375&quot;);" data-stellar-background-ratio="0.5">
            <div class="overlay padd-top-2x padd-bottom-2x" style="background-color: rgba(52, 52, 52, 0.580392);">
                <div class="inner text-center color-white">
                    <h1 class="title uppercase" style="text-align: center; font-size: 40px; letter-spacing: 2px;"> Applications due jan 9th</h1>
                    <p class="inner col-primary padd-bottom-xs" style="text-align: left; font-size: 20px; letter-spacing: 1px; font-family: Karla; font-weight: 100;">HackCville offers three programs for students interested in entrepreneurship, media, and education.&nbsp;</p>
                    <div class="padd-top-xs">
                        <a class="btn btn-white btn-pill padd-bottom-xs uppercase" style="color: rgb(255, 255, 255); background-color: rgb(255, 255, 255);">learn more&nbsp;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="" style="background-image:url('https://images.unsplash.com/photo-1453230645768-7ecb0653013d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;w=1080&amp;fit=max&amp;s=48d3a919723adf0bb64483dfa49973fd');">
            <div class="overlay" style="background-color: rgba(12, 62, 217, 0.368627);">
                <div class="container full-height">
                    <div class="v-align full-height">
                        <div class="h-align ">
                            <div class="inner padd-top-2x padd-bottom-2x text-center">

                                <h1 class="color-white title">WANT UPDATES?</h1>
                                <p class="text-sm color-white">
                                    Tune into a community of hundreds of students and alumni that are interested in innovation, entrepreneurship, and startups.</p>
                                <form class="row padd-bottom-xs mailchimp padd-top-md" action="http://us1.list-manage.com/subscribe/post?u=a0632cd90346d0712707d422e&amp;id=992c4932eb" method="post" target="_blank">
                                    <div class="form-group col-md-3 col-md-offset-1 no-padding">
                                        <input type="text" class="form-control input-field" name="FNAME" placeholder="Name" id="mce-FNAME">
                                    </div>
                                    <div class="form-group col-md-4 no-padding">
                                        <input type="text" class="form-control input-field" placeholder="E-mail address" name="EMAIL" id="mce-EMAIL">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <button type="submit" class="btn btn-block btn-lg btn-black">Subscribe</button>
                                    </div>
                                    <p class="form-group form-callback-message col-md-10 col-md-offset-1 no-padding padd-top-xs"></p>
                                </form>
                                <p class="color-white">
                                    We promise not to spam.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</body>

@endsection
