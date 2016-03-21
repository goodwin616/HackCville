<!DOCTYPE html>
<html lang="en">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta charset="UTF-8">
      <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">

    <body>
        <div class="container">
            <nav class="cntrl-nav navbar omg_component nav-dark navbar-transparent">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->

                  <div class="navbar-header">
                    <a class="navbar-toggle collapsed icon ion-navicon nav-collapse-icon" data-target="#mainmenu" data-toggle="collapse"></a>
                      <a class="navbar-brand" href="/"><img alt="image" style="width:8%;" class="img-responsive" src="img/logo.jpg"></a>
                  </div><!-- Collect the nav links, forms, and other content for toggling -->

                  <div class="collapse navbar-collapse" id="mainmenu">
                    <ul class="nav navbar-nav navbar-right">
                     
                      <li class="">
                        <a href="/about" class="" style="color:#2375bc; margin:auto;">About</a>
                      </li><li class="">
                        <a href="/events" class="" style="color:#2375bc; margin:auto;">Events</a>
                      </li><li class="">
                        <a href="/news" class="" style="color:#2375bc; margin:auto;">News</a>
                      </li><li class="">
                        <a href="/contact" class="" style="color:#2375bc; margin:auto;">Contact</a>
                      </li><li class="">
                        <a href="/join" class="" style="color:#2375bc; margin:auto;">Join</a>
                      </li>
                      </li><li class="">
                        <a href="/login" class="" style="color:#2375bc; margin:auto;">Login</a>
                      </li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>

        @yield('content')

    </body>

    <footer class="omg_component footer-7">
        <div class="bg-color bg-black color-white" style="background-color: rgb(9, 9, 9);">
            <div class="container padd-top-xs padd-bottom-lg">
                <div class="row capitalize xs-text-left">
                    <div class="col-md-5">
                        
                        <p class="color-primary padd-top-xs">Hackcville builds student careers in entrepreneurship and falconry.<br><br>we are a 501(c)3 non-profit organization and we deserve to get some donations from your broke-ass.</p>
                        <p class="padd-bottom-xs color-primary social">
                            <a href="#" class="icon ion-social-facebook"></a>
                            <a href="#" class="icon ion-social-googleplus"></a>
                            <a href="#" class="icon ion-social-instagram"></a>
                            <a href="#" class="icon ion-social-twitter"></a>
                        </p>
                        <p class="color-primary terms">9 elliewood avenue<br>Charlottesville, VA 22903<br></p>
                    </div>
                    <div class="col-md-2 col-md-offset-1">
                        <h4 class="hero-subtitle padd-bottom-xs padd-top-xs">
                            Categories
                        </h4>
                        <p class="color-primary"><a href="#" class="">About</a></p><p class="color-primary"><a href="#" class="">T</a>eam</p>
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