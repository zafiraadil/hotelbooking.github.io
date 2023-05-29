<?php include("header.php") ?>;
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
<section id="form">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto text-center">
              <h6 class="heading-color">FORM</h6>
              <h1>Payment</h1>
            </div>
          </div>
          <form action="payment.php" class="row g-4 justify-content-center">
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Enter card number">
            </div>
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="CVV">
            </div>
            <div class="col-md-10">
              <input type="text" class="form-control" placeholder="Expiry date">
            </div>
            
            <div class="col-md-10 d-grid ">
              <button class="btn primary-btn">Pay now</button>
            </div>
          </form>
        </div>
      </section>
</body>
</html>