@extends('layouts.app')

@section('content')
 @include('partials.nav')
 <!-- Page layout -->
 <section class="content-section">
   <div class="container">
     <ol class="breadcrumb">
           <li><a href="{{ url('/')}}">Home</a></li>
           <li><a href="#">Search page</a></li>
           <li class="active">Categories</li>
     </ol>
     <div class="title-row heading">
       <div class="col-md-12">
         <h3>Property Categories</h3>
       </div>
     </div>

     <main id="main" class="main">
<!-- Properties Filter -->
<div class="properties-filter">
 <div class="form-content form-cotent-map">
   <form class="form-1"  role="form" method="POST" action="{{ url('/about') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
       <div class="row pad-top-large">
         <div class="col-md-offset-3 col-md-3">
           <p>Update About Us</p>
         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
           <textarea id="about" class="form-control ckeditor" name="about" placeholder="Description of the property."></textarea>

              @if ($errors->has('about'))
                <span class="help-block">
                <strong>{{ $errors->first('about') }}</strong>
                </span>
              @endif
         </div>
         </div>
       <div class="col-md-5 pad-top-small">
         <button class="btn btn-dark btn-large pull-right hvr-shutter-out-vertical">Add</button>
       </div>

       </div>
     </form>
   </div>
</div>
<!-- Properties Filter -->
<div class="row-float pad-top-large">
 <div class="grid-box-all row">


     <div class="row">
       <div class=" col-md-offset-3 col-md-8">
     @foreach($about as $key)
       {{$key->about}}
     @endforeach
       </div>
     </div>


 </div>
</div>
</main>

   </div>

 </section>

 <!-- Page layout // -->
 @include('partials.footer')

@endsection
