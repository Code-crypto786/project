<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order || right Products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
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
            
        <a href="addProduct"><div style="border: 1px solid black;background-color:#1D2B36;" class="shadow">
                &nbsp;<i style="color:#fff;" class="fa fa-plus-circle fa-2x" aria-hidden="true"></i> &nbsp;<b style="color:#fff;">add products</b>
                </div ></a>
                <a href="order"><div style="border: 1px solid black;background-color:#003542;">
                &nbsp;<i style="color:#fff;" class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i> &nbsp;<b style="color:#fff;">orders</b>
                </div ></a>
                <a href="/"><div style="border: 1px solid black;background-color:#1D2B36;" class="shadow">
                &nbsp;<i style="color:#fff;" class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i> &nbsp;<b style="color:#fff;">Back</b>
                </div ></a>
        </div>
        <div class="col-sm-10 col-xs-12">
        
        <div class="card" style="padding:50px;">
  <h3 style="color:#1D2B36;">&nbsp;<i class="fa fa-tachometer fa-1x" aria-hidden="true"></i> DashBoard /<i class="fa  fa-shopping-bag fa-1x" aria-hidden="true"></i> Orders</h3>
  <div class="card-body">
  <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">picture</th>
      <th scope="col">product Name</th>
      <th scope="col">quantity</th>
      <th scope="col">total Price</th>
      <th scope="col">Buyer Name</th>
      <th scope="col">Buyer city</th>
      <th scope="col">Address</th>
      <th scope="col">phone</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach($total as $item)
    <tr>
     
      <td><img src="{{$item->gallery}}" alt="" width="50px"></td>
      <td>{{$item->name}}</td>
      <td>{{$item->quantity}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->firstName}}</td>
      <td>{{$item->city}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->phone}}</td>
      <td><a href="delete/{{$item->id}}" class="btn btn-warning" style="color:#fff;">Remove  <i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    
      </tr>
    @endforeach
    
    
   
    
    
    
    
  </tbody>
</table>

    <!--****************-->
      </div>
    </div>
  </div>

</div>
        
        </div>
    </div>
    </section>
    <footer class="footer " style="padding:50px;margin-top:50px;">
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