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
          <a href="{{url('property'. $key->id)}}"><img src="https://s3.eu-west-1.amazonaws.com/nzuri{{$key->image}}" class="img-responsive" alt="" height="auto" width="360"></a>
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
          <a class="link-arrow iconic " href="{{url('property'. $key->id)}}"><i class="fa fa-arrow"></i></a>
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
      <div class="form-content"><br>
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
    <!-- Search // -->
   <div class="widget">
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


  </aside>
  <!-- Sidebar //  -->
  </div>
</div>
</section>

@include('partials.footer')
@endsection
