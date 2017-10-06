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
 <!--<div class="form-content form-cotent-map">
   <form class="form-1"  role="form" method="POST" action="{{ url('/category') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
       <div class="row pad-top-large">
         <div class="col-md-offset-3 col-md-3">
           <p>Add Category</p>
         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
             <input class="form-control" type="text" name="title" placeholder="Category Name" required="true">

               @if ($errors->has('title'))
                 <span class="help-block">
                 <strong>{{ $errors->first('title') }}</strong>
                 </span>
               @endif
         </div>
         </div>
       <div class="col-md-5 pad-top-small">
         <button class="btn btn-dark btn-large pull-right hvr-shutter-out-vertical">Add</button>
       </div>

       </div>
     </form>
   </div>-->
</div>
<!-- Properties Filter -->
<div class="row-float pad-top-large">
 <div class="grid-box-all row">


     <div class="row">
       <div class=" col-md-offset-3 col-md-8">
         <div class="alert alert-info">
       Client Inuiries
       </div>
     <table class="table" style="width:100%">

     <tr>
       <th style="width:150px">Action</th>
       <th>Title</th>
       <th>Title</th>
       <th>Title</th>
       <th>Title</th>
     </tr>
     @foreach($categories as $key)
       <tr>
         <td><a href="{{ url('/delCategory'.$key->id)}}"><button class="btn btn-default">[Remove]</button></a></td>
         <td><code>{{ $key->title}}</code></td>
       </tr>
          @endforeach
     </table>
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
