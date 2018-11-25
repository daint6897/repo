<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BTdemo</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }} " />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        BTdemo
                    </a>
                </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <a href="{{ route('suaUser',Auth::user()->id) }}">
                                            Sua thong tin
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Thong Bao
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @foreach ($dataThongBao as $key=>$value )
                                            @if(Auth::user()->level ==3 && $value['idAdmin']==1)
                                                <p>-{{$value['noiDung']}}</p>
                                            @endif
                                            @if(Auth::user()->level ==2 && $value['idNguoiBan']==Auth::user()->id)
                                                <p>-{{$value['noiDung']}}</p>
                                            @endif
                                            @if(Auth::user()->level ==1 && $value['idUser']==Auth::user()->id)
                                                <p>-{{$value['noiDung']}}</p>
                                            @endif
                                        @endforeach
                                      </div>
                                    </div>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
                @if(Auth::check())
{{-- NGUOi Ban --}}
                  @if(Auth::user()->level==2)
                    <div class="menuNguoiBan">
                        <ul>
                                <a href="{{route('sanPham.create')}}"><button type="button" class="btn btn-primary">Them san pham</button></a>
                            </ul>
                            <ul>
                                <a href="{{route('nguoiBanPheDuyet')}}"><button type="button" class="btn btn-primary">Don hang cho phe duyet</button></a>
                            </ul>
                            <ul>
                                <a href="{{route('sanPham.index')}}"><button type="button" class="btn btn-primary btn-ql">Quan ly san pham</button></a>
                            </ul>
                    </div>
                    @endif
{{-- ADMIN --}}
                @if(Auth::user()->level==3)
                    <div class="menuNguoiBan">
                        <ul>
                                <a href="{{route('quanLyUser')}}"><button type="button" class="btn btn-primary">Quan Ly user</button></a>
                            </ul>
                            <ul>
                                <a href="{{route('quanLySanPham')}}"><button type="button" class="btn btn-primary">Quan Ly San Pham</button></a>
                            </ul>
                            <ul>
                                <a href="{{route('nguoiBanPheDuyet')}}"><button type="button" class="btn btn-primary">Quan Ly phe duyet</button></a>
                            </ul>
                    </div>
                    @endif
                @endif

            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
