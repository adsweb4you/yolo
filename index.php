 
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
<header>
<div class="container">

<button class="showform d-block d-lg-none w-100">ფილტრაცია</button>



  <form class="search d-none d-lg-block" action="search.php">
    <div class="row">
    <div class="col-lg-2 col-sm-6 mb-lg-0 mb-3">
        <select name="" id="" class="form-control">
            <option value="">კატეგორია</option>
            <option value="">კატეგორია</option>
            <option value="">კატეგორია</option>
            <option value="">კატეგორია</option>
        </select>
    </div>
    <div class="col-lg-2 col-sm-6 mb-lg-0 mb-3">
    <select name="" id="" class="form-control">
            <option value="">ვისთვის</option>
            <option value="">ჩემთვის</option>
            <option value="">შეყვარებულისთვის</option>
            <option value="">დისთვის</option>
        </select>
    </div>
 
    <div class="col-lg-3">
      <div class="row w-100">
        <div class="col-lg-6">
            <input type="number" value="10" class="form-control  mb-lg-0 mb-3">
        </div>
        <div class="col-lg-6">
            <input type="number"  value="10000" class="form-control  mb-lg-0 mb-3">
        </div>
      </div>
    </div>
    <div class="col-lg-2 mb-lg-0 mb-3">
    <select name="" id="" class="form-control">
            <option value="">სორტირება</option>
            <option value="">ფასი ზრდადობით</option>
            <option value="">ფასი კლებადობით</option>
            <option value="">ბოლოს დამატებული</option>
        </select>
    </div>
    <div class="col-lg-3 mb-lg-0 mb-3 gp4">
       
          <input type="text" placeholder="საძიებო სიტყვა" class="form-control">
          <button class="searchsbtn"><i class="bi bi-search"></i></button>
     
    </div>
    </div>

 </form>
</div>



</header>

<h1 class="text-center subheader"> 
     
     <span class="red">სასაჩუქრე შთაბეჭდილებები  </span> 
     <span class="green">და საღონისძიებო აფიშა </span>  
</h1>

<section class="products">
 <div class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="prodcard">
                <div class="hoverable">
                <a href="detals.php"> 
                    <span class="wish"><i class="bi bi-heart-fill"></i></span>
                   <img src="img/product.jpg" class="img-fluid" alt="">
                   <img src="img/effect.png" class="imghov" alt="">
                    </a>
                </div> 
              
                <div class="cardbody">
                <a href="detals.php"> 
                      <h2>ალავერდი • ALAVERDI</h2>
                <p>ქართული სუფრა 12 სტუმარზე!  სასიამოვნო გარემო
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                </p>
</a>
                <div class="options">
                   <div class="parcs item">
                   <p class="price">250 ₾</p>
                   <p class="changs pers">1 პერსონა</p>
                   <p class="changs coun">1 პერსონა</p>
                   <p class="changs time">2 საათი</p>
                   </div>
                   <p class="changs mb-0"> <i class="changs bi bi-chevron-down"></i> </p>

                   <div class="moreops">
                   <div class="item dropeds">
                   <p class="price">250 ₾</p>
                   <p>2 პერსონა</p>
                   <p>3 პერსონა</p>
                   <p>4 საათი</p>
                   </div>
                   <div class="item dropeds">
                   <p class="price">250 ₾</p>
                   <p>5 პერსონა</p>
                   <p>6 პერსონა</p>
                   <p>72 საათი</p>
                   </div>
                   </div>

                </div>

                <div class="bywith">
                    <button class="forme">ვიყიდი ჩემთვის</button>
                    <button class="foryou">ვიყიდი საჩუქრად</button>
                </div>

                </div>
  
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="prodcard">
                <div class="hoverable">
                    <span class="wish"><i class="bi bi-heart-fill"></i></span>
                   <img src="img/product.jpg" class="img-fluid" alt="">
                   <img src="img/effect.png" class="imghov" alt="">
                </div> 
              
                <div class="cardbody">
                      <h2>ალავერდი • ALAVERDI</h2>
                <p>ქართული სუფრა 12 სტუმარზე!  სასიამოვნო გარემო
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                </p>

                <div class="options">
                   <div class="parcs item">
                   <p class="price">250 ₾</p>
                   <p class="changs pers">1 პერსონა</p>
                   <p class="changs coun">1 პერსონა</p>
                   <p class="changs time">2 საათი</p>
                   </div>
                   <p class="changs mb-0"> <i class="changs bi bi-chevron-down"></i> </p>

                   <div class="moreops">
                   <div class="item dropeds">
                   <p class="price">250 ₾</p>
                   <p>2 პერსონა</p>
                   <p>3 პერსონა</p>
                   <p>4 საათი</p>
                   </div>
                   <div class="item dropeds">
                   <p class="price">250 ₾</p>
                   <p>5 პერსონა</p>
                   <p>6 პერსონა</p>
                   <p>72 საათი</p>
                   </div>
                   </div>

                </div>

                <div class="bywith">
                    <button class="forme">ვიყიდი ჩემთვის</button>
                    <button class="foryou">ვიყიდი საჩუქრად</button>
                </div>

                </div>
  
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="prodcard">
            <div class="hoverable">
             <a href="detals.php"> 
                    <span class="wish"><i class="bi bi-heart-fill"></i></span>
                   <img src="img/product.jpg" class="img-fluid" alt="">
                   <img src="img/effect.png" class="imghov" alt="">
</a>
                </div> 
                <div class="cardbody">
                    <a href="detals.php"> 
                      <h2>ალავერდი • ALAVERDI</h2>
                <p>ქართული სუფრა 12 სტუმარზე!  სასიამოვნო გარემო
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                </p>
                </a>
                <div class="options">
                   <div class="item">
                   <p class="price">250 ₾</p>
                   <p>1 პერსონა</p>
                   <p>1 პერსონა</p>
                   <p> 2 საათი</p>
                   <p> <i class="bi bi-chevron-down"></i> </p>
                   </div>
                </div>

                <div class="bywith">
                    <button class="forme">ვიყიდი ჩემთვის</button>
                    <button class="foryou">ვიყიდი საჩუქრად</button>
                </div>

                </div>
  
            </div>
        </div>

                <!-- item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                 <div class="banner">
                    <div>
                     <h3>5 გამოცდილება  ასარჩევად</h3>

                    <p>
                    დაამატე 5-მდე   შთაბეჭდილება 
საჩუქრად ზუსტად  გამოსაცნობად! 
მიმღები  თავად აირჩევს და 
მოინახულებს სასურველ 
სერვისს.
                    </p>    
                    </div>
                   
                 </div>
        </div>

        <!-- end -->

                <!-- item -->
                <div class="col-lg-4 col-sm-6">
            <div class="prodcard">
            <div class="hoverable">
                    <span class="wish"><i class="bi bi-heart-fill"></i></span>
                   <img src="img/product.jpg" class="img-fluid" alt="">
                   <img src="img/effect.png" class="imghov" alt="">
                </div> 
                <div class="cardbody">
                      <h2>ალავერდი • ALAVERDI</h2>
                <p>ქართული სუფრა 12 სტუმარზე!  სასიამოვნო გარემო
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                </p>

                <div class="options">
                   <div class="item">
                   <p class="price">250 ₾</p>
                   <p>1 პერსონა</p>
                   <p>1 პერსონა</p>
                   <p> 2 საათი</p>
                   <p> <i class="bi bi-chevron-down"></i> </p>
                   </div>
                </div>

                <div class="bywith">
                    <button class="forme">ვიყიდი ჩემთვის</button>
                    <button class="foryou">ვიყიდი საჩუქრად</button>
                </div>

                </div>
  
            </div>
        </div>

        <!-- end -->

        <!-- item -->
        <div class="col-lg-4 col-sm-6">
            <div class="prodcard">
            <div class="hoverable">
                    <span class="wish"><i class="bi bi-heart-fill"></i></span>
                   <img src="img/product.jpg" class="img-fluid" alt="">
                   <img src="img/effect.png" class="imghov" alt="">
                </div> 
                <div class="cardbody">
                      <h2>ალავერდი • ALAVERDI</h2>
                <p>ქართული სუფრა 12 სტუმარზე!  სასიამოვნო გარემო
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                </p>

                <div class="options">
                   <div class="item">
                   <p class="price">250 ₾</p>
                   <p>1 პერსონა</p>
                   <p>1 პერსონა</p>
                   <p> 2 საათი</p>
                   <p> <i class="bi bi-chevron-down"></i> </p>
                   </div>
                </div>

                <div class="bywith">
                    <button class="forme">ვიყიდი ჩემთვის</button>
                    <button class="foryou">ვიყიდი საჩუქრად</button>
                </div>

                </div>
  
            </div>
        </div>

        <!-- end -->

        <div class="col-lg-4 col-sm-6">
            <div class="prodcard">
                <div class="hoverable">
                    <span class="wish"><i class="bi bi-heart-fill"></i></span>
                   <img src="img/product.jpg" class="img-fluid" alt="">
                   <img src="img/effect.png" class="imghov" alt="">
                </div> 
              
                <div class="cardbody">
                      <h2>ალავერდი • ALAVERDI</h2>
                <p>ქართული სუფრა 12 სტუმარზე!  სასიამოვნო გარემო
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                </p>

                <div class="options">
                   <div class="item">
                   <p class="price">250 ₾</p>
                   <p>1 პერსონა</p>
                   <p>1 პერსონა</p>
                   <p> 2 საათი</p>
                   <p> <i class="bi bi-chevron-down"></i> </p>
                   </div>
                </div>

                <div class="bywith">
                    <button class="forme">ვიყიდი ჩემთვის</button>
                    <button class="foryou">ვიყიდი საჩუქრად</button>
                </div>

                </div>
  
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div class="prodcard">
                <div class="hoverable">
                    <span class="wish"><i class="bi bi-heart-fill"></i></span>
                   <img src="img/product.jpg" class="img-fluid" alt="">
                   <img src="img/effect.png" class="imghov" alt="">
                </div> 
              
                <div class="cardbody">
                      <h2>ალავერდი • ALAVERDI</h2>
                <p>ქართული სუფრა 12 სტუმარზე!  სასიამოვნო გარემო
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                </p>

                <div class="options">
                   <div class="item">
                   <p class="price">250 ₾</p>
                   <p>1 პერსონა</p>
                   <p>1 პერსონა</p>
                   <p> 2 საათი</p>
                   <p> <i class="bi bi-chevron-down"></i> </p>
                   </div>
                </div>

                <div class="bywith">
                    <button class="forme">ვიყიდი ჩემთვის</button>
                    <button class="foryou">ვიყიდი საჩუქრად</button>
                </div>

                </div>
  
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div class="prodcard">
                <div class="hoverable">
                    <span class="wish"><i class="bi bi-heart-fill"></i></span>
                   <img src="img/product.jpg" class="img-fluid" alt="">
                   <img src="img/effect.png" class="imghov" alt="">
                </div> 
              
                <div class="cardbody">
                      <h2>ალავერდი • ALAVERDI</h2>
                <p>ქართული სუფრა 12 სტუმარზე!  სასიამოვნო გარემო
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                უგემრიელესი  კერძები და ცოცხალი მუსიკა 
                </p>

                <div class="options">
                   <div class="item">
                   <p class="price">250 ₾</p>
                   <p>1 პერსონა</p>
                   <p>1 პერსონა</p>
                   <p> 2 საათი</p>
                   <p> <i class="bi bi-chevron-down"></i> </p>
                   </div>
                </div>

                <div class="bywith">
                    <button class="forme">ვიყიდი ჩემთვის</button>
                    <button class="foryou">ვიყიდი საჩუქრად</button>
                </div>

                </div>
  
            </div>
        </div>

    </div>
 </div>
</section>

<section class="promobanner">
    <div class="container">
        <div class="row sw-arrow">
         <div class="col-lg-6 col-sm-6">
         <h1 class="headline">
        TOP - <span >10</span>  ღონისძიება
        </h1>
         </div>
         <div class="col-lg-6 col-sm-6 d-flex align-item-center mb-3 mb-sm-0 justify-content-start justify-content-sm-end">
            <button class="bt-left"><i class="bi bi-chevron-left"></i></button>
            <button class="bt-right"><i class="bi bi-chevron-right"></i></button>
         </div>
        </div>

        <div class="swiper mySwiper">
    <div class="swiper-wrapper">  
         <!-- start -->
      <div class="swiper-slide">
      <div class="ban">
                <img src="img/bans.webp" alt="">
                <div class="banbody">
                    <a href="detapish.php"> 
                    <h3>ჩექმებიანი კატა კინოკავეა +</h3>
                    <p>ი. ბრამსი - საფორტეპიანო კონცერტი 
ლ. ვ. ბეთჰოვენი - სიმფონია N3 
გია ყანჩელის სახელობის თბილისის  
  
</p>
</a>
                </div>
              </div>
      </div>
 <!-- end -->
          <!-- start -->
          <div class="swiper-slide">
      <div class="ban">
                <img src="img/bans.webp" alt="">
                <div class="banbody">
                    <a href="detapish.php"> 
                    <h3>ჩექმებიანი კატა კინოკავეა +</h3>
                    <p>ი. ბრამსი - საფორტეპიანო კონცერტი 
ლ. ვ. ბეთჰოვენი - სიმფონია N3 
გია ყანჩელის სახელობის თბილისის  
  
</p>
</a>
                </div>
              </div>
      </div>
 <!-- end -->
          <!-- start -->
          <div class="swiper-slide">
      <div class="ban">
                <img src="img/bans.webp" alt="">
                <div class="banbody">
                    <a href="detapish.php"> 
                    <h3>ჩექმებიანი კატა კინოკავეა +</h3>
                    <p>ი. ბრამსი - საფორტეპიანო კონცერტი 
ლ. ვ. ბეთჰოვენი - სიმფონია N3 
გია ყანჩელის სახელობის თბილისის  
  
</p>
</a>
                </div>
              </div>
      </div>
 <!-- end -->
          <!-- start -->
          <div class="swiper-slide">
      <div class="ban">
                <img src="img/bans.webp" alt="">
                <div class="banbody">
                    <a href="detapish.php"> 
                    <h3>ჩექმებიანი კატა კინოკავეა +</h3>
                    <p>ი. ბრამსი - საფორტეპიანო კონცერტი 
ლ. ვ. ბეთჰოვენი - სიმფონია N3 
გია ყანჩელის სახელობის თბილისის  
  
</p>
</a>
                </div>
              </div>
      </div>
 <!-- end -->
          <!-- start -->
          <div class="swiper-slide">
      <div class="ban">
                <img src="img/bans.webp" alt="">
                <div class="banbody">
                    <a href=""> 
                    <h3>ჩექმებიანი კატა კინოკავეა +</h3>
                    <p>ი. ბრამსი - საფორტეპიანო კონცერტი 
ლ. ვ. ბეთჰოვენი - სიმფონია N3 
გია ყანჩელის სახელობის თბილისის  
  
</p>
</a>
                </div>
              </div>
      </div>
 <!-- end -->
    </div>
   
  </div>
        
         
    </div>
</section>


<?php
include "sec2.php";

include "ban2.php";
?>


<section class="slog">

  <div class="container">
     <h5> ცხოვრობ ერთხელ , ესე იგი <span> შთამბეჭდავი</span>  ემოციების დროა ! </h5>
  </div>

</section>

<section class="newlatters">
  <div class="col-lg-6 mx-auto">
    <form action="" class="newl">
        <h4>არ გამოტოვოთ გამოიწერეთ ახალი შთაბეჭდილებები და ივენთები </h4>
       <div class="inps">
         <input type="text" class="form-control" placeholder="თქვენი ელ:ფოსტა">
         <button class="btn btn-sends"><i class="bi bi-send-fill"></i></button>
       </div>
    </form>
  </div>
</section>
    
<?php
include "footer.php";
?>
</body>
</html>
