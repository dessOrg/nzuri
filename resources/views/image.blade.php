@extends('layouts.app')

@section('content')
 @include('partials.nav')
 <!-- Page layout -->
 <section class="content-section">
   <div class="container">
     <ol class="breadcrumb">
           <li><a href="#">Home</a></li>
           <li><a href="#">Search page</a></li>
           <li class="active">{{$property->category}} for {{ $property->type}}</li>
     </ol>
     <div class="title-row heading">
       <div class="col-md-12">
         <h1>{{$property->category}}</h1>
         <p>{{ $property->street}}, {{$property->town}}</p>
       </div>
     </div>

     <main id="main" class="main">
<!-- Properties Filter -->
<div class="properties-filter">
 <div class="form-content form-cotent-map">
   <form class="form-1"  role="form" method="POST" action="{{ url('/image'.$property->id) }}" enctype="multipart/form-data">
     {{ csrf_field() }}
       <div class="row pad-top-large">
         <div class="col-md-3">
           <p>Upload Image</p>
         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
             <input class="form-control" type="file" name="file" required="true">

               @if ($errors->has('file'))
                 <span class="help-block">
                 <strong>{{ $errors->first('file') }}</strong>
                 </span>
               @endif
         </div>
         </div>
       <div class="col-md-5 pad-top-small">
         <button class="btn btn-dark btn-large pull-right hvr-shutter-out-vertical">Add Image</button>
       </div>

       </div>
     </form>
   </div>
</div>
<!-- Properties Filter -->
<div class="row-float pad-top-large">
 <div class="grid-box-all row">

     @foreach($images as $key)
     <div class="grid-box">
       <div class="image ">
         <img src="https://s3.eu-west-1.amazonaws.com/nzuri{{ $key->image }}" alt="" height="234" width="360">
       </div>
       <div class="description">

         <a class="link-arrow iconic" href="{{ url('delimage'. $key->id.'/'.$key->property_id) }}"><i class="fa fa-remove"></i></a>
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

   </div>

 </section>

 <!-- Page layout // -->
 @include('partials.footer')

@endsection
