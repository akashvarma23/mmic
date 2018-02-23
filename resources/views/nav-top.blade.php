<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->
            
            <!-- logo -->
            <div class="navbar-brand">
                <a href="{{url('/')}}" >
                    <img src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{url('/')}}" >Home</a>
                    </li>
                    <li><a href="{{url('/about-us')}}">About Us</a></li>
                    <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                    <li><a href="{{url('/experiences')}}">Experiences</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">User <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="{{url('/login')}}">Login</a></li>
                                <li><a href="{{url('/register')}}">Register</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>