<!-- header-start -->
<header>
    <div class="header-area ">
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-4 d-none d-md-block">
                        <div class="header_links ">
                            <ul>
                                <li><a href="{{$contacts->facebook}}"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="twiter" href="{{$contacts->twitter}}"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="insta" href="{{$contacts->instagram}}"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="logo">
                            <a href="{{route('index')}}">
                                <img src="/storage/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 d-none d-md-flex justify-content-end">
                        <nav class="navbar navbar-expand-md navbar-light ">
                            <div class="container">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <!-- Left Side Of Navbar -->
                                    <ul class="navbar-nav me-auto">

                                    </ul>

                                    <!-- Right Side Of Navbar -->
                                    <ul class="navbar-nav ms-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    @if(Auth::user()->role === 'admin')
                                                        <a class="dropdown-item" href="{{ route('admin.admin') }}">
                                                            Dashboard
                                                        </a>
                                                    @else
                                                        <a class="dropdown-item" href="{{ route('user.user') }}">
                                                            Dashboard
                                                        </a>
                                                    @endif

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        @if(Auth::user())
                        <div class="header_links ">
                            <ul>
                                <li><a class="user" href="{{route(Auth::user()->role === 'admin'?'admin.admin':'user.user')}}">

                                    @if(Auth::user()->avatar)
                                        <img src="{{Auth::user()->avatar}}" alt="">
                                    @else
                                        <i class="fa fa-user"></i>
                                    @endif
                               </a></li>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area white-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    @foreach($navbarMenus as $menu)
                                        @if(!$menu->parent)
                                            <li>
                                                <a
                                                    @if($menu->route === Route::currentRouteName())
                                                    class="active"
                                                    @endif
                                                    href="{{$menu->link}}">{{$menu->name}}
                                                    @if( count($menu->childs) )
                                                        <i class="ti-angle-down"></i>
                                                    @endif
                                                </a>
                                                @if( count($menu->childs) )
                                                    <ul class="submenu">
                                                        @foreach($menu->childs as $child)
                                                            <li><a href="{{$child->link}}">{{$child->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="get_serch">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="search_input" id="search_input_box">
                    <div class="container ">
                        <form class="d-flex justify-content-between search-inner" method="GET">
                            <input type="text" class="form-control" id="search_input" name="search" placeholder="Search Here">
                            <button type="submit" class="btn"></button>
                            <span class="ti-close" id="close_search" title="Close Search"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
