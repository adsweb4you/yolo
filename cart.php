 
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
            <div class="step  " data-st="pack">
                <div class="base-text">
                    <i class="bi bi-box-seam"></i>
                    <p>შეფუთვა</p>
                </div>
                <div class="icons">
                    <i class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="step  " data-st="userinfo">
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
            <div class="col-lg-9 shadow-sm p-5  show" id="bags">
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
            <div class="col-lg-9 shadow-sm p-5  " id="pack">

                <h2 class="packhge">აირჩიეთ პაკეტი</h2>

               <!-- bytype -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="orderType packs mb-3 dely curr">
                            <span> <i class="bi bi-check2"></i> </span>
                            <p class="mb-0">სასაჩუქრე პაკეტი</p>
                            <small>მიწოდება ან გატანა</small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="orderType packs mb-3 sert">
                            <span> <i class="bi bi-check2"></i> </span>
                            <p class="mb-0">ელექტრონული სერტიფიკატი</p>
                            <small>გაგზავნა ელ:ფოსტა ან ტელ ნომერი</small>
                        </div>
                    </div>
                </div>
                <!-- endtype -->

                <!-- packing -->
                <div class="row packing">
                  <div class="col-lg-7 py-5">
                    <h3 class="cardname">ვარდი მწვანე</h3>
                    <small>(ბარათის დიზაინი)</small>
                    <p class="prics" id="crp">25 ₾</p>
                    <div class="variant" id="cards">
                     <img class="act" data-img="img/baseimg.png" data-price="14" data-name="ვარდი მწვანე" src="img/st1.svg" alt="">
                     <img data-img="img/changecolor.png" data-price="23" data-name="ვარდი ყვითელი" src="img/st2.svg" alt="">
                     <img data-img="img/changecolor.png" data-price="6" data-name="ვარდი შავი" src="img/st3.svg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-5 py-5">
                    <img class="baseimgs" src="img/baseimg.png" id="cardimg" alt="">
                  </div>
                </div>
                <!-- endpacking -->

                <div class="row packing">
                  <div class="col-lg-7 py-5">
                    <h3 class="packname">ვარდი მწვანე</h3>
                    <small>(ჩანთის დიზაინი)</small>
                    <p class="prics" id="pcp">15 ₾</p>
                    <div class="variant" id="packs">
                     <img class="act"  data-img="img/pack.png" data-price="14" data-name="ვარდი მწვანე" src="img/st1.svg" alt="">
                     <img  data-img="img/changecolor2.png" data-price="23" data-name="ვარდი ყვითელი" src="img/st2.svg" alt="">
                     <img  data-img="img/changecolor2.png" data-price="6" data-name="ვარდი შავი" src="img/st3.svg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-5 py-5">
                    <img class="baseimgs" id="pckimg" src="img/pack.png" alt="">
                  </div>
                </div>

                <div class="row digitals">
                    <div class="col-lg-6 py-5">
                      <p>
                        შესაძლებლობა მივულოცო ადამიანს,
თუ შეუძლებელია პირადად 
საჩუქრის წარდგენა. წერილი ან SMS
თქვენგან სურვილებით და 
შთაბეჭდილების დამადასტურებელი 
ცნობა გადაეგზავნება 
დაბადების დღის ადამიანს სწორ
თარიღსა და დროს. სერთიფიკატის 
ასლი მიეწოდება თქვენს ელ. ფოსტას
იმავდროულად, როდესაც ის 
გაიგზავნება ადრესატს თქვენს მიერ
მითითებულ დროს.
<br>
თქვენ ასევე შეგიძლიათ მიუთითოთ 
თქვენი ელ. ფოსტა
რომ თავად მიიღოთ სერთიფიკატი 
და, მაგალითად,
დაბეჭდოთ იგი.
                      </p>
                    </div>
                    <div class="col-lg-6 p-5">
                      <img class="baseimgs" id="pckimg" src="img/digs.png" alt="">
                    </div>
                  </div>


            </div>
            <div class="col-lg-9 shadow-sm p-5  " id="userinfo">
                <h2 class="packhge">ვისთვის უკვეთავთ?</h2>

                          <!-- bytype -->
                          <div class="row">
                            <div class="col-lg-6">
                                <div class="orderType addrs mb-3 dely curr">
                                    <span> <i class="bi bi-check2"></i> </span>
                                    <p class="mb-0">გაუგზავნეთ ადრესატს
                                        შერჩეულ დროს</p>
                                  
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="orderType addrs mb-3 sert">
                                    <span> <i class="bi bi-check2"></i> </span>
                                    <p class="mb-0">გაუგზავნეთ საჩუქარი საკუთარ თავს 
                                        (ჩვენ გამოგიგზავნით გადახდის შემდეგ)</p>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- endtype -->

                        <form action="" class="base-form">
                          
                           <div class="row">
                             <div class="col-lg-6 col-sm-6">
                              <input type="text" class="form-control" placeholder="სახელი გვარი">
                             </div>
                             <div class="col-lg-6 col-sm-6">
                             <input type="text" class="form-control" placeholder="ელ:ფოსტა">
                             </div>
                             <div class="col-lg-6">
                             <select name="" class="form-control"  id="">
                              <option value="1" disabled selected>სქესი</option>
                              <option value="1">კაცი</option>
                              <option value="1">ქალი </option>
           
                             </select>
                             </div>
                             <div class="col-lg-6 col-sm-6">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <select name="" class="form-control p-0"  id="">
                                         <option value="1"  >+995</option>
                                         <option value="1">+80</option>
                                         <option value="1">+92 </option>
                      
                                        </select>
                                        </div>
                                    <div class="col-lg-8 col-sm-6">
                                        <input type="text" class="form-control" placeholder="ტელ:ნომერი">
                                     </div>
                                </div>
                                
                             </div>
                             <div class="col-lg-12">
                             <textarea class="form-control" rows="10" placeholder="მილოცვის ტექსტი"></textarea>
                             </div>

                     

                                              <!-- check -->
                 <div class="col-lg-4 col-sm-6 mb-3">
                    <div class="costumcheck">
                     <label for="check11">
                     <input type="checkbox" id="check11"  class="d-none">
                     <span class="ball">
                     <i class="bi bi-check-lg"></i>
                     </span>
                     <span class="borders"></span>
                     ანონიმური გზავნილი
                    </label>
                    </div>
                    </div>
                    <!-- endcheck -->
                    <div class="col-lg-8 col-sm-6 mb-3 pt-3"></div>

             
                        <div class="col-lg-6 col-sm-6 position-relative" id="bd">
                        <input type="text" class="form-control" placeholder="მიტანის თარიღი">
                        <i class="bi bi-calendar-week-fill"></i>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <input type="time" class="form-control" placeholder="მიტანის დრო">
                           
                            </div>

                             <div class="col-lg-12">
                                 <button class="save-user">შეკვეთა</button>
                             </div>

                           </div>
                          </form>


            </div>


            <div class="col-lg-3">
            <div class="sum">
                <h3>სერტიფიკატის ღირებულება</h3>
                <p>9500 ₾</p>
                <button class="ord">შემდეგი საფეხური</button>
            </div>
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
