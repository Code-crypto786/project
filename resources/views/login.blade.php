
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login || right Product</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-color:#003542;">
<div class="container cutome-login ">
    <div class="row">
        <div class="col-md-4 offset-md-4 col-xs-12">
        <div class="card boots-card ">
        <div class="container px-5">
        <form action="login" method="post">
        {{csrf_field()}}
            <h3 class="text-center" style="color:#003542;">Log In</h3><br>
            <div class="form-group">
                
                @if(isset($error))
                    <h5 style='color:red;'>{{$error}}</h5>
                @endif
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit"  class="btn btn-primary">Login</button>
        </form>
        if you are not Registerd then <a href="register"> Sign Up Here</a>
        </div>
    </div>
        </div>
    </div>
</div> 
</body>
<style>
.boots-card{
    
    float:center !important;
    width: 400px !important ;
    margin-top:100px;
    padding-top:50px;
    background-color: #F1F1F1;
    padding-bottom:30px;
    margin-bottom:50px;

} 
</style>
</html>

