@extends('layouts.app')

@section('content')
 @include('partials.nav')
 <section class="content-section">
 <div class="container">
   <ol class="breadcrumb">
         <li><a href="{{url('/')}}">Home</a></li>
         <li><a href="#">Banner</a></li>
         <li class="active">Create</li>
   </ol>
   <div class="title-row heading">
     <div class="col-md-12">
       <h3>Creating Banners</h3>
     </div>
   </div>

   <div class="form-content form-cotent-map">
         <form class="form-1"  role="form" method="POST" action="{{ url('/createbanner') }}" enctype="multipart/form-data">
           {{ csrf_field() }}
           <div class="row">
             <div class="col-md-offset-2 col-md-8">
             <div class="row pad-top-large">
               <div class="col-md-4">
               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                   <input id="name" type="text" class="form-control" name="name" value="{{ old('address') }}" placeholder="Banner name" required="true">

                   @if ($errors->has('name'))
                       <span class="help-block">
                           <strong>{{ $errors->first('name') }}</strong>
                       </span>
                   @endif
               </div>
               </div>
                 <div class="col-md-8">
                 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                     <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Title" required="true">

                     @if ($errors->has('title'))
                         <span class="help-block">
                             <strong>{{ $errors->first('title') }}</strong>
                         </span>
                     @endif
                 </div>
                 </div>

             </div>
               <d4v class="row">
                 <div class="col-md-12">
                 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                     <textarea id="content" class="form-control ckeditor" name="content" placeholder="Description of the banner."></textarea>

                        @if ($errors->has('content'))
                          <span class="help-block">
                          <strong>{{ $errors->first('content') }}</strong>
                          </span>
                        @endif
                 </div>
                 </div>
               <div class="col-md-5 pad-top-small">
                 <button class="btn btn-dark btn-large pull-right hvr-shutter-out-vertical">Save</button>
               </div>

               </div>
             </div>
        </form>
      </div>
      <div class="grid-box-all row">


          <div class="row">
            <div class=" col-md-offset-3 col-md-8">
              <div class="alert alert-info">
            Existing Banners
            </div>
          <table class="table" style="width:100%">

          <tr>
            <th style="width:150px">Action</th>
            <th>Name</th>
            <th>Title</th>
            <th>Content</th>
          </tr>
          @foreach($banners as $key)
            <tr>
              <td><a href="{{ url('/delbanner'.$key->id)}}"><button class="btn btn-default">[Remove]</button></a></td>
              <td><a href="#"><button class="btn btn-default">[manage]</button></a></td>
              <td><code>{{ $key->name}}</code></td>
              <td><code>{{ $key->title}}</code></td>
              <td><code>{{ $key->content}}</code></td>
            </tr>
               @endforeach
          </table>
            </div>
          </div>


      </div>
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
