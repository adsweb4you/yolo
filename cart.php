 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
include "meta.php";
?>
    <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
</head>
<body>
<?php
include "nav.php";
?>
 
<header class="mini-header">
  <div class="container">
     <ul class="inlines">
      <li><a href="index.php">მთავარი</a> </li>
       
      <li><i class="bi bi-chevron-right"></i></li>
      <li class="active">კალათა </li>
    </ul>
  </div>
   
</header>

<section class="steps">
     <div class="container">
        <div class="base-step">
            <div class="step active">
                <div class="base-text">
                    <i class="bi bi-cart"></i>
                    <p>კალათა</p>
                </div>
                <div class="icons">
                    <i class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="step ">
                <div class="base-text">
                    <i class="bi bi-box-seam"></i>
                    <p>შეფუთვა</p>
                </div>
                <div class="icons">
                    <i class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="step">
                <div class="base-text">
                    <i class="bi bi-person-badge-fill"></i>
                    <p>ინფორმაცია</p>
                </div>
                <div class="icons">
                    <i class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="step">
                <div class="base-text">
                    <i class="bi bi-check"></i>
                    <p>შეკვეთა</p>
                </div>
                
            </div>
        </div>
     </div>
</section>
 
<section class="mine-cart my-4">
    <div class="container">
        <a href="index.php" class="go-back"> <i class="bi bi-arrow-left-short me-2"></i> მაღაზიაში დაბრუნება</a>
        <div class="row  ">
            <div class="col-lg-9 shadow-sm p-5">
                <!-- items -->
                <div class="row cartitem position-relative mb-4 shadow-sm">
                    <form action="" method="post">
                        <button class="btrmcart"><i class="bi bi-trash3"></i></button>
                    </form>
                    <div class="col-lg-4">
                        <img src="img/product.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 py-3">
                        <h3>ეპილაცია ორიგინალი Soprano Ice-ის
                            ალექსანდრიტის განახლებული მანიპულით    
                        </h3>
                        <p>2500 ₾</p>
                        <small>2 ადამიანზე 2 საათით</small>
                    </div>
                </div>
                <!-- enditems -->
                                <!-- items -->
                                <div class="row cartitem position-relative mb-4 shadow-sm">
                                    <form action="" method="post">
                                        <button class="btrmcart"><i class="bi bi-trash3"></i></button>
                                    </form>
                                    <div class="col-lg-4">
                                        <img src="img/product.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-8 py-3">
                                        <h3>ეპილაცია ორიგინალი Soprano Ice-ის
                                            ალექსანდრიტის განახლებული მანიპულით    
                                        </h3>
                                        <p>2500 ₾</p>
                                        <small>2 ადამიანზე 2 საათით</small>
                                    </div>
                                </div>
                                <!-- enditems -->
            </div>
            <div class="col-lg-3">
            <div class="sum">
                <h3>სერტიფიკატის ღირებულება</h3>
                <p>9500 ₾</p>
                <button class="ord">შეკვეთა</button>
            </div>
            </div>
        </div>
    </div>
</section>
    
<?php
include "footer.php";
?>
   
 
</body>
</html>
