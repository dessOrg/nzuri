@extends('layouts.app')

@section('content')

 @include('partials.nav')
<!-- Page layout -->
<section class="content-section">
<div class="container">
  <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Page</a></li>
        <li class="active">Properties List</li>
  </ol>
  <div class="title-row heading">
    <div class="col-md-12">
      <h1>Properties List</h1>
    </div>
  </div>
  <div class="page-layout two-column sidebar-left">
    <main id="main" class="main">
   <!-- Properties Filter -->
  <div class="properties-filter">
    <div class="form-content form-cotent-map">
          <form class="form-1"  role="form" method="POST" action="{{ url('/search') }}">
            {{ csrf_field() }}

    <div class="col-md-12">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <select class="form-control" id="category" name="category" required="true" value="{{ old('category') }}" style="">
        <option value="">Select Category</option>
        @foreach($categories as $cat)
        <option value="{{$cat->title}}">{{$cat->title}}</option>
        @endforeach
      </select>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <select class="form-control" id="typey" name="type" required="true" value="{{ old('type') }}" style="">
        <option value="">Select Type</option>
       <option value="Rent">Rent</option>
        <option value="Sale">Sale</option>

      </select>
    </div>
    </div>
    <div class="col-md-5 pad-top-small">
      <button class="btn btn-dark btn-large pull-right hvr-shutter-out-vertical">Search</button>
    </div>
  </form>
  </div>

  </div>
  <!-- Properties Filter -->
  <div class="row-float pad-top-large">
    <div class="grid-box-all row">
      @foreach($properties as $key)
      <div class="grid-box">
        <div class="image" style="">
          @if($key->type === "Sale")
        <span class="box-type"><span class="text">Sale</span></span>
        @else
         <span class="box-type red"><span class="text">Rent</span></span>
        @endif
          <img src="https://s3.eu-west-1.amazonaws.com/nzuri{{$key->image}}" class="img-responsive" alt="" height="auto" width="360">
        </div>
        <div class="description">
          <h3><span class="type">{{$key->category}}:</span>
          {{$key->street}},
          {{$key->town}}</h3>
          <p class="meta-list"><span class="meta">Bed : {{$key->bed}}</span>
            <span class="meta"> Parking : {{$key->parking}} </span>
            <span class="meta">   Bath : {{$key->bath}} </span>
            <span class="meta">   {{$key->size}} sq ft</span></p>
          <span class="price">Ksh.{{$key->price}}</span>
          <a class="link-arrow iconic iconic-arrow-forward" href="{{url('property'. $key->id)}}"></a>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row-float text-center">
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">«</span>
          </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">»</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  </main>
  <!-- Sidebar  -->
  <aside class="sidebar" id="sidebar">
    <!-- Search  -->
    <div class="widget widget-search">
      <h4>Advanced Search</h4>
      <div class="form-content">
      <form class="pad-top-small">
      <div class="dropdown filter_menu2">
        <div class="toggle-prop-menu" data-toggle="dropdown">
         All Actions
          <span class="caret"></span>
        </div>
        <ul class="dropdown-menu filter_menu">
         <li role="presentation" data-value="all">All Actions</li>
         <li role="presentation" data-value="rentals">Rentals (7)</li>
         <li role="presentation" data-value="sales">Sales (9)</li>
         </ul>
      </div>
       <div class="dropdown filter_menu2">
        <div class="toggle-prop-menu" data-toggle="dropdown">
         City
          <span class="caret"></span>
        </div>
        <ul class="dropdown-menu filter_menu">
         <li role="presentation" data-value="all">All</li>
         <li role="presentation" data-value="rentals">California (7)</li>
         <li role="presentation" data-value="sales">New york (9)</li>
         </ul>
      </div>
      <div class="form-group">
       <div  class="no-slider">
          <span class="info">
          <span class="min">Minimum</span>
          <span class="max pull-right">Max</span>
          </span>
          </div>
          <div id="slider-tooltip1" class="slider-tooltip">
          </div>
      </div>
       <div class="form-group">
         <input type="text" placeholder="Bedroom" class="form-control">
       </div>
       <div class="form-group">
         <button class="pull-right btn btn-primary btn-block hvr-shutter-out-vertical">Submit</button>
       </div>
     </form>
     </div>
    </div>
    <!-- Search // -->
   <div class="widget">
    <h4>Contact</h4>
      <div class="widget-content">
       <p>
        25, dapibus Street, velit <br>
        California, US <br>
        Phone: 900 123 3456 <br>
        Fax: 900 123 3456 <br>
        Email: <a href="mailto:info@example.com" class="">info@example.com</a>
       </p>
      </div>
    </div>
   <div class="widget get-estimation">
    <h4>Estimate your home</h4>
      <form class="pad-top-small" data-parsley-validate>
       <div class="form-group">
         <input type="text" placeholder="Name" class="form-control" required name="name">
       </div>
       <div class="form-group">
         <input type="email" placeholder="Email id" class="form-control" required name="email">
       </div>
      <div class="form-group clearfix">
         <button class="pull-right btn btn-primary btn-block hvr-shutter-out-vertical">Get Estimation</button>
       </div>
       <div class="form-messges hidden">
        <p>Form submitted successfully.</p>
       </div>
      </form>
    </div>

  </aside>
  <!-- Sidebar //  -->
  </div>
</div>
</section>

@include('partials.footer')
@endsection
