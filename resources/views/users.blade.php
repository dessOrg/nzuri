@extends('layouts.app')

@section('content')
 @include('partials.nav')
 <!-- Page layout -->
 <section class="content-section">
   <div class="container">
     <ol class="breadcrumb">
           <li><a href="{{ url('/')}}">Home</a></li>
           <li><a href="#">Search page</a></li>
           <li class="active">Users</li>
     </ol>

     <main id="main" class="main">
<!-- Properties Filter -->

<div class="properties-filter">

<!-- Properties Filter -->
<div class="row-float pad-top-large">
 <div class="grid-box-all row">


     <div class="row">
       <div class=" col-md-offset-3 col-md-8">
         <div class="alert alert-info">
       Existing Users
       </div>
     <table class="table" style="width:100%">

     <tr>
       <th style="width:150px">Action</th>
       <th>Title</th>
       <th>Email</th>
       <th>Mobile No</th>
       <th>Role</th>
     </tr>
     @foreach($users as $key)
       <tr>
         <td><a href="#"><button class="btn btn-default">[manage]</button></a></td>
         <td><code>{{ $key->name}}</code></td>
         <td><code>{{ $key->email}}</code></td>
         <td><code>{{ $key->phone}}</code></td>
         <td><code>{{ $key->role}}</code></td>
         @if(Auth::guest())
         @else
           @if(Auth::user()->role == 'sysadmin')

              <td><a href="{{ url('/makeadmin'.$key->id)}}"><button class="btn btn-default">[Change Role]</button></a></td>

           @endif
         @endif
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
