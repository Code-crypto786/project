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
    <title>search || right Products</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="cs/style.css">
<script src="https://kit.fontawesome.com/73562b3716.js" crossorigin="anonymous"></script>
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
<div class="container cutome-Product">
  <h3> Results for {{$category}}</h3>
  <hr class="line" style="border:1px solid #1D2B36;width:150px;">
<div class="tranding-wraper">


@foreach($Products as $item)

<div class="card">
    <div class="display3">
   <a href="detail/{{$item['id']}}">
   <div class="">
      <img class="tranding-image" src="{{$item['gallery']}}">
       <div class="text-center width-dis">
       <h5>{{$item['name']}}</h5>
       <strike>{{$item['oldPrice']}} <b>Rs</b></strike>
       <p>{{$item['price']}} <b>Rs</b></p>
       </div>
       
    </div>
   </a>
   </div>
</div>
@endforeach


</div>
</div>
<footer class=" footer " style="padding:50px;margin-top:250px;">
<div class="row">
  <div class="col-md-4 col-xs-12">
    <h4>About Right Products</h4>
    <p>
    Zeesouq.com is one of the fastest growing e-commerce portals in the region off GCC,
     with an extensive range of products which provide the best balance of 
    quality and value of money, we ensure that your purchase with us is your wisest decision today!
    </p>
  </div>
  <div class="col-md-4 col-xs-12">
    <h4>We are on Social Media</h4>
    <p>
    <ul class="ull">
  <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
  <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
</ul>
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
</footer>
</body>
</html>
