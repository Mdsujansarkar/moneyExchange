<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('frontend/asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="{{asset('frontend/asset/css/modern-business.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/asset/css/style.css')}}">

</head>

<body>
<div class="top-header" style="background-color:green;">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <marquee style="padding-top:10px;color:#FFF;">আমাদের পক্ষ থেকে সবাইকে  শুভেচ্ছা ও অভিনন্দন।&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ADMIN অনলাইনে না থাকলে ORDER করতে পারবেন এবং ডলার অথবা পেমেন্ট আমাদের সার্ভিস টাইম এর মধ্যে না পেলে আমাদের সাথে যোগাযোগ করেন &gt;&gt;&gt; SINGUP করার সময় অবশ্যই GMAIL অথবা YAHOO EMAIL OR PERSONAL EMAIL ব্যবহার করবেন, কোনো প্রকারের TEMPORARY EMAIL ব্যবহার করবেন না।  &gt;&gt;&gt; আমরা আমাদের BD-EWALLET.COM ওয়েব সাইট ব্যতীত অন্য কোন মাধ্যমে লেনদেন করিনা। &gt;&gt;&gt;Skrill সর্বনিম্ন Oder $10 এবং Neteller সর্বনিম্ন Ordr $10.00 অনুগ্রহ করে এর নিচে Order করবেন না</marquee>
    </div>
  </div>
  </div>
</div>
  <!-- Navigation -->
@include('frontend.parts.nav')
@yield('home')
  
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('frontend/asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="{{asset('frontend/asset/js/function.js')}}"></script>

</body>

</html>
