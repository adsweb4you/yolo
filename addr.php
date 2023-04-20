 
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
      <li class="active">მისამართები </li>
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
    <div class="col-lg-8   bg-white my-5">
      <form action="" class="base-form  ">
        <h4>მისამართის დამატება</h4>
      
       <div class="row">
         <div class="col-lg-12 ">
         <input type="text" name="useraddr" class="form-control" placeholder="სრული მისამართი">
         </div>
 
         <div class="col-lg-12">
          <button class="save-user" >დამატება</button>
         </div>
       </div>
   
      </form>

      <!-- all addres -->

      <div class="row  addrow">
        <div class="col-lg-4">
            <div class="user-addr">
                <a href="" class="edit" data-title="განახლება">
                <i class="bi bi-pencil-fill"></i>
                </a>
                <form action="" method="post" class="addtrash">
                    <button class="trash"><i class="bi bi-trash2"></i></button>
                </form>
                <p>ქ თბილისი ვაჟა ფშაველას გამზირი II კვარტალი 24 ა </p>
            </div>
        </div>
 
      </div>

      <!-- end -->
    </div>
  </div>
 </div>
</section>
    
<?php
include "footer.php";
?>
   
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script>

  $('.save-user').click(function (e) { 
    e.preventDefault();
    Swal.fire({
    title:'გილოცავთ!',
    text: 'მისამართი წარმატებით დაემატა!',
    icon: 'success',
    confirmButtonText: 'დახურვა',
    }
   
    )
  });

  $(".addtrash").submit(function (e) { 
    e.preventDefault();
    
    Swal.fire({
  title: 'დასტური?',
  text: "დარწმუნებული ხართ რომ გსურთ მისამართოს წაშლა?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText:'არა!',
  confirmButtonText: 'დიახ!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
        {
    title:'გილოცავთ!',
    text:   'მისამართი წარმატებით წაიშალა',
    icon: 'success',
    confirmButtonText: 'დახურვა',
    }  
    )
  }
})

  });

   </script>
</body>
</html>
