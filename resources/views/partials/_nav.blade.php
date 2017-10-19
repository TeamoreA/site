<nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ HTML::image('images/logo3.png') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                     <ul class="nav navbar-nav">
                        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
                        <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
                        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
                        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
                      </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"> <span class="glyphicon glyphicon-user">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <b>Hello </b><span class="glyphicon glyphicon-user">{{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('posts.index') }}">Posts</a></li>
                                    <li><a href="{{ route('categories.index') }}">Categories</a></li>
                                    <li><a href="{{ route('tags.index') }}">Tags</a></li>
                                    <li role="separator" class="divider"></li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>