


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    {{-- <link href="starter-template.css" rel="stylesheet"> --}}
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow p-3 mb-5">
  <a class="navbar-brand" href="/">College</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="{{ Request::path() == '/' ? 'active' : '' }} nav-item">
        <a class="nav-link text-decoration-none" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="{{ Request::path() == 'about-us' ? 'active' : '' }} nav-item">
        <a class="nav-link text-decoration-none" href="/about-us">About us</a>
      </li>
    <li class="{{ Request::path() == 'contact-us' ? 'active' : '' }} nav-item">
        <a class="nav-link text-decoration-none" href="/contact-us">Contact us</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Staffs</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item text-decoration-none" href="#">Administrations</a>
          <a class="dropdown-item text-decoration-none" href="#">Faculty staff</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-decoration-none" href="#">Apply</a>
      </li>
      
        @guest
            <li class="nav-item {{ Request::path() == 'login' ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif

        @else

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <a class="dropdown-item" href="/student">
                      Dashboard
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


