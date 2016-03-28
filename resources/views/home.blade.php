@extends('layouts.base') @include('layouts.emailsignup')

<head>
    <title>HackCville - Home</title>
    <style>
        .img-diag {
            width: 100px;
            height: 100px;
            -webkit-clip-path: polygon(0 0, 0 100px, 100px 50px, 100px 0);
        }
        #about {
            background: blue no-repeat center center fixed;
            display: table;
            height: 100%;
            position: relative;
            width: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            color: deepskyblue;
        }
        #numbers {
            /*            background: url(img/cover2.jpg) 50% 0 fixed;*/
            background: url(img/cover2.jpg) no-repeat center center fixed;
            display: table;
            height: 100%;
            position: relative;
            width: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            color: deepskyblue;
        }
        .text-vcenter {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }
        .text-vcenter h1 {
            font-size: 4.5em;
            font-weight: 700;
            margin: 0;
            padding: 0;
        }
        #home {
            background: url(img/cover.jpg) no-repeat center center fixed;
            display: table;
            height: 100%;
            position: relative;
            width: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            color: deepskyblue;
        }
        #learnmore {
            border-radius: 12px;
            color: white;
            font-weight: bold;
            background: deepskyblue;
            border-color: deepskyblue;
        }
        .tint {
            position: relative;
            float: left;
            margin-right: 20px;
            margin-bottom: 20px;
            cursor: pointer;
            box-shadow: rgba(0, 0, 0, .2) 3px 5px 5px;
        }
        .tint-dark-blue {
            background: rgba(0, 0, 255, 0.5);
        }
        .tint-light-blue {
            background: rgba(0, 255, 255, 0.5);
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
    <div id="home" class="home tint tint-dark-blue" data-speed="6" data-type="background">
        <div class="text-vcenter">
            <div class="col-lg-4 col-lg-offset-4">
                <h1>We're HackCville.</h1>
                <h3>Our programs prepare students like you for careers in startups and entreprenuership.</h3>
                <br />
                <a id="learnmore" href="#about" class="btn btn-default btn-lg">Learn more</a>
            </div>
        </div>
    </div>

    <!-- HackCville About -->
    <div id="about" class="about tint tint-light-blue" data-speed="4" data-type="background">
        <div class="text-vcenter">
            <div class="col-lg-4">
                <img class="img-responsive " src="http://hackcville.com/wp-content/uploads/2014/09/hackcville-logo1.png ">
            </div>
            <div class="col-lg-4">
                <img class="img-responsive " src="http://hackcville.com/wp-content/uploads/2014/09/hackcville-logo1.png ">
            </div>
            <div class="col-lg-4">
                <img class="img-responsive " src="http://hackcville.com/wp-content/uploads/2014/09/hackcville-logo1.png ">
                <img class="img-responsive " src="http://hackcville.com/wp-content/uploads/2014/09/hackcville-logo1.png ">
            </div>
        </div>
    </div>

    <!-- By the Numbers -->
    <div id="numbers" class="numbers tint tint-dark-blue" data-speed="2 " data-type="background">
        <div class="text-vcenter">
            <div class="col-lg-3">
                <h2>782
                        <br><strong>workshops</strong>
                    </h2>
            </div>
            <div class="col-lg-3">
                <h2>161
                        <br><strong>active student members</strong>
                    </h2>
            </div>
            <div class="col-lg-3">
                <h2>3
                        <br><strong>programs</strong>
                    </h2>
            </div>
            <div class="col-lg-3">
                <h2>100
                        <br><strong>other</strong>
                    </h2>
            </div>
        </div>
    </div>

    @yield('emailsignup')


</body>

@endsection
