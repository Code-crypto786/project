
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ordernow|| right products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
crossorigin="anonymous">
<link rel="stylesheet" href="/cs/order.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-git.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
</head>
<body>
<section>
    <div class="row">
        <div class="col-xs-12 col-4" style="padding:100px;">

            <div class="card" style="width: 18rem;padding:20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <img class="card-img-top" src="{{$products['gallery']}}" alt="Card image cap">
                <div class="card-body">
                {{$products['name']}} <br>
                <b>total Price: </b>{{$products['price']}}
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-8">
        <div class="wrapper">
        <div class="container">
            <form action="/ordernow" method="post" id="basic-form">
            {{csrf_field()}}
                <h1>
                    <i class="fas fa-shipping-fast"></i>
                    Shipping Details
                </h1>
                <div class="name">
                    <div>
                        <label for="firstName">First</label>
                        <input class="input" type="text" name="firstName" required>
                        </p><p>
                    </div>
                    <div>
                        <label for="lastName">Last</label>
                        <input class="input" type="text" name="lastName" required>
                        </p><p>
                    </div>
                </div>
                <div class="street">
                    <label for="address">address</label>
                    <input class="input" type="text" name="address" required>
                    </p><p>
                </div>
                <div class="address-info">
                    <div>
                        <label for="city">city</label>
                        <input class="input" class="input" type="text" name="city" required>
                        </p><p>
                    </div>
                    
                    <div>
                        <label for="phone">phone</label>
                        <input class="input" type="text" name="phone" required>
                        </p><p>
                    </div>
                    
                    <div style="padding-top:30px;">
                       
                        <label for="Quantity">Quantity</label>
                        <select id="Quantity" name="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="more">more</option>
                        </select>
                        </p><p>

                    
                    </div>
                </div>
               
                
                <h1>
                    <i class="far fa-credit-card"></i> Payment Information
                </h1>
                <div class="cc-info">
                </p><p>
                    <div>
                    Cash On Deleviry <input type="radio" id="payment1" name="payment" value="cash" required>
                    </div>
                    <div>
                    ATM
                    <input class="disabled-radio" type="radio" id="payment2" name="payment" value="atm">
                   
                    </div>
                </div>
                <br>
                <div class="cc-num">
                    <img src="/noor/categories/paymentMethod_vesa.jpeg" alt="payment">
                </div>
                
                <div class="btns">
               
                    <button>Purchase</button>
                    <a href="/cartlist">Back to cart</a>
                </div>
            </form>
        </div>
    </div>
        </div>
    </div>
</section>

</body>
<style>
form, p {
  margin: 20px;
}

p.note {
  font-size: 1rem;
  color: red;
}
label.error {
    color: red;
    
    display: block;
    margin-top: 5px;
}
</style>
<script>
$(document).ready(function() {
  $("#basic-form").validate();
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</html>