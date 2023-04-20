 
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
      <li class="active">ინტერესები </li>
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
      <form action="" class="base-form  ">
        <h4>ინტერესები</h4>
      
       <div class="row">
        <!-- check -->
         <div class="col-lg-3 col-sm-6 mb-3">
         <div class="costumcheck">
          <label for="check1">
          <input type="checkbox" id="check1"  class="d-none">
          <span class="ball">
          <i class="bi bi-check-lg"></i>
          </span>
          <span class="borders"></span>
           სპორტი
         </label>
         </div>
         </div>
         <!-- endcheck -->

                 <!-- check -->
                 <div class="col-lg-3 col-sm-6 mb-3">
         <div class="costumcheck">
          <label for="chec41">
          <input type="checkbox" id="check41"  class="d-none">
          <span class="ball">
          <i class="bi bi-check-lg"></i>
          </span>
          <span class="borders"></span>
           სპორტი
         </label>
         </div>
         </div>
         <!-- endcheck -->

                 <!-- check -->
                 <div class="col-lg-3 col-sm-6 mb-3">
         <div class="costumcheck">
          <label for="check2">
          <input type="checkbox" id="check2"  class="d-none">
          <span class="ball">
          <i class="bi bi-check-lg"></i>
          </span>
          <span class="borders"></span>
           სპორტი
         </label>
         </div>
         </div>
         <!-- endcheck -->

                 <!-- check -->
                 <div class="col-lg-3 col-sm-6 mb-3">
         <div class="costumcheck">
          <label for="check13">
          <input type="checkbox" id="check13"  class="d-none">
          <span class="ball">
          <i class="bi bi-check-lg"></i>
          </span>
          <span class="borders"></span>
           სპორტი
         </label>
         </div>
         </div>
         <!-- endcheck -->

                 <!-- check -->
                 <div class="col-lg-3 col-sm-6 mb-3">
         <div class="costumcheck">
          <label for="check11">
          <input type="checkbox" id="check11"  class="d-none">
          <span class="ball">
          <i class="bi bi-check-lg"></i>
          </span>
          <span class="borders"></span>
           სპორტი
         </label>
         </div>
         </div>
         <!-- endcheck -->
         
       </div>
   
      </form>
    </div>
  </div>
 </div>
</section>
    
<?php
include "footer.php";
?>
   
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script>

  $('.send').click(function (e) { 
    e.preventDefault();
    Swal.fire({
    title:'გილოცავთ!',
    text: 'პაროლი წარმატებით შეიცვალა!',
    icon: 'success',
    confirmButtonText: 'დახურვა',
    }
   
    )
  });

   </script>
</body>
</html>
