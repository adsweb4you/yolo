 
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
      <li><a href="user.php">პროფილი</a></li>
      <li><i class="bi bi-chevron-right"></i></li>
      <li class="active">შეკვეთები </li>
    </ul>
  </div>
   
</header>

<section class="contacts">
 <div class="container">
  <div class="row">
 

    <div class="col-lg-4 my-5">
      <?php
       include "usernav.php"
      ?>
    </div>
    <div class="col-lg-8 my-5">
     <div class="auth-sec">
        <h4>შეკვეთები</h4>
     <a href=" "> 
        <div class="row myorders mb-3">
            <div class="col-lg-3">
                <h5>შეკვეთის ID</h5>
                <p>#5465423</p>
            </div>
            <div class="col-lg-3">
             <h5>თარიღი</h5>
             <p>2023/04/24  15:00</p>
            </div>
            <div class="col-lg-3">
            <h5>ღირებულება</h5>
             <p>1700 ₾</p>
            </div>
            <div class="col-lg-3">
            <h5>სტატუსი</h5>
             <p class="status succ">წარმატებული</p>
            </div>
        </div>
        </a>
        <a href=" "> 
        <div class="row myorders mb-3">
            <div class="col-lg-3">
                <h5>შეკვეთის ID</h5>
                <p>#5465423</p>
            </div>
            <div class="col-lg-3">
             <h5>თარიღი</h5>
             <p>2023/04/24  15:00</p>
            </div>
            <div class="col-lg-3">
            <h5>ღირებულება</h5>
             <p>1700 ₾</p>
            </div>
            <div class="col-lg-3">
            <h5>სტატუსი</h5>
             <p class="status succ">წარმატებული</p>
            </div>
        </div>
        </a>
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
