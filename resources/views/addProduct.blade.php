<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add Products || right Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<script src="https://use.fontawesome.com/6af28be889.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-color:#E3DFDF;">
    <section class="container-fluid " style="margin-top:30px !important;" >
    <div class="row ">
        
        <div class="col-sm-2 col-xs-12">
            
        <a href="addProduct"><div style="border: 1px solid black;background-color:#003542;" class="shadow">
                &nbsp;<i style="color:#fff;" class="fa fa-plus-circle fa-2x" aria-hidden="true"></i> &nbsp;<b style="color:#fff;">add products</b>
                </div ></a>
                <a href="order"><div style="border: 1px solid black;background-color:#1D2B36;">
                &nbsp;<i style="color:#fff;" class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i> &nbsp;<b style="color:#fff;">orders</b>
                </div ></a>
                <a href="/"><div style="border: 1px solid black;background-color:#1D2B36;" class="shadow">
                &nbsp;<i style="color:#fff;" class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i> &nbsp;<b style="color:#fff;">Back</b>
                </div ></a>
        </div>
        <div class="col-sm-10 col-xs-12">
        
        <div class="card" style="padding:50px;">
  <h3 style="color:#1D2B36;">&nbsp;<i class="fa fa-tachometer fa-1x" aria-hidden="true"></i> DashBoard /<i class="fa  fa-plus-circle fa-1x" aria-hidden="true"></i> Add Products</h3>
  <div class="card-body">
  <form action="addProduct" method="post">
  {{csrf_field()}}
  @if(isset($error))
    <h4 style="color:red" class="text-left">{{$error}}</h4>
    @endif
    @if(isset($mesg))
    <h4 style="color:green" class="text-left">{{$mesg}}</h4>
    @endif
  <div class="form-row">
    <div class="form-group col-md-6">
    
      <label for="name">Product Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name">
    </div>
    <div class="form-group col-md-3">
      <label for="oldPrice">old price</label>
      <input type="text" class="form-control" id="oldPrice" name="oldPrice" placeholder="Enter old price">
    </div>
    <div class="form-group col-md-3">
      <label for="Price">new price</label>
      <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
    </div>
  </div>
  
  
  <div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="category">category</label>
      <select id="category" name="category" class="form-control" style="height:30px !important;">
        <option value="headphones">headphones</option>
        <option value="mobile">mobile</option>
        <option value="airpods">airpods</option>
        <option value="casessCovers">casessCovers</option>
        <option value="homeSecurity">homeSecurity</option>
        <option value="KeyboardMouse">KeyboardMouse</option>
        <option value="laptops">laptops</option>
        <option value="powerBanks">powerBanks</option>
        <option value="speakers">speakers</option>
        <option value="tablets">tablets</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="gallery">paste picture path</label>
      <input type="input" id="gallery" name="gallery" placeholder="paste here picture address" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="description">Product description</label>
     <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary" style="background-color:#4A3B76;">Add Products</button>
</form>
      </div>
    </div>
  </div>

</div>
        
        </div>
    </div>
    </section>
    <footer class=" footer " style="padding:50px;margin-top:50px;">
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
    <h4>We are also on Social Media</h4>
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