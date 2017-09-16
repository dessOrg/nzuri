@extends('layouts.app')

@section('content')
<!-- sidebar -->
<div class="sidebar-full-height2">
<div class="row-float">
  <a href="#" class="iconic iconic-menu"></a>
</div>

</div>
<div class="sidebar-full-height">
  <div class="sidebar-close-bar">
    <a href="#" class="iconic iconic-close2"></a>
  </div>
  <div class="sidebar-close-bar2">
    <a href="#" class="iconic iconic-close2"></a>
  </div>
  <!-- widget -->
  <div class="widget-1 widget-1-address" id="widget-1-num-1">
    <h3>your dream  <br>home <br>
      search <br>
      ends here. </h3>
      <div class="logo-image">
      <img src="images/logo.png" height="225" width="130" alt="">
    </div>
      <p>Contact us: <br>
      Head Office <br>
      STEP IIT KHARAGPUR <br>
      WEST BENGAL – 721302 </p>
  </div>
   <!-- widget // -->
   <!-- widget -->
  <div class="widget-1 widget-1-search" id="widget-1-num-2">
    <h4>Search your property</h4>
    <div class="form-tab pad-top-small">
        <a class="active"  href="#widget-1-form-1">All</a>
        <a href="#widget-1-form-2">Sell</a>
        <a href="#widget-1-form-3">Rent</a>
    </div>
    <div class="search-form-2 map-search-control form-cotent-map">
      <form class="form-1" id="widget-1-form-1">
        <div class="row pad-top-large">
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Property types</option>
            </select>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Select city</option>
            </select>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Bedrooms</option>
            </select>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Bathrooms</option>
            </select>
          </div>
          <div class="col-sm-12">
            <p>Select your price range</p>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Mini</option>
            </select>
          </div>
          <div class="col-xs-12 form-group">
            <div  class="no-slider">
            <span class="info">
            <span class="min">Minimum</span>
            <span class="max pull-right">Max</span>
            </span>
            </div>
            <div id="slider-tooltip1" class="slider-tooltip">
            </div>
          </div>
          <div class="col-xs-6">
            <a href="#" class="adv-search"><u>Advance Search Option</u></a>
          </div>
          <div class="col-xs-6">
            <a href="#" class="btn btn-dark pull-right hvr-shutter-out-vertical">Find property</a>
          </div>
        </div>
      </form>
      <form class="form-1 hidden" id="widget-1-form-2">
        <div class="row pad-top-large">
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Property types</option>
            </select>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Select city</option>
            </select>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Bedrooms</option>
            </select>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Bathrooms</option>
            </select>
          </div>
          <div class="col-sm-12">
            <p>Select your price range</p>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Mini</option>
            </select>
          </div>
          <div class="col-xs-12 form-group">
            <div  class="no-slider">
            <span class="info">
            <span class="min">Minimum</span>
            <span class="max pull-right">Max</span>
            </span>
            </div>
            <div id="slider-tooltip2" class="slider-tooltip">
            </div>
          </div>
          <div class="col-xs-6">
            <a href="#" class="adv-search"><u>Advance Search Option</u></a>
          </div>
          <div class="col-xs-6">
            <a href="#" class="btn btn-dark pull-right hvr-shutter-in-vertical">Find property</a>
          </div>
        </div>
      </form>
      <form class="form-1 hidden" id="widget-1-form-3">
        <div class="row pad-top-large">
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Property types</option>
            </select>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Select city</option>
            </select>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Bedrooms</option>
            </select>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Bathrooms</option>
            </select>
          </div>
          <div class="col-sm-12">
            <p>Select your price range</p>
          </div>
          <div class="col-sm-6 form-group">
            <select class="form-control">
              <option>Mini</option>
            </select>
          </div>
          <div class="col-xs-12 form-group">
            <div  class="no-slider">
            <span class="info">
            <span class="min">Minimum</span>
            <span class="max pull-right">Max</span>
            </span>
            </div>
            <div id="slider-tooltip3" class="slider-tooltip">
            </div>
          </div>
          <div class="col-xs-6">
            <a href="#" class="adv-search"><u>Advance Search Option</u></a>
          </div>
          <div class="col-xs-6">
            <a href="#" class="btn btn-dark pull-right hvr-bounce-to-bottom">Find property</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- widget // -->
  <!-- widget -->
  <div class="widget-1" id="widget-1-num-3">
    <h3 class="large-heading">Search your
    dream homes</h3>
    <p class="large-text-1">in your city
    just click on the availabe icons</p>
    <p><img src="images/icons/map-marker2.png" height="63" width="44" alt=""></p>
    <div class="pad-top-small row-float">
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
    </div>
  </div>
  <!-- widget // -->
  <!-- widget -->
  <div class="widget-1" id="widget-1-num-4">
    <h3 class="large-heading">your dream <br>
      homes</h3>
    <span class="iconic iconic-search"></span>
    <p class="large-text-1">Your search result listed here</p>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
  </div>
  <!-- widget // -->
  <!-- widget -->
   <div class="widget-1 widget-1-rel-prop" id="widget-1-num-5">
     <h3 class="medium-heading">related property
      you may like</h3>
        <div class="rltd-property">
          <ul>
            <li>
              <a href="#">
                <img src="images/related-property/image-1.jpg" height="106" width="165" alt="">
                <span class="overflow">
                  <span class="type">SALE</span>
                </span>
              </a>
              <div class="description">
                <p>Appertment: <br>
                5111 140th<br>
                Ave NE Bellevue,<br>
                WA 98005 <br>
                <span class="price">$2100</span></p>
              </div>
            </li>
            <li>
              <a href="#">
                <img src="images/related-property/image-2.jpg" height="106" width="165" alt="">
                <span class="overflow">
                  <span class="type">RENT</span>
                </span>
              </a>
              <div class="description">
                <p>Appertment: <br>
                5111 140th<br>
                Ave NE Bellevue,<br>
                WA 98005 <br>
                <span class="price">$2100</span></p>
              </div>
            </li>
            <li>
              <a href="#">
                <img src="images/related-property/image-3.jpg" height="106" width="165" alt="">
                 <span class="overflow">
                  <span class="type">RENT</span>
                </span>
              </a>
              <div class="description">
                <p>Appertment: <br>
                5111 140th<br>
                Ave NE Bellevue,<br>
                WA 98005 <br>
                <span class="price">$2100</span></p>
              </div>
            </li>
            <li>
              <a href="#">
                <img src="images/related-property/image-4.jpg" height="106" width="165" alt="">
                 <span class="overflow">
                  <span class="type">RENT</span>
                </span>
              </a>
              <div class="description">
                <p>Appertment: <br>
                5111 140th<br>
                Ave NE Bellevue,<br>
                WA 98005 <br>
                <span class="price">$2100</span></p>
              </div>
            </li>

          </ul>
        </div>
   </div>
  <!-- widget // -->
  <!-- widget  -->
  <div class="widget-1" id="widget-1-num-6">
    <h3 class="large-heading">Something <br>
    about us!</h3>
    <span class="iconic iconic-info pink"></span>
    <p class="large-text-1">know more about us before commit</p>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
  </div>
  <!-- widget // -->
  <!-- widget  -->
  <div class="widget-1" id="widget-1-num-7">
    <h3 class="large-heading">know your <br>
    dream home!</h3>
    <span class="iconic iconic-user style-1"></span>
    <p class="large-text-1">know more about us before commit</p>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
  </div>
  <!-- widget // -->
  <!-- widget  -->
  <div class="widget-1" id="widget-1-num-8">
    <h3 class="large-heading">find us <br>
    anywhere!</h3>
    <span class="iconic iconic-search style-1"></span>
    <p class="large-text-1">know more about us before commit</p>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
  </div>
  <!-- widget // -->
   <!-- widget  -->
  <div class="widget-1" id="widget-1-num-9">
    <h3 class="large-heading">Our <br>
    agents!</h3>
    <span class="iconic iconic-v-card pink"></span>
    <p class="large-text-1">know more about us before commit</p>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
  </div>
  <!-- widget // -->
  <div class="sidebar-close-bar visible-xs-block">
    <a href="#" class="iconic iconic-close2"></a>
  </div>
</div>
<!-- sidebar // -->
<!-- Header  -->
<header class="main-header header-home" style="background-image: url(images/banner/banner-7.jpg)">
  <img src="images/banner/banner-7.jpg" height="707" width="1920" class="banner-img" alt="">
  <div class="header-content">
  <div class="navigation-bar"><div class="container">
      <div class="logo wow flipInX" data-wow-delay="200ms">
      <a href="index.html"><img src="images/logo.png" height="225" width="130" alt=""></a>
    </div>
    <div class="navigation">
      <a href="#" class="navigation-button" id="mobileNav">
        <i class="iconic iconic-menu"></i>
      </a>
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
     <div class="info wow bounceInUp animated" data-wow-delay="1s">
  <span class="type"><span class="text">Rent</span></span>
    <div class="description">
      <p class="title">1102 5th St Kirkland,
        WA 98033
      </p>
      <p class="meta"><span class="meta-block">Bed : 3</span>
      <span class="meta-block">Parking : 1 </span>
      <span class="meta-block">Bath : 2</span>
      <span class="meta-block">1500 sq ft</span>
      </p>
    </div>
    <div class="price">
      <p class="rate">$3500</p>
      <p><a href="#" class="btn btn-default btn-sm hvr-shutter-out-vertical">View property</a></p>
    </div>
  </div>
  </div>

  </div>
  </div>
</header>
<!-- Header // -->

<!-- Content Section -->
<section class="content-section">
  <div class="container">
    <div class="title-row heading">
      <div class="col-md-12">
        <h2>Your dream <br>
        homes</h2>
        <p>Your search result IS listed here</p>
        <span class="iconic iconic-search"></span>
      </div>
    </div>
    <div class="content-box">
      <div class="col-md-12">
      <p class="content-info"><span class="iconic iconic-grid"></span>Grid view</p>
      </div>
      <!-- Grid view -->
      <div class="grid-box-all row-float pad-top-large">
        <div class="grid-box wow fadeInUp2" data-wow-delay="500ms">
          <div class="image">
          <span class="box-type"><span class="text">Sale</span></span>
            <img src="images/property/home-1.jpg" alt="" height="234" width="360">
          </div>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <p class="meta-list"><span class="meta">Bed : 3</span>
              <span class="meta"> Parking : 1 </span>
              <span class="meta">   Bath : 1 </span>
              <span class="meta">   1500 sq ft</span></p>
            <span class="price">$75000</span>
            <a class="link-arrow iconic iconic-arrow-forward" href="#"></a>
          </div>
        </div>
        <div class="grid-box wow fadeInUp2" data-wow-delay="600ms">
          <div class="image">
          <span class="box-type"><span class="text">Rent</span></span>
            <img src="images/property/home-2.jpg" alt="" height="234" width="360">
          </div>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <p class="meta-list"><span class="meta">Bed : 3</span>
              <span class="meta"> Parking : 1 </span>
              <span class="meta">   Bath : 1 </span>
              <span class="meta">   1500 sq ft</span></p>
            <span class="price">$75000</span>
            <a class="link-arrow iconic iconic-arrow-forward" href="#"></a>
          </div>
        </div>
        <div class="grid-box wow fadeInUp2" data-wow-delay="700ms">
          <div class="image">
          <span class="box-type red"><span class="text">Rent</span></span>
            <img src="images/property/home-3.jpg" alt="" height="234" width="360">
          </div>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <p class="meta-list"><span class="meta">Bed : 3</span>
              <span class="meta"> Parking : 1 </span>
              <span class="meta">   Bath : 1 </span>
              <span class="meta">   1500 sq ft</span></p>
            <span class="price">$75000</span>
            <a class="link-arrow iconic iconic-arrow-forward" href="#"></a>
          </div>
        </div>
        <div class="grid-box wow fadeInUp2" data-wow-delay="500ms">
          <div class="image">
          <span class="box-type"><span class="text">Sale</span></span>
            <img src="images/property/home-1.jpg" alt="" height="234" width="360">
          </div>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <p class="meta-list"><span class="meta">Bed : 3</span>
              <span class="meta"> Parking : 1 </span>
              <span class="meta">   Bath : 1 </span>
              <span class="meta">   1500 sq ft</span></p>
            <span class="price">$75000</span>
            <a class="link-arrow iconic iconic-arrow-forward" href="#"></a>
          </div>
        </div>
        <div class="grid-box wow fadeInUp2" data-wow-delay="600ms">
          <div class="image">
          <span class="box-type"><span class="text">Rent</span></span>
            <img src="images/property/home-2.jpg" alt="" height="234" width="360">
          </div>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <p class="meta-list"><span class="meta">Bed : 3</span>
              <span class="meta"> Parking : 1 </span>
              <span class="meta">   Bath : 1 </span>
              <span class="meta">   1500 sq ft</span></p>
            <span class="price">$75000</span>
            <a class="link-arrow iconic iconic-arrow-forward" href="#"></a>
          </div>
        </div>
        <div class="grid-box wow fadeInUp2" data-wow-delay="700ms">
          <div class="image">
          <span class="box-type red"><span class="text">Rent</span></span>
            <img src="images/property/home-3.jpg" alt="" height="234" width="360">
          </div>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <p class="meta-list"><span class="meta">Bed : 3</span>
              <span class="meta"> Parking : 1 </span>
              <span class="meta">   Bath : 1 </span>
              <span class="meta">   1500 sq ft</span></p>
            <span class="price">$75000</span>
            <a class="link-arrow iconic iconic-arrow-forward" href="#"></a>
          </div>
        </div>

      </div>
      <!-- Grid view // -->
       <div class="col-xs-12 pad-top-large">
      <p class="content-info"><span class="iconic iconic-menu"></span>list view</p>
      </div>
      <!-- List view -->
      <div class="list-view-all row-float">
        <div class="grid-list">
        <div class="background">
          <a class="image" href="#">
          <span class="box-type">Sale</span>
            <img src="images/property-list/home-1.jpg" alt="">
          </a>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <span class="price">$75000</span>
          </div>
          </div>
        </div>
        <div class="grid-list">
        <div class="background">
          <a class="image" href="#">
          <span class="box-type">Sale</span>
            <img src="images/property-list/home-1.jpg" alt="">
          </a>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <span class="price">$75000</span>
          </div>
          </div>
        </div>
        <div class="grid-list">
        <div class="background">
          <a class="image" href="#">
          <span class="box-type red">Rent</span>
            <img src="images/property-list/home-1.jpg" alt="">
          </a>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <span class="price">$75000</span>
          </div>
          </div>
        </div>
        <div class="grid-list">
        <div class="background">
          <a class="image" href="#">
          <span class="box-type red">Rent</span>
            <img src="images/property-list/home-1.jpg" alt="">
          </a>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <span class="price">$75000</span>
          </div>
          </div>
        </div>
        <div class="grid-list">
        <div class="background">
          <a class="image" href="#">
          <span class="box-type">Sale</span>
            <img src="images/property-list/home-2.jpg" alt="">
          </a>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <span class="price">$75000</span>
          </div>
          </div>
        </div>
        <div class="grid-list">
        <div class="background">
          <a class="image" href="#">
          <span class="box-type red">Rent</span>
            <img src="images/property-list/home-3.jpg" alt="">
          </a>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <span class="price">$75000</span>
          </div>
          </div>
        </div>
        <div class="grid-list">
        <div class="background">
          <a class="image" href="#">
          <span class="box-type red">Rent</span>
            <img src="images/property-list/home-4.jpg" alt="">
          </a>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <span class="price">$75000</span>
          </div>
          </div>
        </div>
        <div class="grid-list">
        <div class="background">
          <a class="image" href="#">
          <span class="box-type red">Rent</span>
            <img src="images/property-list/home-5.jpg" alt="">
          </a>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <span class="price">$75000</span>
          </div>
          </div>
        </div>
        <div class="grid-list">
        <div class="background">
          <a class="image" href="#">
          <span class="box-type red">Rent</span>
            <img src="images/property-list/home-6.jpg" alt="">
          </a>
          <div class="description">
            <h3><span class="type">Appertment:</span>
            5111 140th Ave NE Bellevue,
            WA 98005</h3>
            <span class="price">$75000</span>
          </div>
          </div>
        </div>
      </div>
      <div class="pad-top-small col-xs-12">
        <a href="#" class="btn btn-danger btn-large pull-right hvr-shutter-out-vertical">View more results</a>
      </div>
    </div>
  </div>
</section>
<!-- Content Section // -->
<!-- Content Section  -->
<div class="content-section">
  <div class="container">
  <div class="background">
    <div class="col-md-3">
      <div class="title-row heading pad-top-large">
        <h2>something <br>
        about us!
        </h2>
        <p>know more about us before YOU commit</p>
        <span class="iconic iconic-user2 pink"></span>
      </div>
      <img  src="images/icons/icon-home.png" height="227" width="207" alt="">
    </div>
    <div class="col-md-6 col-md-push-1">
      <div class="heading pad-top-large">
        <h4>Dream Homes</h4>
      </div>
      <div class="contents">
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
      <div class="social-links pad-top-large">
        <a href="#" class="iconic iconic-twitter wow fadeInDown" data-wow-duration="1700ms"></a>
        <a href="#" class="iconic iconic-dribbble wow fadeInDown" data-wow-duration="1800ms"></a>
        <a href="#" class="iconic iconic-facebook wow fadeInDown" data-wow-duration="1900ms"></a>
        <a href="#" class="iconic iconic-google-plus wow fadeInDown" data-wow-duration="2100ms"></a>
      </div>
      </div>
    </div>
    </div>
  </div>
</div>
<!-- Content Section // -->
<!-- Content Section  -->
<section class="content-section content-table">
  <div class="container">
     <div class="title-row heading">
     <div class="col-sm-12">
      <h2>know your <br>
      dream home!
      </h2>
      <p>blog about latest real estate news</p>
      <span class="iconic iconic-home"></span>
      </div>
    </div>
    <div class="row pad-top-large">
     <div class="col-sm-12">
       <div class="content-back row-float">
       <div class="col-md-5 content-table-image">
         <img src="images/interrior/room-1.jpg" height="541" width="473" alt="">
       </div>
        <div class="col-md-7 pull-right contents grid-gap-large">
          <div class="heading pad-top-large">
          <h5><a href="#">INSTAGRAM PHOTOS IN MY BEDROOM
          + $100 GIVEAWAY</a></h5>
          </div>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure </p>
          <div class="meta pad-top-large pad-bottom-small">
            <span class="meta-list2">
              <span class="meta"><span class="iconic iconic-heart"></span>1129 likes</span>
               <span class="meta"><span class="iconic iconic-mode-comment"></span>78 comments</span>
            </span>
          </div>
        </div>
    <a class="link-arrow iconic iconic-arrow-forward" href="#"></a>
       </div>
     </div>
    </div>
  </div>
</section>
<!-- Content Section //  -->
<!-- Content Section  -->
<section class="content-section">
  <div class="container">
    <div class="background">
    <div class="col-md-4">
      <div class="title-row heading">
     <div class="col-sm-12">
      <h2>find us <br>
anywhere!
      </h2>
      <p>with your smart phone and tablets</p>
      <span class="iconic iconic-mobile"></span>
      </div>
    </div>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-3"><img src="images/components/mobile.png" height="572" width="205" alt=""></div>
        <div class="col-md-9">
        <div class="heading pad-top-large">
        <h4>Download
        our latest app</h4>
        </div>
        <div class="contents">
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
        <p><a href="#" class="btn btn-large btn-ghost hvr-shutter-out-vertical">Download now</a></p>
        </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
<!-- Content Section // -->
<!-- Team -->
<section class="content-section">
  <div class="container">
    <div class="title-row heading">
      <div class="col-md-12">
        <h2>Our <br>
        agents!</h2>
        <p>who guide you to find the best homes</p>
        <span class="iconic iconic-v-card pink"></span>
      </div>
    </div>
    <div class="row pad-top-large">
    <div class="agents">
      <div class="agent">
        <div class="data">
            <img src="images/agents/agent-1.jpg" alt="" height="172" width="157">
            <div class="meta">
              <a class="" href="agents-details.html">Jhone Doe <span class="iconic iconic-arrow-right3"></span></a>
            </div>
        </div>
      </div>
      <div class="agent">
        <div class="data">
            <img src="images/agents/agent-2.jpg" alt="" height="172" width="157">
            <div class="meta">
              <a class="" href="agents-details.html">Jhone Doe <span class="iconic iconic-arrow-right3"></span></a>
            </div>
        </div>
      </div>
      <div class="agent">
        <div class="data">
            <img src="images/agents/agent-3.jpg" alt="" height="172" width="157">
            <div class="meta">
              <a class="" href="agents-details.html">Jhone Doe <span class="iconic iconic-arrow-right3"></span></a>
            </div>
        </div>
      </div>
      <div class="agent">
        <div class="data">
            <img src="images/agents/agent-4.jpg" alt="" height="172" width="157">
            <div class="meta">
              <a class="" href="agents-details.html">Jhone Doe <span class="iconic iconic-arrow-right3"></span></a>
            </div>
        </div>
      </div>
      <div class="agent">
        <div class="data">
            <img src="images/agents/agent-5.jpg" alt="" height="172" width="157">
            <div class="meta">
              <a class="" href="agents-details.html">Jhone Doe <span class="iconic iconic-arrow-right3"></span></a>
            </div>
        </div>
      </div>
      <div class="agent">
        <div class="data">
            <img src="images/agents/agent-6.jpg" alt="" height="172" width="157">
            <div class="meta">
              <a class="" href="agents-details.html">Jhone Doe <span class="iconic iconic-arrow-right3"></span></a>
            </div>
        </div>
      </div>
    </div>
    <div class="agents">
      <div class="agent">
        <div class="data">
            <img src="images/agents/agent-1.jpg" alt="" height="172" width="157">
            <div class="meta">
              <a class="" href="agents-details.html">Jhone Doe <span class="iconic iconic-arrow-right3"></span></a>
            </div>
        </div>
      </div>
      <div class="agent">
        <div class="data">
            <img src="images/agents/agent-2.jpg" alt="" height="172" width="157">
            <div class="meta">
              <a class="" href="agents-details.html">Jhone Doe <span class="iconic iconic-arrow-right3"></span></a>
            </div>
        </div>
      </div>
      <div class="agent">
        <div class="data">
            <img src="images/agents/agent-3.jpg" alt="" height="172" width="157">
            <div class="meta">
              <a class="" href="agents-details.html">Jhone Doe <span class="iconic iconic-arrow-right3"></span></a>
            </div>
        </div>
      </div>
      <div class="agent">
        <div class="data">
            <img src="images/agents/agent-4.jpg" alt="" height="172" width="157">
            <div class="meta">
              <a class="" href="agents-details.html">Jhone Doe <span class="iconic iconic-arrow-right3"></span></a>
            </div>
        </div>
      </div>
      <div class="agent">
        <div class="data">
            <img src="images/agents/agent-5.jpg" alt="" height="172" width="157">
            <div class="meta">
              <a class="" href="agents-details.html">Jhone Doe <span class="iconic iconic-arrow-right3"></span></a>
            </div>
        </div>
      </div>
      <div class="agent">
        <div class="data">
            <img src="images/agents/agent-6.jpg" alt="" height="172" width="157">
            <div class="meta">
              <a class="" href="agents-details.html">Jhone Doe <span class="iconic iconic-arrow-right3"></span></a>
            </div>
        </div>
      </div>
    </div>


    </div>
  </div>
</section>
<!-- Team // -->
<!-- Footer -->
<footer class="main-footer">
  <div class="container">
  <div class="row">
  <!-- Widget 1 -->
  <div class="footer-widgets-1">
  <div class="logo-footer-row">
      <div class="logo-footer">
      <a href="index.html"><img src="images/logo-footer.png"  alt=""></a>
    </div>
   <img class="logo-tag" src="images/svg/logo-text.png" alt="">
  </div>
    <div class="row">
      <div class="col-xs-12 widget-content">
         <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words </p>
    <p>which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
      </div>
    </div>
  </div>
   <!-- Widget 1 // -->
   <!-- Widget 2 -->
   <div class="footer-widgets-2">
   <div class="row">
     <div class="col-lg-6">
        <ul>
       <li><a href="#">
       <img src="images/footer/home-1.jpg" height="56" width="72" alt="">
       <span class="description">APARTMENT: <br>
        5111 140th Ave NE Bellevue, WA 98005</span>
        <span class="price">$2100</span>
       </a></li>
       <li><a href="#">
       <img src="images/footer/home-2.jpg" height="56" width="72" alt="">
       <span class="description">APARTMENT: <br>
        5111 140th Ave NE Bellevue, WA 98005</span>
        <span class="price">$2100</span>
       </a></li>
       <li><a href="#">
       <img src="images/footer/home-3.jpg" height="56" width="72" alt="">
       <span class="description">APARTMENT: <br>
        5111 140th Ave NE Bellevue, WA 98005</span>
        <span class="price">$2100</span>
       </a></li>
       <li><a href="#">
       <img src="images/footer/home-4.jpg" height="56" width="72" alt="">
       <span class="description">APARTMENT: <br>
        5111 140th Ave NE Bellevue, WA 98005</span>
        <span class="price">$2100</span>
       </a></li>
       <li><a href="#">
       <img src="images/footer/home-5.jpg" height="56" width="72" alt="">
       <span class="description">APARTMENT: <br>
        5111 140th Ave NE Bellevue, WA 98005</span>
        <span class="price">$2100</span>
       </a></li>
     </ul>
     </div>
     <div class="col-lg-6">
        <ul>
       <li><a href="#">
       <img src="images/footer/home-1.jpg" height="56" width="72" alt="">
       <span class="description">APARTMENT: <br>
        5111 140th Ave NE Bellevue, WA 98005</span>
        <span class="price">$2100</span>
       </a></li>
       <li><a href="#">
       <img src="images/footer/home-2.jpg" height="56" width="72" alt="">
       <span class="description">APARTMENT: <br>
        5111 140th Ave NE Bellevue, WA 98005</span>
        <span class="price">$2100</span>
       </a></li>
       <li><a href="#">
       <img src="images/footer/home-3.jpg" height="56" width="72" alt="">
       <span class="description">APARTMENT: <br>
        5111 140th Ave NE Bellevue, WA 98005</span>
        <span class="price">$2100</span>
       </a></li>
       <li><a href="#">
       <img src="images/footer/home-4.jpg" height="56" width="72" alt="">
       <span class="description">APARTMENT: <br>
        5111 140th Ave NE Bellevue, WA 98005</span>
        <span class="price">$2100</span>
       </a></li>
       <li><a href="#">
       <img src="images/footer/home-5.jpg" height="56" width="72" alt="">
       <span class="description">APARTMENT: <br>
        5111 140th Ave NE Bellevue, WA 98005</span>
        <span class="price">$2100</span>
       </a></li>
     </ul>
     </div>
   </div>

   </div>
   <!-- Widget 2 // -->
   <!-- Widget 3  -->
   <div class="footer-widgets-3">
     <div class="widget">
       <h5>Contact</h5>
       <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
       <form data-parsley-validate class="footer-contact">
         <div class="form-group">
           <input type="text" placeholder="Name" class="form-control"  required data-parsley-required-message="Please insert your name" name="name">
         </div>
         <div class="form-group">
           <input type="email" placeholder="Email ID" class="form-control" required data-parsley-required-message="Please insert your name" name="email">
         </div>
         <div class="form-group">
           <button class="pull-right btn btn-ghost hvr-shutter-out-vertical">Submit</button>
         </div>
         <div class="form-messges hideen"></div>
       </form>
     </div>
     <div class="widget">
       <h5>Subscribe Newsletter</h5>
       <div class="form-group has-feedback newsletter-form">
        <form class="newsletter-form" data-parsley-validate>
          <input type="hidden" name="name" placeholder="" value="">
         <input type="email" class="form-control" placeholder="Email ID" name="email" required>
         <button class="iconic iconic-arrow-right form-control-feedback btn btn-ghost"></button>
         <div class="form-messges"></div>
        </form>
       </div>

     </div>
   </div>
   <!-- Widget 3 // -->

  </div>
  </div>
@endsection
