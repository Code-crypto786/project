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
    <title>details || right Product</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="cs/style.css">
<script src="https://kit.fontawesome.com/73562b3716.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                     <li ><a class="color" href="/cartlist">Cart&nbsp;<span class="badge"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;{{$total}}</span></a><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                        @endif
                        @if(Session::has('user'))
                        <li ><a class="color" href="/myorders">Order</a></li>
                        @endif
                        <li ><a class="color" href="/mobiles">category <i class="far fa-list-alt"></i></a></li>
                        @if(Session::get('user')['auth']=='admin')
                    <li><a class="color" href="/addProduct">DashBoard<i class="fa fa-tachometer" aria-hidden="true"></i></a></li>
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
                    <li><a class="color" href="/login">LogIn<i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                    <li><a class="color" href="/register">register <i style="color:#fff;" class="fa fa-user-plus" aria-hidden="true"></i></a></li>
                @endif
                </ul>
                    </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
<div class="container" style="margin-top: 50px;">
    <div class="row">
    <div class="col-sm-12 col-md-6">
    <img class="img-detail" src="{{$Products['gallery']}}" alt="">
    </div>
    <div class="col-sm-12 col-md-6" style="padding:50px;">
    
    <h3><b>Name:</b> {{$Products['name']}}</h3>
    <h4><b>Rs:</b> {{$Products['price']}}</h4>
    <h5><b>detail:</b> {{$Products['description']}}</h5>
    <br> 
    
        
        <form action="/" method="post">
        @csrf
        <input type="hidden" name="product_id" value =" {{$Products['id']}} " >
        <div class="buttons">
            <button class="cart-button">
                <span class="add-to-cart">Add to cart</span> 
                <span class="added">Item added</span>
                <i class="fa fa-shopping-cart"></i>
                <i class="fa fa-square"></i>
            </button>
        </div>
    </form>
    
    <div class="buttons" style="margin-top:20px;">
            <button class="cart-button" style="background-color:#EC971F !important;">
            <a href="/ordernow/{{$Products['id']}}" style="color:#fff !important;" >Buy now</a>
            </button>
    </div>  
    </div>
    </div> 
</div>
<footer class=" footer " style="padding:50px;margin-top:200px;">
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
<style>

.cutome-login{
    height:500px;
    padding-top:100px;
}
.img-siz{
    height:500px !important;
}
.cutome-Product{
    height:600px;
}
.tranding-image{
    height: 250px;
}

.tranding-item{
    float:left;
    width: 20%;
}

.img-detail{
    height:400px ;
}
.search-box{
    width:500px !important;
}
.cart-row{

    padding: 10px;
    box-shadow: 1px 2px 1px 2px #888888;
    margin-bottom:50px;
}
.padd{
    margin-top:50px;
    margin-bottom:50px;
}
.nav-color{
    background-color:#003542 !important;
    /*height:70px !important;*/
   
}
.color{
    color:white !important;

}
.footer{

   
    background-color:#1D2B36;
    color:white;
    width: 100%;
    text-align: center;
}
.style{
    background-color:#262626;
    width: 100%;
    height:30PX;
}

a{
    text-decoration:none;
    color:black;

}

a:link {
    color: black;
    text-decoration: none;
}

a:hover {
    color:black;
    text-decoration: none;
}
.display{
    display: inline-bloc;
    float: left;
    margin-left:100px;
    margin-bottom:50px;
    margin-top:50px;
    width:200px;

}
.width-dis{
    width:300px;
}
.cart-button {
    position: relative;
    outline: 0;
    background-color: #4A3B76;
    color: #fff;
    border: none;
    height: 48px;
    width: 200px;
    padding: 10px;
    border-radius: 10px;
    line-height: 0px;
    overflow: hidden;
    cursor: pointer
}
.cart-button:focus {
    outline: none !important
}

.cart-button .fa-shopping-cart {
    position: absolute;
    z-index: 2;
    top: 50%;
    left: -20%;
    font-size: 1.8em;
    transform: translate(-50%, -50%)
}
.cart-button .fa-square {
    position: absolute;
    z-index: 1;
    top: -20%;
    left: 53%;
    font-size: 0.8em;
    transform: translate(-50%, -50%)
}
.cart-button span {
    position: absolute;
    left: 50%;
    top: 50%;
    color: #fff;
    transform: translate(-50%, -50%)
}

.cart-button span.added {
    opacity: 0
}

.cart-button.clicked .fa-shopping-cart {
    animation: cart 2s ease-in forwards
}

.cart-button.clicked .fa-square {
    animation: box 2s ease-in forwards
}

.cart-button.clicked span.add-to-cart {
    animation: addcart 2s ease-in forwards
}

.cart-button.clicked span.added {
    animation: added 2s ease-in forwards
}
@keyframes cart {
    0% {
        left: -10%
    }

    40%,
    60% {
        left: 50%
    }

    100% {
        left: 110%
    }
}
@keyframes box {

0%,
40% {
    top: -20%
}

60% {
    top: 36%;
    left: 53%
}

100% {
    top: 40%;
    left: 112%
}
}
@keyframes addcart {

0%,
30% {
    opacity: 1
}

30%,
100% {
    opacity: 0
}
}
@keyframes added {

0%,
80% {
    opacity: 0
}

100% {
    opacity: 1
}
}
</style>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {


const cartButtons = document.querySelectorAll('.cart-button');

cartButtons.forEach(button => {

button.addEventListener('click',cartClick);

});

function cartClick(){
let button =this;
button.classList.add('clicked');
}



});
</script>
</html>