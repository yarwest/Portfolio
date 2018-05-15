<nav class="navbar navbar-fixed-top master-top-menu">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Yarwest</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li {!! Request::segment(2) === null ? 'class="active"' : '' !!}><a href="#" style="text-transform: capitalize">Dashboard</a></li>
                <li {!! Request::segment(2)==='site_meta' ? 'class="active"' : '' !!}><a href="#">Site Meta</a></li>
                <li {!! Request::segment(2)==='portfolio_items' ? 'class="active"' : '' !!}><a href="#">Portfolio Items</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
