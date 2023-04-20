 
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
      <li class="active">აქტივაცია </li>
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
        <h4>სერტიფიკატის აქტივაცია</h4>
        <div class="doted">  
       <div class="row">
         <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="აქტივაციის კოდი ">
         </div>
         <div class="col-lg-6 col-sm-6">
         <input type="text" class="form-control" placeholder="ტელ ნომერი">
         </div>
 
         <div class="col-lg-12">
         
          <button class="send">აქტივაცია</button>
         </div>
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
   
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script>

  $('.send').click(function (e) { 
    e.preventDefault();
    Swal.fire({
    title:'გილოცავთ!',
    text: 'თქვენი სერტიფიკატი წარმატებით გააქტიურდა!',
    icon: 'success',
    confirmButtonText: 'დახურვა',
    }
   
    )
  });

   </script>
</body>
</html>
