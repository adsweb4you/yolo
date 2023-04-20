 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
include "meta.php";
?>

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
      <li class="active">კონტაქტი</li>
    </ul>
  </div>
   
</header>

<section class="contacts">
 <div class="container">
  <div class="row">
    <div class="col-lg-4">
      <div class="contcard">
        <div class="icons">
             <i class="bi bi-geo-alt-fill"></i>
        </div>
       <div class="texts">
       <p class="mb-0">  თბილისი საქართველო  სტურუას 24 ა</p>
       </div>
      </div>
    </div>
    <div class="col-lg-4">
    <div class="contcard">
    <div class="icons">
    <i class="bi bi-envelope-fill"></i>
</div>
<div class="texts">
        <p class="mb-0">
        info@yolo.ge
        </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
    <div class="contcard">
    <div class="icons">
    <i class="bi bi-telephone-fill"></i>
   </div>
   <div class="texts">
        <p class="mb-0">
        +998 88 77 88
        </p>
</div>
      </div>
    </div>

    <div class="col-lg-4 my-5">
      <div class="maps h-100 rounded">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49131.32966649987!2d-75.79765454539778!3d39.67878023091089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c77a9ae39789eb%3A0x2ee246f2974c385c!2zTmV3YXJrLCDhg5Phg5Thg5rhg5Dhg5Xhg5Thg6Dhg5jhg6Eg4YOo4YOi4YOQ4YOi4YOYLCDhg5Dhg5vhg5Thg6Dhg5jhg5nhg5jhg6Eg4YOo4YOU4YOU4YOg4YOX4YOU4YOR4YOj4YOa4YOYIOGDqOGDouGDkOGDouGDlOGDkeGDmA!5e0!3m2!1ska!2sge!4v1681932799688!5m2!1ska!2sge" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="col-lg-8 my-5">
      <form action="" class="base-form">
        <h4>საკონტაქტო ფორმა</h4>
       <div class="row">
         <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="სახელი გვარი">
         </div>
         <div class="col-lg-6 col-sm-6">
         <input type="text" class="form-control" placeholder="ელ:ფოსტა">
         </div>
         <div class="col-lg-12">
         <select name="" class="form-control"  id="">
          <option value="1" disabled selected>აირჩიეთ კითხვა</option>
          <option value="1">კითხვა 1</option>
          <option value="1">კითხვა 2 </option>
          <option value="1">კითხვა 3 </option>
         </select>
         </div>
         <div class="col-lg-12">
         <textarea class="form-control" rows="10" placeholder="ტექსტი"></textarea>
          <button class="send">გაგზავნა</button>
         </div>
       </div>
      </form>
    </div>
  </div>
 </div>
</section>
    
<?php
include "footer.php";
?>
</body>
</html>
