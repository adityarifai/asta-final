<header id="header">
  <button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>
  <div class="container">

    <div id="logo" class="pull-left">
      <a href="#hero"><img src="{{ asset('regna/astafile/asta2.png')}}" alt="" title="" /></img></a>
      <!-- Uncomment below if you prefer to use a text logo -->
      <!--<h1><a href="#hero">Regna</a></h1>-->
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/')}}#about">About Us</a></li>
        <!-- <li><a href="#portfolio">Portfolio</a></li> -->
        <!-- <li><a href="#team">Team</a></li> -->
        <li><a href="#contact">Contact Us</a></li>
        @if(Auth::user())
        <li class="menu-has-children"><a href="#">Menu <i class="fa fa-chevron-down" style="padding-left: 5px;"></i></a>
        <ul>
          <li><a href="{{route('beranda')}}">Admin</a></li>
          <li><a href="{{route('logout')}}" class="btn-get-started"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-role="tile" class="slide bg-indigo fg-white">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"></li>
        </ul>
      </li>
      @csrf
    </form>
    @else()
    <li><a href="{{route('login')}}" class="btn-get-started">Login</a></li>
    @endif
  </ul>
</nav><!-- #nav-menu-container -->
</div>
</header>