<nav id="navbar" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="btn btn-default navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#nav-main">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </a>

            <a class="btn btn-default navbar-toggle navbar-btn toggle-sidebar" data-toggle="button">
                <span class="glyphicon glyphicon-search"></span>
            </a>

            <a class="navbar-brand" href="/">{{ config('app.name', 'Site') }}</a>
        </div>

        <div class="collapse navbar-collapse" id="nav-main">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->email }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ action('AdvertController@create') }}">
                                    <span class="glyphicon glyphicon-plus"></span> New Advert
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-log-out"></span> Logout
                                </a>
                                {!! Form::open(['url' => '/logout', 'method' => 'post', 'id' => 'logout-form', 'class' => 'hidden']) !!}
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>

            <a class="btn btn-default navbar-btn navbar-right toggle-sidebar hidden-xs" data-toggle="button">Filter</a>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>