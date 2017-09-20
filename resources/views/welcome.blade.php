@extends('layouts.app')

@section('content')

 @include('partials.nav')

<!-- Content Section -->
<section class="content-section">
  <div class="container">
    <div class="title-row heading">
      <div class="col-md-12">
        <h2>WELCOME TO NZURI  <br>
        HOMES</h2>
        <p>For Your Dream Home</p>
        <span class="iconic iconic-search"></span>
      </div>
    </div>
    <div class="content-box">
      <div class="col-md-12">
      <p class="content-info"><span class="iconic iconic-grid"></span>Grid view</p>
      </div>
      <!-- Grid view -->
      <div class="grid-box-all row-float pad-top-large">
        @foreach($properties as $key)
        <div class="grid-box wow fadeInUp2" data-wow-delay="500ms">
          <div class="image">
            @if($key->type === "Sale")
          <span class="box-type"><span class="text">Sale</span></span>
          @else
          <span class="box-type red"><span class="text">Rent</span></span>
          @endif
            <img src="https://s3.eu-west-1.amazonaws.com/nzuri{{ $propery->image}}" alt="" height="234" width="360">
          </div>
          <div class="description">
            <h3><span class="type">{{ $propery->category}}:</span>
            {{ $propery->street}},
            {{ $propery->town}}</h3>
            <p class="meta-list"><span class="meta">Bed : {{ $propery->bed}}</span>
              <span class="meta"> Parking : {{ $propery->parking}} </span>
              <span class="meta">   Bath : {{ $propery->bath}} </span>
              <span class="meta">   {{ $propery->size}} sq ft</span></p>
            <span class="price">Ksh.{{ $propery->price}}</span>
            <a class="link-arrow iconic iconic-arrow-forward" href="{{ url('/property'.$key->id)}}">View</a>
          </div>
        </div>

      </div>
      <!-- Grid view // -->

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
        <h4>NZURI Homes</h4>
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
@include('partials.footer')

@endsection
