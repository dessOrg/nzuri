<div class="navigation-mobile">
<div>
  <i class="iconic iconic-close" id="mobileNav2"></i>
</div>
<ul>
  <li class="menu-item-has-children"><a href="{{ url('/') }}">Home</a></li>
  <li class="menu-item-has-children"><a href="{{ url('/properties') }}">Homes</a>
  <ul class="sub-menu">
    <li><a href="{{ url('/forsale')}}">Homes For Sale</a></li>
    <li><a href="{{ url('/forrent')}}">Homes For Rent</a></li>
  </ul>
  </li>
  @if(Auth::guest())
  @else
  @if(Auth::user()->role == 'sysadmin')
  <li class="menu-item-has-children"><a href="#">Admin</a>
  <ul class="sub-menu">
        <li><a href="{{ url('/categories')}}">Categories</a></li>
        <li><a href="{{ url('/users')}}">Users</a></li>
        <li><a href="{{ url('/loadbanner')}}">Banners</a></li>
        <li><a href="{{ url('/add-form')}}">Add Home</a></li>
        <li><a href="{{ url('/add-form')}}">Add Home</a></li>
        <li><a href="{{ url('/favorites')}}">Favorites</a></li>
      </ul>
  </li>
  @elseif(Auth::user()->role == 'Admin')
  <li class="menu-item-has-children"><a href="#">Admin</a>
  <ul class="sub-menu">
        <li><a href="{{ url('/categories')}}">Categories</a></li>
        <li><a href="{{ url('/users')}}">Users</a></li>
        <li><a href="{{ url('/loadbanner')}}">Banners</a></li>
        <li><a href="{{ url('/add-form')}}">Add Home</a></li>
        <li><a href="{{ url('/favorites')}}">Favorites</a></li>
      </ul>
  </li>
   @endif
   @endif


@if(Auth::guest())
  <li class="menu-item-has-children"><a href="#">Account</a>
  <ul class="dir-right level-1 sub-menu">
  <li><a href="{{ url('/login')}}">Login</a></li>
  <li><a href="{{ url('/register')}}">Register</a></li>
  </ul>
  </li>
  @else
  <li class="menu-item-has-children"><a href="#">{{Auth::user()->fname}}</a>
  <ul class="dir-right level-1 sub-menu">
  <li><a href="{{ url('/logout')}}">Logout</a></li>
  </ul>
  </li>
  @endif
</ul>


</div>

<div class="wrap">
<!-- sidebar -->

<!-- sidebar -->
<div class="sidebar-full-height2">
<div class="row-float">
  <a href="#" class="iconic iconic-menu"></a>
</div>

</div>
<div class="sidebar-full-height">


  <!-- widget // -->

  <div class="sidebar-close-bar visible-xs-block">
    <a href="#" class="iconic iconic-close2"></a>
  </div>
</div>
<!-- sidebar // -->
<!-- Header  -->
<header class="main-header header-common" style="background-image: url(images/banner/banner-7.jpg)">
  <img src="images/banner/banner-7.jpg" class="banner-img" alt="">
  <div class="header-content">
  <div class="navigation-bar"><div class="container">
      <div class="logo wow flipInX" data-wow-delay="200ms">
      <a href="{{ url('/') }}"><img src="images/logo.jpeg" height="225" width="130" alt=""></a>
    </div>
    <div class="navigation">
      <a href="#" class="navigation-button" id="mobileNav">
        <i class="iconic iconic-menu"></i>
      </a>
       <ul>
  <li class="menu-item-has-children"><a href="{{ url('/')}}">Home</a></li>
  <li class="menu-item-has-children"><a href="{{ url('/properties')}}">Properties</a>
  <ul class="sub-menu">
    <li><a href="{{ url('/forsale')}}">Homes For Sale</a></li>
    <li><a href="{{ url('/forrent')}}">Homes For Rent</a></li>
  </ul>
  </li>
  @if(Auth::guest())
  @else
  @if(Auth::user()->role == 'sysadmin')
  <li class="menu-item-has-children"><a href="#">Admin</a>
  <ul class="sub-menu">
        <li><a href="{{ url('/categories')}}">Categories</a></li>
        <li><a href="{{ url('/users')}}">Users</a></li>
        <li><a href="{{ url('/loadbanner')}}">Banners</a></li>
        <li><a href="{{ url('/add-form')}}">Add Home</a></li>
        <li><a href="{{ url('/favorites')}}">Favorites</a></li>
      </ul>
  </li>
  @elseif(Auth::user()->role == 'Admin')
  <li class="menu-item-has-children"><a href="#">Admin</a>
  <ul class="sub-menu">
        <li><a href="{{ url('/categories')}}">Categories</a></li>
        <li><a href="{{ url('/users')}}">Users</a></li>
        <li><a href="{{ url('/loadbanner')}}">Banners</a></li>
        <li><a href="{{ url('/add-form')}}">Add Home</a></li>
        <li><a href="{{ url('/favorites')}}">Favorites</a></li>
      </ul>
  </li>
   @endif
   @endif

  @if(Auth::guest())
  <li class="menu-item-has-children"><a href="#">Account</a>
  <ul class="dir-right level-1 sub-menu">
  <li><a href="{{ url('/login')}}">Login</a></li>
  <li><a href="{{ url('/register')}}">Register</a></li>
  </ul>
  </li>
  @else
  <li class="menu-item-has-children"><a href="#">{{Auth::user()->name}}</a>
  <ul class="dir-right level-1 sub-menu">
  <li><a href="{{ url('/logout')}}">Logout</a></li>
  </ul>
  </li>
  @endif
</ul>

    </div>

  </div>

  </div>
  </div>
</header>
<!-- Header // -->
