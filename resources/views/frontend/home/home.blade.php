@extends('frontend.master')
@section('home')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url({{asset('frontend/asset/image/image.jpg')}})">
          <div class="carousel-caption d-none d-md-block">
            <h3>First Slide</h3>
            <p>This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url({{asset('frontend/asset/image/image1.jpg')}})">
          <div class="carousel-caption d-none d-md-block">
            <h3>Second Slide</h3>
            <p>This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url({{asset('frontend/asset/image/image2.jpg')}})">
          <div class="carousel-caption d-none d-md-block">
            <h3>Third Slide</h3>
            <p>This is a description for the third slide.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-md-12 red-text mt-top">
        <p>Send= আপনি যা দিবেন,Receive=আপনি যা পেতে চান(Submit পেজে Total due তে যে পরিমান টাকা/ডলার আসে তা পরিশোধ করতে হবে ) 55 ডলার এর নিচে অর্ডার করলে ডলারের মোট মূল্যের সাথে ৬০ টাকা অতিরিক্ত সেন্ড ফি হিসেবে অবশ্যই দিতে হবে।(Total TK + 60 TK)ডলার কেনার আগে হেল্প লাইন নাম্বারে কল করে ডলার কিনুন ৩মিনিটে ডলার পাবেন।রাত 12 টার পরে ডলার নিলে 50 টাকা Extra দিতে হবে। রাত 12 টার পরে ডলার নিতে কল করুন 01722403588</p>
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
      </div>
    <div class="col-sm-3 mt-top">
    <div class="form-group mt-top">
      <form action="{{route('money.change')}}" method="post">
        @csrf
      <lavel class="send-money">Send Money</lavel>
      <select class="selectpicker form-control" name="sendmoney">
        <option value="Skrill">Skrill USD</option>
        <option value="neteller">Neteller USD</option>
        <option value="bkash">Bkash-Personal BDT</option>
        <option value="rocket">Rocket-Personal BDT</option>
        <option value="nagad">NAGAD-Personal BDT</option>
      </select>
      <div class="send-moneys">
        <input type="number" name="enter_money" placeholder="Enter Money" class="form-control" >
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3 mt-top">
     <div class="form-group mt-top">

      <lavel class="send-money" >Recive Money</lavel>
      <select class="selectpicker form-control" name="resive_money">
        <option value="Skrill">Skrill USD</option>
        <option value="neteller">Neteller USD</option>
        <option value="bkash">Bkash-Personal BDT</option>
        <option value="rocket">Rocket-Personal BDT</option>
        <option value="nagad">NAGAD-Personal BDT</option>
      </select>
      <div class="send-moneys">
        <input type="number" class="form-control" name="total_money" >
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</p>
    
      </div>
    </div>
    <button class="btn btn-primary" name="btn">Exchange</button>
    </form>
  </div>
  <div class="col-sm-6 mt-top">
    <div class="card" style="width: 100%;">
      <h4 class="text-center">Today's Buy Sell Rate & Reserve</h4>
      <table id="example" border="1" class="display" style="width:100%">
        <thead>
            <tr>
                <th>We Accept</th>
                <th>We buy</th>
                <th>We Sell</th>
                <th>Available</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
           
        </tbody>
    </table>
</div>
  </div>




    </div>
  </div>
<div class="main-table">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-top">
        <div class="card" style="width: 100%;">
      <h4 class="text-center">Completed Exchanges</h4>
      <table id="example1" border="1" class="display" style="width:100%">
        <thead>
            <tr>
                <th>We Accept</th>
                <th>We buy</th>
                <th>We Sell</th>
                <th>Available</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
           
        </tbody>
    </table>
</div>
      </div>
      <div class="col-md-6 mt-top">
      <div class="card" style="width: 100%;">
      <h4 class="text-center">Pending Exchanges</h4>
      <table id="example2" border="1" class="display" style="width:100%">
        <thead>
            <tr>
                <th>We Accept</th>
                <th>We buy</th>
                <th>We Sell</th>
                <th>Available</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
           
        </tbody>
    </table>
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