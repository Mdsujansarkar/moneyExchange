@extends('frontend.master')
@section('home')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url({{asset('frontend/asset/image/image.jpg')}})">
          <div class="carousel-caption d-none d-md-block">
            <h3>First Slide</h3>
            <p>This is a description for the first slide.</p>
          </div>
        </div>
      </div>
      
    </div>
  </header>
<div class="main-registration">
 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <h3>{{Session::get('message')}}</h3>
           @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" action="{{route('login.customer')}}" method="post">
              @csrf
              <div class="form-label-group">
                <input type="email" name="email_address" class="form-control" placeholder="Email Address" required>
              </div>
              
              <div class="form-label-group">
                <input type="password" name="password" class="form-control" placeholder="password" required>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="btn" type="submit">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <div class="service-section">
   <div class="container">
     <div class="row">
      <div class="col-md-12">
        <div class="service mt-top">
          <h4>Our Other Services</h4>
        </div>
        
      </div>
       <div class="col-md-4 text-center">
         <div class="font-awsome">
           <i class="fab fa-youtube"></i>
         </div>
         <div class="service-heading">
           <h4>Youtube is services</h4>
         </div>
         <div class="service-content">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt minus soluta quaerat reiciendis id et eaque alias, totam suscipit.</p>
         </div>
       </div>
       <div class="col-md-4 text-center">
        <div class="font-awsome">
           <i class="fab fa-youtube"></i>
         </div>
         <div class="service-heading">
           <h4>Youtube is services</h4>
         </div>
         <div class="service-content">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt minus soluta quaerat reiciendis id et eaque alias, totam suscipit.</p>
         </div>
       </div>
       <div class="col-md-4 text-center">
          <div class="font-awsome">
           <i class="fab fa-youtube"></i>
         </div>
         <div class="service-heading">
           <h4>Youtube is services</h4>
         </div>
         <div class="service-content">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt minus soluta quaerat reiciendis id et eaque alias, totam suscipit.</p>
         </div>
       </div>
      
     </div>
   </div>
 </div>
@endsection
