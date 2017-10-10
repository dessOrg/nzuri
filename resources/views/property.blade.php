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
         <h1>Truly Modern Living</h1>
         <p>in your city just click on the availabe icons</p>
       </div>
     </div>
     <!-- Properties  Details -->
     <div class="row pad-top-large">
     <div class="col-sm-12 content-table">
        <div class="content-back row-float">
        <div class="col-md-6 content-table-image">
        <div class="owlCarousel properties-slider">
          @foreach($images as $key)
         <div class="item"><img src="https://s3.eu-west-1.amazonaws.com/nzuri{{$key->image}}" height="100%" width="570" alt=""></div>
          @endforeach
        </div>
        </div>
         <div class="col-md-6 pull-right contents grid-gap-large">
           <div class="heading pad-top-large">
             <h3>Property Code : <strong>{{$property->code}}</strong>
           <h4>{{$property->street}}, {{$property->town}}</h4>
           </div>
           <div class="pad-top-small">
             <span class="btn btn-primary disabled">{{$property->type}}</span>
             <span class="btn btn-primary btn-danger disabled">Ksh.{{$property->price}}</span>
             @if(Auth::guest())
             @else
                @if(Auth::user()->role === "sysadmin")
             <a href="{{url('update'.$property->id)}}"><span class="btn btn-primary btn-warning ">Edit</span></a>
             <a href="{{url('image'.$property->id)}}"><span class="btn btn-primary btn-success ">Add Images</span></a>
             <a href="{{url('delHome'.$property->id)}}"><span class="btn btn-primary btn-danger ">Remove</span></a>
                @endif
             @endif

           </div>
           <div class="pad-top-small meta-list">
           <span class="meta">Bed : {{$property->bed}}</span>
           <span class="meta">Parking : {{$property->parking}}</span>
           <span class="meta">Bath : {{$property->bath}}</span>
           <span class="meta">{{$property->size}} sq ft</span>
           </div>
           <p>{{$property->description}} </p>
           <div class="meta pad-top-large pad-bottom-small">
             <span class="meta-list2">
               <span class="meta"><span class="iconic iconic-heart"></span>1129 likes</span>
                <span class="meta"><span class="iconic iconic-mode-comment"></span>78 comments</span>
             </span>
           </div>
         </div>
        </div>
      </div>
      </div>
      <!-- Properties  Details -->
      <!-- Properties description -->
      <div class="row pad-top-large">
        <div class="container">
          <div class="properties-descriptions tabs-vertical" role="tabpanel">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#features" data-toggle="tab">Gallery</a></li>
              <li><a href="#video" data-toggle="tab">VIDEO</a></li>
              <li><a href="#map" data-toggle="tab">MAP</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="features">
                <div class="contents">
                 <div class="grid-box-all row">

                     @foreach($images as $key)
                     <div class="grid-box">
                       <div class="image ">
                         <img src="https://s3.eu-west-1.amazonaws.com/nzuri{{ $key->image }}" alt="" height="234" width="360">
                       </div>
                     </div>
                     @endforeach

                 </div>
                </div>
              </div>
              <div class="tab-pane fade" id="video">
               <div class="contents">
               <h3>Heading video</h3>
               <div class="video-embed">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/YQYQclhnigQ"></iframe>
               </div>

                </div>
              </div>
              <div class="tab-pane fade" id="map">
                <iframe class="map-responsive"  src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d9932.806350514124!2d-0.055395809509289455!3d51.509517539376255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sflat+for+sale+!5e0!3m2!1sen!2s!4v1432878796311" width="600" height="450"  style="border:0"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Properties description // -->
     <!-- Contact To Agent -->
     <div class="title-row heading pad-top-large">
       <div class="col-md-12">
         <h2>meet the agent</h2>
         <p>chat online with them  for your dream home</p>
       </div>
     </div>
     <div class="row pad-top-small layout-flex">
       <div class="col-md-2 col-md-8">
         <div class="content-box-2 ">
           <div class="heading">
             <h5>Contact Agent</h5>
           </div>
           <form class="form-1"  role="form" method="POST" action="{{ url('/sendFavorite'.$property->id) }}" enctype="multipart/form-data">
           {{ csrf_field() }}
             <div class="row">
               <div class="col-md-6 form-group-1">
                 <input type="text" class="form-control input-lg" name="name" placeholder="Name" required="true">
               </div>
               <div class="col-md-6 form-group-1">
                 <input type="text" class="form-control input-lg" name="email" placeholder="E-mail " rrequired="true" >
               </div>
             </div>
             <div class="row">
               <div class="col-md-6 form-group-1">
                 <input type="text" class="form-control input-lg" name="phone" placeholder="Contact no" required="true" data-parsley-min="10" >
               </div>
               <div class="col-md-6 form-group-1">
                 <div class="col-md-3">
                      <label>Property Code:</label>
                 </div>
                 <div class="col-md-9">
                 <input type="text" class="form-control input-lg" name="cod" value="{{$property->code}}" placeholder="Enter your place" disabled="true">
                 <input type="hidden" class="form-control input-lg" name="code" value="$property->code" placeholder="" >
               </div>
             </div>
             </div>
             <div class="row">
               <div class="form-group-1 col-md-12">
                 <textarea class="form-control" name="content" placeholder="Enter your questions and queries" rows="3"  required="true" ></textarea>
               </div>
             </div>
             <div class="row pad-top-small">
               <div class="col-md-12">
                 <button class="btn btn-primary btn-large pull-right">Submit</button>
               </div>
             </div>

           </form>
           <div class="info-box-1">
             <h5><span>Or call the agent</span></h5>
             <p><span class="large-text-1"><span class="iconic-phone-square"></span>+254 720 789 500</span> </p>
             <p><span class="large-text-1"><span class="iconic-phone-square"></span>+254 792 746 432</span> </p>
             <p><span class="large-text-1"><span class="iconic-phone-square"></span>+254 710 999 156</span> </p>
           </div>
         </div>
       </div>
     </div>
     <!-- Contact To Agent // -->

   </div>
 </section>
 <!-- Page layout // -->
 @include('partials.footer')

@endsection
