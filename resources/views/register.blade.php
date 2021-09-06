
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration || right products</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="js/jquery-3.5.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-color:#003542;">
<div class="container cutome-login ">
    <div class="col-md-4 offset-md-4 col-xs-12">
    <div class="card boots-card ">
        <div class="container px-5">
        <form action="register" method="post" enctype="multipart/form-data" id="sform">
        {{csrf_field()}}
        <h3 class="text-center" style="color:#003542;">Make Account</h3><br>
        
            <div class="form-group">
                @if(isset($error))
                    <h5 style='color:red;'>{{$error}}</h5>
                @endif
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="sname" placeholder="name">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="semail" placeholder="Email">
                
            </div>
           
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="spassword" placeholder="Password">
                <h4 id="p01" style="color:red;"></h4>
                <h4 id="p02" style="color:#800080;"></h4>
                <h4 id="p03" style="color:green;"></h4>
            </div>
            <div class="form-group">
                <label for="exampleInputConfirm">Confirm Password</label>
                <input type="password" name="confirm" class="form-control" id="spassword2" placeholder="Password">
            </div>
            
            <button type="submit"  class="btn btn-primary">Sign Up</button>
         </form>
         
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
    margin-bottom:50px;
    padding-bottom:30px;
    background-color: #F1F1F1;

} 
</style>
<script>
$(document).ready(function(){
    $('#spassword').keyup(function(){
        var spassword = $('#spassword').val();
        var lngth = spassword.length;
        var message1,message2,message3;
        message1 = document.getElementById("p01");
        message1.innerHTML = "";

        message2 = document.getElementById("p02");
        message2.innerHTML = "";

        message3 = document.getElementById("p03");
        message3.innerHTML = "";
        //x = document.getElementById("demo").value;
        if(lngth <= 2){
            try {

                if((lngth <= 2)&&(lngth != 0)) throw "is too week ";
                if((lngth <= 5 )&&(lngth != 0)) throw "is week ";
                if((lngth <= 7)&&(lngth != 0)) throw "is strong ";
            }
            catch(err) {
            message1.innerHTML = "password  " + err;
            }
        }
        else if(lngth <= 6){
            try {

           
                if(lngth <= 6 ) throw "is week ";
              
            }
            catch(err) {
            message2.innerHTML = "password  " + err;
            }
        }
        else if(lngth > 5){
            try {

                if(lngth > 5) throw "is strong ";
            }
            catch(err) {
            message3.innerHTML = "password  " + err;
            }
        }
    });
});
</script>
</html>






