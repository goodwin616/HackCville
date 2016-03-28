@extends('layouts.base') @include('layouts.emailsignup')

<head>
    <title>HackCville - Home</title>
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

    <!-- By the Numbers -->
    <div id="numbers" class="numbers tint tint-dark-blue" data-speed="2" data-type="background">
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

</body>

@endsection
