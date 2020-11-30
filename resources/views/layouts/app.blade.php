<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>USTH OMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url('css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ url('css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ url('css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="{{ url('js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ url('js/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ url('js/startmin.js') }}"></script>

    <div id="app">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="/home">Home</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Top Navigation: Left Menu -->
            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="#"><i class="fa fa-home fa-fw"></i> USTH</a></li>
            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right nav navbar-inverse">
                <!-- Authentication Links -->
                @guest
                <li>
                    <a style="" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->username }}
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endguest
                @if(!Auth::check())
                <li>
                    <a href="#">Guest access</a>
                </li>
                @endif
            </ul>
        </nav>
    </div>

    @if(Auth::check())
    @if(Auth::user()->userType == 'student' || Auth::user()->userType == 'admin')
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">

            <ul class="nav" id="side-menu">
                <!-- <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        {{Form::open(['method'=>'GET'])}}
                            {{Form::text('search', '', ['placeholder' => 'Search...'])}}
                            <button class="btn btn-primary" name="submit-search" type="submit">
                                <i class="fa fa-search" name="submit-search"></i>
                            </button>
                        {{Form::close()}}
                    </div>
                </li> -->
                <li>
                    <a> Personal information <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#"><i class="fa fa-user"></i> User</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-info-circle"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-graduation-cap"></i> Student</a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(Auth::user()->userType == 'admin')
                <li>
                    <a>Academic information <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#"><i class="fa fa-book"></i> Course</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-university"></i> Department</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop"></i> Program</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-key"></i> Major</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar"></i> Year</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a>Transcript & Diploma information <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#"><i class="fa fa-calculator"></i> Course Report</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sticky-note-o"></i> Transcript</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sticky-note"></i> Transcript Detail</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-trophy"></i> Diploma</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>

        </div>
    </div>
    @endif

</head>

<body>
    <main class="py-4">
        @yield('content')
    </main>
</body>

</html>
