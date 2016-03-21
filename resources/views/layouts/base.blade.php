<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
</head>

<body>
    <div class="container">
        <nav class="cntrl-nav navbar omg_component nav-dark navbar-transparent">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header">
                    <a class="navbar-toggle collapsed icon ion-navicon nav-collapse-icon" data-target="#mainmenu" data-toggle="collapse"></a>
                    <a class="navbar-brand" href="/">
                        <img alt="image" class="img-responsive" src="img/logo.jpg">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="mainmenu">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="">
                            <a href="/about" class="" style="color:blue;">About</a>
                        </li>
                        <li class="">
                            <a href="/events" class="" style="color:blue;">Events</a>
                        </li>
                        <li class="">
                            <a href="/news" class="" style="color:blue;">News</a>
                        </li>
                        <li class="">
                            <a href="/contact" class="" style="color:blue;">Contact</a>
                        </li>
                        <li class="">
                            <a href="/join" class="" style="color:blue;">Join</a>
                        </li>
                        <li class="">
                            <a href="/login" class="" style="color:blue;">Login</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>

    @yield('content')

</body>

<footer class="omg_component footer-7">
    <div class="bg-color bg-black color-white" style="background-color: rgb(9, 9, 9);">
        <div class="container padd-top-xs padd-bottom-lg">
            <div class="row capitalize xs-text-left">
                <div class="col-md-5">

                    <p class="color-primary padd-top-xs">Hackcville builds student careers in entrepreneurship and falconry.
                        <br>
                        <br>we are a 501(c)3 non-profit organization and we deserve to get some donations from your broke-ass.</p>
                    <p class="padd-bottom-xs color-primary social">
                        <a href="#" class="icon ion-social-facebook"></a>
                        <a href="#" class="icon ion-social-googleplus"></a>
                        <a href="#" class="icon ion-social-instagram"></a>
                        <a href="#" class="icon ion-social-twitter"></a>
                    </p>
                    <p class="color-primary terms">9 elliewood avenue
                        <br>Charlottesville, VA 22903
                        <br>
                    </p>
                </div>
                <div class="col-md-2 col-md-offset-1">
                    <h4 class="hero-subtitle padd-bottom-xs padd-top-xs">
                            Categories
                        </h4>
                    <p class="color-primary"><a href="#" class="">About</a>
                    </p>
                    <p class="color-primary"><a href="#" class="">T</a>eam</p>
                    <p class="color-primary"><a href="#" class="">E</a>vents</p>
                    <p class="color-primary">Media&nbsp;</p>
                    <p class="color-primary"><a href="#" class="">C</a>ontact</p>
                    <p class="color-primary"><a href="#" class="">A</a>pply</p>
                </div>

                <div class="col-md-2">
                    <h4 class="hero-subtitle padd-bottom-xs padd-top-xs">
                            Quick Links
                        </h4>
                    <p class="color-primary">Hustle Class</p>
                    <p class="color-primary">The pioneer</p>
                    <p class="color-primary">Rethink</p>
                </div>
                <div class="col-md-2">
                    <h4 class="hero-subtitle padd-bottom-xs padd-top-xs">
                            hello@hackcville.com</h4>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>
