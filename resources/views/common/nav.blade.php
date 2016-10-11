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
            <div class="pull-left"><a href="{{ url('/') }}" id="ja_nav_home"><img src="{{ url('images/ja_nav_logo.jpg') }}" style="height: 48px;"></a></div>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar --> 
            <ul class="nav navbar-nav">
                <!--<li><a href="{{ url('/home') }}">Home</a></li>-->
                {{-- Menu for Users with Administration Role Only --}}
                @role('admin')
                <li class="dropdown">
                    <a href="#" id="ja_nav_getinv" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-btn fa-fw fa-cogs"></i>Administration<span class="caret"></span></a>
                    <ul class="dropdown-menu multi level" role="menu">
                        <li><a id="ja_nav_users" href="{{ url('/users') }}"><i class="fa fa-btn fa-fw fa-user"></i>Users</a></li>
                        <li><a id="ja_nav_roles" href="{{ url('/roles') }}"><i class="fa fa-btn fa-fw fa-users"></i>Roles</a></li>
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}
                    </ul>
                </li>
                @endrole
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                        <a id="ja_nav_about" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ "About Us" }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                            <li><a id="ja_nav_programs" href="{{ url('/') }}"><i class="fa fa-btn fa-fw fa-graduation-cap"></i>JA Programs</a></li>
                            <li><a id="ja_nav_faq" href="{{6}}"><i class="fa fa-btn fa-fw fa-question-circle"></i>FAQS</a></li>
                            <li><a id="ja_nav_goingon" href="{{ url('/') }}"><i class="fa fa-btn fa-fw fa-calendar-minus-o"></i>What's going on?</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                        <a id="ja_nav_getinv" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ "Get Involved" }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                            <li><a id="ja_nav_educator" href="{{ url('/educators/introduction') }}"><i class="fa fa-btn fa-fw fa-university"></i>Educator</a></li>
                            <li><a id="ja_nav_volunteer" href="{{ url('/volunteers/introduction') }}"><i class="fa fa-btn fa-fw fa-hand-paper-o"></i>Volunteer</a></li>
                            <li><a id="ja_nav_contribute" href="{{ url('/contributors') }}"><i class="fa fa-btn fa-fw fa-money"></i>Contribute</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a id="ja_nav_getinv" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ "Campaign" }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a id="ja_nav_team" href="{{ url('/campaign/team') }}"></i>Team</a></li>
                        <li><a id="ja_nav_teammember" href="{{ url('/campaign/teammember') }}"></i>Team Member</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li><a id="ja_nav_contact" href="{{ url('/contactus') }}">Contact Us</a></li>
                <li><a id="ja_nav_contribute" href="{{ url('/donation/donate') }}">Donate Now</a></li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    {{--<li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-lg fa-fw fa-sign-in"></i>Login</a></li>--}}
                    <li><a id="ja_login" href="{{ url('/login') }}">Login</a></li>
                    <li><a id="ja_register" href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a id="ja_logout" href="{{ url('/logout') }}"><i class="fa fa-btn fa-fw fa-sign-out"></i>Logout</a></li>
                            <li><a id="ja_changepw"href="{{ url('/change-password') }}"><i class="fa fa-btn fa-fw fa-lock"></i>Change Password</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
