<?php
use Illuminate\Support\Facades\view;
use App\Http\Controllers\ProductController;
$total = 0;
if(session()->has('user')){
  $total = ProductController::CartItem();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>right products || products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/73562b3716.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="cs/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="js/jquery-3.5.1.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default nav-color">
        <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/" class="color">Right Products</a></li>
                </ul>
                <form action="search" class="navbar-form navbar-left">
                    <div class="form-group ">
                        <input type="text" name="query" class="form-control search-box" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-warning">Search</button>
                </form>
                <ul class="nav navbar-nav navbar-right" style="font-color:red !important;">
                
                    @if(Session::has('user'))
                     <li ><a class="color" href="cartlist">Cart&nbsp;<span class="badge"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;{{$total}}</span></a><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                        @endif
                        @if(Session::has('user'))
                        <li ><a class="color" href="myorders">Order</a></li>
                        @endif
                        <li ><a class="color" href="mobiles">category <i class="far fa-list-alt"></i></a></li>
                        @if(Session::get('user')['auth']=='admin')
                    <li><a class="color" href="addProduct">DashBoard<i class="fa fa-tachometer" aria-hidden="true"></i></a></li>
                        @endif
                    @if(Session::has('user'))
                    <li class="dropdown" >
                    <a class="dropdown-toggle color" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                    <span class="caret"></span></a>
                 <ul class="dropdown-menu" style="background-color:#EC971F;">
                    <li class="lii"><a href="logout">LogOut</a></li>
          
                </ul>
                </li>
    
                @else
                    <li><a class="color" href="login">LogIn<i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                    <li><a class="color" href="register">register <i style="color:#fff;" class="fa fa-user-plus" aria-hidden="true"></i></a></li>
                @endif

                </ul>
                    </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                
<section>
<div class="container">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
    <div class="item active">
      <a href="mobiles">
      <img src="data:image/jpeg;base64,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" alt="..." style="height:400px !important;">
      <div class="carousel-caption">
        ...
      </div>
      </a>
    </div>
    <div class="item">
      <a href="laptops">
      <img src="https://i0.wp.com/zeesouq.com/wp-content/uploads/2018/11/25.jpg?resize=800%2C800&ssl=1" alt="..."  style="height:400px !important;">
      <div class="carousel-caption">
        ...
      </div>
      </a>
    </div>
    <div class="item ">
      <a href="headphones">
      <img src="noor/categories/headphones.jpg" alt="..." style="height:400px !important;">
      <div class="carousel-caption">
        ...
      </div>
      </a>
    </div>
    <div class="item">
      <a href="powerBanks">
      <img src="noor/categories/powerbanks.jpg" alt="..."  style="height:400px !important;">
      <div class="carousel-caption">
        ...
      </div>
      </a>
    </div>
    <div class="item">
     <a href="homeSecurity">
     <img src="noor/categories/home security.jpg" alt="..."  style="height:400px !important;">
      <div class="carousel-caption">
        ...
      </div>
     </a>
    </div>
    
    
    
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</section>
<section style="margin-top:50px;">
<!--<hr style="border:1px solid #1D2B36;">-->
<div class="container-fluid" style="background-color:#E3DFDF;">
<h2 class="text-center"><b style="color:#1D2B36;">Top Products</b>
</h2>
<hr style="border:1px solid #1D2B36;width:150px;">
@foreach($Products as $item)

<div class="card">
    <div class="display" >
   <a href="detail/{{$item['id']}}">
   <div class="">
      <img class="tranding-image" src="{{$item['gallery']}}">
       <div class="text-center width-dis">
       <h5>{{$item['name']}}</h5>
       <strike>{{$item['oldPrice']}}<b>Rs</b></strike>
       <p>{{$item['price']}} <b>Rs</b></p>
       <div>
         <img src="noor/categories/stars2.png" alt="" srcset="" height="30px">
       </div>
       </div>
    </div>
   </a>
   </div>
    </div>

@endforeach

</div>
</section>

<section>
<div class="container-fluid">
<div class="py-5">
<h2><b>Brows by categories</b></h2>
<div class="card">
    <div class="display1">
   <a href="mobiles">
   <div class="">
      <img class="tranding-image1" src="noor/categories/mobiles.jpg">
   </div>
   </a>
   </div>
   </div>
   <div class="card">
    <div class="display1">
   <a href="headphones">
   <div class="">
      <img class="tranding-image1" src="noor/categories/headphones.jpg">
   </div>
   </a>
   </div>
   </div>
   <div class="card">
    <div class="display1">
   <a href="homeSecurity">
   <div class="">
      <img class="tranding-image1" src="noor/categories/home security.jpg">
   </div>
   </a>
   </div>
   </div>
<div class="card">
    <div class="display1">
   <a href="laptops">
   <div class="">
      <img class="tranding-image1" src="noor/categories/loptobs.jpg">
   </div>
   </a>
   </div>
   </div>
   <div class="card">
    <div class="display1">
   <a href="powerBanks">
   <div class="">
      <img class="tranding-image1" src="noor/categories/powerbanks.jpg">
   </div>
   </a>
   </div>
   </div>
   <div class="card">
    <div class="display1">
   <a href="speakers">
   <div class="">
      <img class="tranding-image1" src="noor/categories/speakers.jpg">
   </div>
   </a>
   </div>
   </div>
   <div class="card">
    <div class="display2">
   <a href="airpods">
   <div class="">
      <img class="tranding-image2" src="noor/categories/airpods.png">
   </div>
   </a>
   </div>
   </div>
   <div class="card">
    <div class="display2">
   <a href="casessCovers">
   <div class="">
      <img class="tranding-image2" src="noor/categories/casees.png">
   </div>
   </a>
   </div>
   </div>
   <div class="card">
    <div class="display2">
   <a href="KeybordMouse">
   <div class="">
      <img class="tranding-image2" src="noor/categories/keyboard and mouse.png">
   </div>
   </a>
   </div>
   </div>
   <div class="card">
    <div class="display2">
   <a href="tablets">
   <div class="">
      <img class="tranding-image2" src="noor/categories/tablets.png">
   </div>
   </a>
   </div>
   </div>
</div>
</div>
</section>

<section>
<div class="container-fluid">
<div class="py-5">
<h2><b style="color:#1D2B36;">Our best Products</b></h2>
<hr style="border:1px solid #1D2B36;">
@foreach($all_Products as $all_item)
<div class="card">
    <div class="display3">
   <a href="detail/{{$all_item['id']}}">
   <div class="">
      <img class="tranding-image" src="{{$all_item['gallery']}}">
       <div class="text-center width-dis">
       <h5>{{$all_item['name']}}</h5>
       <strike>{{$all_item['oldPrice']}} <b>Rs</b></strike>
       <p>{{$all_item['price']}} <b>Rs</b></p>
       <div>
         <img src="noor/categories/stars2.png" alt="" srcset="" height="30px">
       </div>
       </div>
    </div>
   </a>
   </div>
    </div>
@endforeach
</div>
</div>
</section>
<footer class=" footer " style="padding:50px;">
<div class="row">
  <div class="col-md-4 col-xs-12">
    <h4>About Right Products</h4>
    <p>
    Zeesouq.com is one of the fastest growing e-commerce portals in the region off GCC,
     with an extensive range of products which provide the best balance of 
    quality and value of money, we ensure that your purchase with us is your wisest decision today!
    </p>
  </div>
  <div class="col-md-4 col-xs-12" style="padding:20px;">
    <h4>We are on Social Media</h4>
    <p>
    <center><ul class="ull">
  <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>

 
</ul></center>
    </p>
    <br>
    <small>© 2021 ALL RIGHTS RESERVED: RIGHTS PRODUCTS ONLINE SERVICE </small>
  </div>
  <div class="col-md-4 col-xs-12">
  <h4>Stay Connect With Us</h4>

  <form action="product" method="post">
  {{csrf_field()}}
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="email_subscribe" placeholder="Enter Email">
  </div>
  <br>
  <button type="button" class="btn btn-primary btn-block">Subscribe</button>
  </form>
  </div>
 
</div>
</body>
<style>
  a, a:hover, a:focus, a:active {
    text-decoration: none !important;
    color: inherit;
}


a:link {
  
    text-decoration: none;
}
</style>
</html>