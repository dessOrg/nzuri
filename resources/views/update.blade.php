@extends('layouts.app')

@section('content')
 @include('partials.nav')
 <section class="content-section">
 <div class="container">
   <ol class="breadcrumb">
         <li><a href="#">Home</a></li>
         <li><a href="#">Page</a></li>
         <li class="active">Login</li>
   </ol>
   <div class="title-row heading">
     <div class="col-md-12">
       <h3>Login To Nzuri Homes</h3>
     </div>
   </div>

   <div class="form-content form-cotent-map">
         <form class="form-1"  role="form" method="POST" action="{{ url('/update'.$property->id) }}">
           {{ csrf_field() }}
             <div class="row pad-top-large">
               <div class="col-md-3">
               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                 <select class="form-control" id="category" name="category" required="true" value="{{ old('category') }}" style="">
                   <option value="$property->category">{{ $property->category }} Category</option>
                   @foreach($categories as $cat)
                   <option value="$cat->title">{{$cat->title}}</option>
                   @endforeach
                 </select>
               </div>
               </div>
                 <div class="col-md-2">
                 <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                   <select class="form-control" id="type" name="type" required="true" value="{{ $property->type }}" style="">
                     <option value="$property->type">{{ $property->type }} Type</option>
                     <option value="Rent">Rent</option>
                     <option value="Sale">For Sale</option>
                   </select>
                 </div>
                 </div>
               <div class="col-md-3">
               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" id="geocomplete" name="location" required="true" value="{{ $property->location }}" placeholder="Enter a location" />
               </div>
               </div>
               <div class="col-md-2">
               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                 <select class="form-control" id="bed" name="bed" required="true" value="{{ $property->bed }}">
                   <option value="$property->bed ">{{ $property->bed }} Bed/s</option>
                   <option value="0">0</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                 </select>
               </div>
               </div>
               <div class="col-md-2">
               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                 <select class="form-control" id="bath" name="bath" required="true" value="{{ $property->bath }}">
                   <option value="$property->bath ">{{ $property->bath }} Bathrooms</option>
                   <option value="0">0</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                 </select>
               </div>
               </div>
             </div>
             <div class="row">
             <div class="col-md-2">
             <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
               <select class="form-control" id="parking" name="parking" required="true" value="{{ $property->parking }}">
                 <option value=" $property->category ">{{ $property->parking }} Parking</option>
                 <option value="0">0</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
               </select>
             </div>
             </div>
               <div class="col-md-2">
               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                   <input id="address" type="text" class="form-control" name="address" value="{{ $property->street }}" placeholder="Address/Street" required="true">

                   @if ($errors->has('address'))
                       <span class="help-block">
                           <strong>{{ $errors->first('address') }}</strong>
                       </span>
                   @endif
               </div>
               </div>
                 <div class="col-md-2">
                 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                     <input id="town" type="text" class="form-control" name="town" value="{{ $property->town }}" placeholder="Town" required="true">

                     @if ($errors->has('town'))
                         <span class="help-block">
                             <strong>{{ $errors->first('town') }}</strong>
                         </span>
                     @endif
                 </div>
                 </div>
               <div class="col-md-2">
               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                   <input id="price" type="text" class="form-control" name="price" value="{{ $property->price }}" placeholder="Price In Ksh" required="true">

                   @if ($errors->has('price'))
                       <span class="help-block">
                           <strong>{{ $errors->first('price') }}</strong>
                       </span>
                   @endif
               </div>
               </div>
                 <div class="col-md-2">
                 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                     <input id="size" type="text" class="form-control" name="size" value="{{ $property->size }}" placeholder="Size In Sqr feet" required="true">

                     @if ($errors->has('size'))
                         <span class="help-block">
                             <strong>{{ $errors->first('size') }}</strong>
                         </span>
                     @endif
                 </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-5">
                 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                     <textarea id="description" class="form-control ckeditor" name="description" placeholder="Description of the property.">{{ $property->description }}</textarea>

                        @if ($errors->has('description'))
                          <span class="help-block">
                          <strong>{{ $errors->first('description') }}</strong>
                          </span>
                        @endif
                 </div>
                 </div>
               <div class="col-md-5 pad-top-small">
                 <button class="btn btn-dark btn-large pull-right hvr-shutter-out-vertical">Update property</button>
               </div>

               </div>

        </form>
      </div>

</div>
<div class="map_canvas"></div>
</section>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFc-SLi5TML9chvmEouiUtqVlBM3klZGg&libraries=places"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script src="http://ubilabs.github.io/geocomplete/jquery.geocomplete.js"></script>
    <script>
      $(function(){
        $("#geocomplete").geocomplete();
      });
    </script>
@include('partials.footer')
@endsection
