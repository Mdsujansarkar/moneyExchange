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
          <div class="card-body">
              <h1>Order Confarm</h1>
               <table style="width:100%" border="1">
                      <tr>
                        <th>Firstname</th>
                        <td>{{$customerId->f_name.' '.$customerId->l_name}}</td>
                      </tr>
                      <tr>
                        <th>Phone Number</th>
                        <td>{{$customerId->phone_number}}</td>
                      </tr>
                      <tr>
                        <th>Phone Number</th>
                        <td>{{$customerId->email_address}}</td>
                      </tr>
                      <tr>
                        <th>User Name</th>
                        <td>{{$customerId->user_name}}</td>
                      </tr>
                      <tr>
                        <form action="{{route('confirm')}}" method="post">
                          @csrf
                        <th>Confarm</th>
                        <td><button class="btn btn-lg btn-primary btn-block text-uppercase" name="btn" type="submit">Confirm</button></td>
                        </form>
                        
                      </tr>
                </table> 
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