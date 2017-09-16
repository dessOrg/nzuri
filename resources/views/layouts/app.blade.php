<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NzuriHomes</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/iconic.css">
    <script src="js/vendor/modernizr.js"></script>
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
  <div class="navigation-mobile">
  <div>
    <i class="iconic iconic-close" id="mobileNav2"></i>
  </div>
  <ul>
    <li class="menu-item-has-children"><a href="#">Home</a>
      <ul class="sub-menu">
        <li><a href="index.html">Default Layout</a></li>
        <li><a href="home-2.html">Home v2</a></li>
        <li><a href="home-3.html">Home v3</a></li>
        <li><a href="home-4.html">Home v4</a></li>
      </ul>
    </li>
    <li class="menu-item-has-children"><a href="#">Properties</a>
    <ul class="sub-menu">
      <li><a href="property-list.html">Property List</a>
      <ul class="sub-menu">
        <li><a href="property-list-sidebar-left.html">Sidebar Left</a></li>
        <li><a href="property-list-sidebar-right.html">Sidebar Right</a></li>
      </ul>
      </li>
      <li><a href="property-details.html">Property Details</a></li>
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
    <li class="menu-item-has-children"><a href="#">ShortCodes</a>
    <ul class="sub-menu">
      <li><a href="#">Typography And Components</a>
        <ul class="dir-right">
          <li><a href="page-typography.html">General Typography</a></li>
          <li><a href="page-heading.html">Heading</a></li>
          <li><a href="page-blockquote.html">Blockquote</a></li>
          <li><a href="page-boxshadow.html">Box Shadow</a></li>
          <li><a href="page-testimonials.html">Testimonials</a></li>
          <li><a href="page-tagline.html">Tagline Boxes</a></li>
          <li><a href="page-grid-layout.html">Grid Layout</a></li>
        </ul>
      </li>
      <li><a href="page-buttons.html">Buttons UI</a>
      </li>
      <li><a href="page-icons.html">Icons</a>
      </li>
    </ul>
    </li>
    <li class="menu-item-has-children"><a href="#">Misc</a>
    <ul class="dir-right level-1 sub-menu">
      <li><a href="#">Header</a>
      <ul class="dir-right">
        <li><a href="header-v1.html">Header v1</a></li>
         <li><a href="header-v2.html">Header v2</a></li>
         <li><a href="banner-slider.html">Header Slider v1</a></li>
         <li><a href="banner-slider-with-caption.html">Header Slider v2</a></li>
      </ul>
      </li>
      <li><a href="page-footer-v1.html">Footer</a></li>
    </ul>
    </li>
  </ul>


  </div>

  <div class="wrap">
<!-- sidebar -->



    @yield('content')
</div>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
