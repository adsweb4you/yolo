<nav class="navbar navbar-expand-lg sticky-top bg-white">
  <div class="container ">
    <div class="logosec">
    <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" class="logo" alt="">
    </a>
    <button class="openmenu"><i class="bi bi-list"></i></button>
    </div>
    <div class="banners d-flex">
 
        <ul class="switch">
            <li><a href="index.php">შთაბეჭდილებები</a> </li>
            <li><a href="poster.php">აფიშა</a> </li>
        </ul>
    </div>

      <ul class="navbar-nav">
        <li class="nav-item d-flex align-items-center profile">
          <a class="nav-link"   href="active.php">  აქტივაცია</a>
          <ul class="togglemenu">
    <li class="nav-item menu">
          <button class="btn menus  "  data-bs-toggle="dropdown">
          <i class="bi bi-list"></i>
          </button>
          <ul class="dropdown-menu">
    <li> <a class="dropdown-item"  href="">YOLO-ს შესახებ</a> </li>
    <li> <a class="dropdown-item"  href="">მიტანის პირობები</a> </li>
    <li> <a class="dropdown-item"  href="">წესები & პირობები</a> </li>
    <li> <a class="dropdown-item"  href="contact.php">კონტაქტი</a> </li>
    <li> <a class="dropdown-item"  href="">სიახლეები</a> </li>
  </ul>
        </li>
    </ul>
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-person-fill"></i> პროფილი</a>
        </li>
      
        <li class="nav-item catblock">
          <a class="nav-link carts" href="cart.php">
            <i class="bi bi-cart3"></i>
            <span>5</span>
            <sub>0 ₾</sub>
         </a>
        </li>
        <li class="nav-item lans d-flex">
          <a class="nav-link lns" class=""><i class="bi bi-heart-fill"></i></a>
          <a class="nav-link lns pe-0" data-bs-toggle="dropdown"  ><i class="bi bi-globe"></i></a>
          <ul class="dropdown-menu langmen">
    <li> <a class="dropdown-item"  href="">GEO</a> </li>
    <li> <a class="dropdown-item"  href="">ENG</a> </li>
    <li> <a class="dropdown-item"  href="">RUS</a> </li>
    
  </ul>
        </li>
         
      </ul>
   
  </div>
</nav>

<div class="rightnav">
  <div class="items">
    <!-- start -->
    <a href="" class="icon">
    <i class="bi bi-telephone-fill"></i>
    <span>დაგვირეკეთ</span>
     </a>
    <!-- end -->
     <!-- start -->
    <a href="" class="icon">
    <i class="bi bi-instagram"></i>
    <span>მოგვყევით</span>
   </a>
    <!-- end -->
       <!-- start -->
       <a href="" class="icon">
       <i class="bi bi-whatsapp"></i>
    <span>მოგწერეთ</span>
   </a>
    <!-- end -->
       <!-- start -->
       <a href="" class="icon">
  <i class="bi bi-send-check-fill"></i>
    <span>მოგვყევით</span>
   </a>
    <!-- end -->
  </div>
</div>

<div class="mobbar">
  <a href="active.php" class="activation">აქტივაცია</a>
  <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-person-fill"></i></a>
  <a href="" class="cart"> <i class="bi bi-cart3"></i></a>
  <a href=""><i class="bi bi-heart-fill"></i></a>
</div>

<div class="mobnavbar">
  <div class="indexpage">
    <a href="">შთაბეჭდილებები</a>
    <a href="">აფიშა</a>
  </div>
  <div class="morepage">
    <a href="">YOLO-ს შესახებ</a>
    <a href="">მიტანის პირობები</a>
    <a href="">წესები & პირობები</a>
    <a href="contact.php">კონტაქტი</a>
    <a href="">სიახლეები</a>
  </div>
  <div class="langs">
    <a href="">GEO</a>
    <a href="">ENG</a>
    <a href="">RUS</a>
  </div>
  <button class="close"><i class="bi bi-x-lg"></i></button>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop"   data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">



   <!-- register -->
   <div class="modal-content login">
      <div class="dialog-header">
        <h6>ავტორიაცია</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="user.php" class="regis pb-3">  
       <div class="row">
       <div class="col-lg-12">
          <input type="email" class="form-control" placeholder="ელ:ფოსტა">
       </div>
         <div class="col-lg-12 mb-4">
          <input type="password" class="form-control mb-1" placeholder="პაროლი">
          <a href=""> <small>დაგავიწყდა პაროლი?</small> </a>
       </div>
 
      <div class="col-lg-6  ">
          <button class="register w-100">ავტორიაცია</button>
     </div>
      <div class="col-lg-3 col-6 mt-2 mt-lg-0">
          <a class="socialsign fb"  href=""><i class="bi bi-facebook"></i>  </a>
      </div>
      <div class="col-lg-3 col-6 mt-2 mt-lg-0">
        <a class="socialsign goo"  href=""><i class="bi bi-google"></i>  </a>
      </div>

      <div class="col-lg-12">
        <div class="openregister">
        <p>არ ხართ რეგისტრირებული?</p>
        <button class="openreg" type="button">რეგისტრაცია</button>
        </div>
      </div>

        </div>
       </form>
      </div>
       
    </div>
    <!-- end login -->


    <!-- register -->
    <div class="modal-content register d-none">
      <div class="dialog-header">
        <h6>რეგისტრაცია</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="user.php" class="regis pb-3">  
       <div class="row">

       <div class="col-lg-12">
          <input type="text" class="form-control" placeholder="სახელი გვარი">
       </div>
        
       <div class="col-lg-12">
          <input type="text" class="form-control" placeholder="მისამართი">
       </div>

       <div class="col-lg-6">
          <input type="email" class="form-control" placeholder="ელ:ფოსტა">
</div>
<div class="col-lg-6">
          <input type="number" class="form-control" placeholder="ტელ:ნომერი">
</div>
<div class="col-lg-6">
          <input type="password" class="form-control" placeholder="პაროლი">
</div>
<div class="col-lg-6">
          <input type="password" class="form-control" placeholder="გაიმეორეთ პაროლი">
</div>
<div class="col-lg-6">
          <button class="register w-100">რეგისტრაცია</button>
</div>
<div class="col-lg-3 col-6 mt-2 mt-lg-0">
          <a class="socialsign fb"  href=""><i class="bi bi-facebook"></i>  </a>
</div>
<div class="col-lg-3 col-6 mt-2 mt-lg-0">
        <a class="socialsign goo"  href=""><i class="bi bi-google"></i>  </a>
</div>

<div class="col-lg-12">
        <div class="openregister">
        <p>უკვე ხართ რეგისტრირებული?</p>
        <button class="openlogin" type="button">ავტორიზაცია</button>
        </div>
      </div>

        </div>
       </form>
      </div>
       
    </div>
    <!-- end register -->
  </div>
</div>