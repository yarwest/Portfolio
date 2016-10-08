<nav class="navbar navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Yarno Boelens</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::segment(1) === 'portfolio' ? 'active' : '' }}"><a href="/portfolio">Portfolio</a></li>
                <li class="{{ Request::segment(1) === 'crew' ? 'active' : '' }}"><a href="/crew">The Crew</a></li>
                <li class="{{ Request::segment(1) === 'contact' ? 'active' : '' }}"><a href="/contact">Contact</a></li>
                <!--@if(Auth::check())

                @if(Auth::user()->isAdmin)

                @endif
                <li class="logout"><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                @else
                <li class="{{ Request::segment(1) === 'login' ? 'active' : '' }}"><a href="/login"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                <li class="{{ Request::segment(1) === 'register' ? 'active' : '' }}"><a href="/register"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
                @endif -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
