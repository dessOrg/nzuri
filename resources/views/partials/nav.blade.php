<div class="navigation-mobile">
<div>
  <i class="iconic iconic-close" id="mobileNav2"></i>
</div>
<ul>
  <li class="menu-item-has-children"><a href="{{ url('/') }}">Home</a></li>
  <li class="menu-item-has-children"><a href="{{ url('/properties') }}">Homes</a>
  <ul class="sub-menu">
    <li><a href="property-list.html">Homes For Sale</a></li>
    <li><a href="property-details.html">Homes For Rent</a></li>
  </ul>
  </li>
  <li class="menu-item-has-children"><a href="#">Blog</a>
    <ul class="sub-menu">
      <li><a href="#">Blog List</a>
      <ul class="dir-right">
        <li><a href="blog.html">Masonory Layout</a></li>
        <li><a href="blog-list-row.html">Single Row Layout</a></li>
      </ul>
      </li>
      <li><a href="#">Blog Single Page</a>
       <ul class="dir-right">
        <li><a href="blog-details.html">With image</a></li>
        <li><a href="blog-details-video.html">With Video</a></li>
      </ul>
      </li>
    </ul>
  </li>
  <li><a href="agents.html">Agents</a>
  <ul>
    <li><a href="agents-details.html">Agent Details</a></li>
  </ul>
  </li>
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
      <a href="index.html"><img src="images/logo.jpg" height="225" width="130" alt=""></a>
    </div>
    <div class="navigation">
      <a href="#" class="navigation-button" id="mobileNav">
        <i class="iconic iconic-menu"></i>
      </a>
       <ul>
  <li class="menu-item-has-children"><a href="{{ url('/')}}">Home</a></li>
  <li class="menu-item-has-children"><a href="{{ url('/properties')}}">Properties</a>
  <ul class="sub-menu">
    <li><a href="property-list.html">Homes For Sale</a></li>
    <li><a href="property-details.html">Homes For Rent</a></li>
  </ul>
  </li>
  <li class="menu-item-has-children"><a href="#">Pages</a>
  <ul class="sub-menu">
        <li><a href="page-layout-left-sidebar.html">Sidebar Left</a></li>
        <li><a href="page-layout-right-sidebar.html">Sidebar Right</a></li>
      </ul>
  </li>
  <li class="menu-item-has-children"><a href="#">Blog</a>
    <ul class="sub-menu">
      <li><a href="#">Blog List</a>
      <ul class="dir-right">
        <li><a href="blog.html">Masonory Layout</a></li>
        <li><a href="blog-list-row.html">Single Row Layout</a></li>
      </ul>
      </li>
      <li><a href="#">Blog Single Page</a>
       <ul class="dir-right">
        <li><a href="blog-details.html">With image</a></li>
        <li><a href="blog-details-video.html">With Video</a></li>
      </ul>
      </li>
    </ul>
  </li>
  <li><a href="agents.html">Agents</a>
  <ul>
    <li><a href="agents-details.html">Agent Details</a></li>
  </ul>
  </li>
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

  </div>

  </div>
  </div>
</header>
<!-- Header // -->
