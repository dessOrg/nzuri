<footer class="main-footer">
  <div class="container">
  <div class="row">
  <!-- Widget 1 -->
  <div class="footer-widgets-1">
  <div class="logo-footer-row">
      <div class="logo-footer">
      <a href="{{ url('/')}}"><img src="images/logo.jpeg"  alt=""></a>
    </div>

  </div>
    <div class="row">
      <div class="col-xs-12 widget-content">
        <img class="logo-tag" src="images/banner-1.jpg" alt="">
  </div>
    </div>
  </div>
   <!-- Widget 1 // -->
   <!-- Widget 2 -->
   <div class="footer-widgets-2">
   <div class="row">
     <div class="col-lg-12">
       <div class="widget">
         <h5>Contact</h5>
         <p>Have any inquiry ? Write us an email and our support team will get back to you as soon as possible.</p>
         <form class="form-1"  role="form" method="POST" action="{{ url('/inguire') }}" enctype="multipart/form-data">
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
               <input type="text" class="form-control input-lg" name="cod" value="" placeholder="Enter The Subject">

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
       </div>
     </div>
   </div>

   </div>
   <!-- Widget 2 // -->
   <!-- Widget 3  -->
   <div class="footer-widgets-3">

     <div class="widget">
       <h5>Subscribe Newsletter</h5>
       <div class="form-group has-feedback newsletter-form">
        <form class="newsletter-form" data-parsley-validate>
          <input type="hidden" name="name" placeholder="" value="">
         <input type="email" class="form-control" placeholder="Email ID" name="email" required>
         <button class="iconic iconic-arrow-right form-control-feedback btn btn-ghost"></button>
         <div class="form-messges"></div>
        </form>
       </div>

     </div>
   </div>
   <!-- Widget 3 // -->

  </div>
  </div>
</footer>
<!-- Footer // -->
<!-- Footer 2 -->
<footer class="footer-sub">
<div class="container">
  <div class="footer-text-1"><p>© 2017 Dream Homes</p></div>
  <div class="footer-text-2 text-right"><p>Design by <a href="https://desshub.github.io/">desshub</a></p></div>
</div>
</footer>
