<!DOCTYPE html>
<html lang="en">

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">HackCville</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       <ul class="nav navbar-nav">
                           <li>
                               <a href="/">Home</a>
                           </li>
                           <li>
                               <a href="/about">About</a>
                           </li>
                           <li>
                               <a href="/events">Events</a>
                           </li>
                           <li>
                               <a href="/news">News</a>
                           </li>
                           <li>
                               <a href="/contact">Contact</a>
                           </li>
                           <li>
                               <a href="/join">Join</a>
                           </li>
                           <li>
                               <a href="/login">Login</a>
                           </li>
                       </ul>
                   </div>
                </div>
            </nav>
        </div>

        @yield('content')

    </body>

    <footer class="footer">
        <div class="container">
            <p class="text-muted text-center">Copyright &copy; 2016 <a href="/contact">HackCville</a>.
            <br>
                <small>Last updated on February 29, 2016.</small>
            </p>
        </div>
    </footer>
</html>