@extends('layouts.app')

@section('content')

 @include('partials.nav')

<!-- Content Section -->
<section class="content-section">
  <div class="container">
    <div class="title-row heading">
      <div class="col-md-12">
        <h2>WELCOME TO ATLANTIC  <br>
        HOMEZ</h2>
        <p>For Your Dream Home</p>
      </div>
    </div>
    <div class="content-box">
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
            <a href="{{ url('/property'.$key->id) }}"><img src="https://s3.eu-west-1.amazonaws.com/nzuri{{ $key->image}}" alt="" height="234" width="360"></a>
          </div>
          <div class="description">
            <h3><span class="type">{{ $key->category}}:</span>
            {{ $key->street}},
            {{ $key->town}}</h3>
            <p class="meta-list"><span class="meta">Bed : {{ $key->bed}}</span>
              <span class="meta"> Parking : {{ $key->parking}} </span>
              <span class="meta">   Bath : {{ $key->bath}} </span>
              <span class="meta">   {{ $key->size}} sq ft</span></p>
            <span class="price">Ksh.{{ $key->price}}</span>
            <a class="link-arrow iconic" href="{{ url('/property'.$key->id)}}"><span style="color:blue">View</span></a>
          </div>
        </div>
        @endforeach

      </div>
      <!-- Grid view // -->

      <div class="pad-top-small col-xs-12">
        <a href="{{ url('/properties')}}" class="btn btn-danger btn-large pull-right hvr-shutter-out-vertical">View more results</a>
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
        <span class="iconic pink"><i class="fa fa-user"></i></span>
      </div>
      <img  src="images/icons/icon-home.png" height="227" width="207" alt="">
       <h4>Contacts</h4>
         <div class="widget-content">
          <p>
           Moi Avenue, Pembe Ndovu<br>
           Mombasa, Kenya <br>
           Phone: +254 720 789 500 <br>
           Line2: +254 792 746 432 <br>
           Line3: +254 710 999 156 <br>
           Email: <a href="mailto:info@atlantichomez.com" class="">info@atlantichomez.com</a>
          </p>
         </div>
    </div>
    <div class="col-md-6 col-md-push-1">
      @foreach($banners as $key)
      <div class="heading pad-top-large">
        <h4>{{$key->title}}</h4>
      </div>
      <div class="contents">
      {{ $key->content}}
      <div class="social-links pad-top-large">
        <a href="#" class="iconic wow fadeInDown" data-wow-duration="1700ms"><i class="fa fa-twitter"></i> </a>
        <a href="#" class="iconic wow fadeInDown" data-wow-duration="1800ms"><i class="fa fa-facebook"></i></a>
        <a href="#" class="iconic wow fadeInDown" data-wow-duration="1900ms"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="iconic wow fadeInDown" data-wow-duration="2100ms"><i class="fa fa-google"></i></a>
      </div>
      </div>
      @endforeach
    </div>
    </div>
  </div>
</div>
<!-- Content Section // -->
<!-- Content Section  -->
<!-- Content Section //  -->
<!-- Content Section  -->

<!-- Content Section // -->
<!-- Team -->
<!-- Team // -->
<!-- Footer -->
@include('partials.footer')

@endsection
