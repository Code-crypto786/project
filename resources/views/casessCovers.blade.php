<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>casess covers | right products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>
    <link rel="stylesheet" href="csss/style.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="csss/demo.css">
  
  </head>
  <body>
 
<div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
         <a href="/">right product</a></div></div>
       <li><a href="/">Home</a></li>
       <li><a href="mobiles">Mobiles</a></li>
       <li><a href="headphones">headphones</a></li>
       <li><a href="homeSecurity">Home Security</a></li>
      <li><a href="laptops">laptops</a></li>
      <li><a href="powerBanks">powerBanks</a></li>
      <li><a href="speakers">speakers</a></li>
      <li><a href="airpods">airpods</a></li>
      <li><a href="KeybordMouse">KeybordMouse</a></li>
      <li><a href="casessCovers">casessCovers</a></li>
      <li><a href="tablets">tablets</a></li>
      </ul>
  </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2" style="margin: auto; background: #fff">
                        
            <header class="text-left" style="padding:20px;">
          
            <h3 style="color:#1D2B36;">&nbsp;<i class="fa fa-list fa-1x" aria-hidden="true"></i> categories /<i class="fa  fa-mobile fa-1x" aria-hidden="true"></i>casess and Covers</h3>

            </header>
            <div class="row">
      @foreach($mobiles as $item)
    <div class="col-xs-12 col-md-4">
      <div class="card" style="padding-bottom:20px;">
  <img class="card-img-top py-5" src="{{$item->gallery}}" alt="Card image cap" height="400px">
  <div class="card-body">
    <h5 class="card-title">{{$item->name}}</h5>
    <h5><b>price:</b>{{$item->price}}</h5>
    
    <a href="detail/{{$item->id}}" class="btn btn-warning">Check now</a>
  </div>
</div>
      </div>
      @endforeach
    <!---->
      </div>
                         
      <footer class="credit">© 2021 ALL RIGHTS RESERVED: RIGHTS PRODUCTS ONLINE SERVICE</a></footer>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- partial -->


<script src="https://kit.fontawesome.com/73562b3716.js" crossorigin="anonymous"></script>
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js'></script>
    <script  src="js/script.js"></script>
  </body>
</html>