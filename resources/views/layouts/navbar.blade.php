@section('navbar')
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
                <a href="/about" class="" style="color:#1e73be; margin:auto;">About</a>
              </li><li class="">
                <a href="/events" class="" style="color:#1e73be; margin:auto;">Events</a>
              </li><li class="">
                <a href="/news" class="" style="color:#1e73be; margin:auto;">News</a>
              </li><li class="">
                <a href="/contact" class="" style="color:#1e73be; margin:auto;">Contact</a>
              </li><li class="">
                <a href="/join" class="" style="color:#1e73be; margin:auto;">Join</a>
              </li>
              </li><li class="">
                <a href="/login" class="" style="color:#1e73be; margin:auto;">Login</a>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
@endsection