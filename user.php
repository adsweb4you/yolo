 
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
      <li class="active">პროფილი</li>
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
      <form action="" class="base-form">
        <h4>მომხმარებლის ინფორმაცია</h4>
       <div class="row">
         <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="სახელი ">
         </div>
         <div class="col-lg-6 col-sm-6">
         <input type="text" class="form-control" placeholder="გვარი">
         </div>
         <div class="col-lg-6 col-sm-6">
         <input type="text" class="form-control" placeholder="ელ:ფოსტა">
         </div>
         <div class="col-lg-6 col-sm-6">
         <input type="number" class="form-control" placeholder="ტელ:ნომერი">
         </div>

         <div class="col-lg-6 col-sm-6">
         <input type="text" class="form-control" placeholder="პირ:ნომერი">
         </div>
         <div class="col-lg-6 col-sm-6 position-relative" id="bd">
         <input type="text" class="form-control" placeholder="დაბადების თარიღი">
         <i class="bi bi-calendar-week-fill"></i>
         </div>
          
         <div class="col-lg-12">
         
          <button class="save-user">შენახვა</button>
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
   <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

   <script>
    $('#bd input').datepicker({
        autoclose: true

});
   </script>
</body>
</html>
