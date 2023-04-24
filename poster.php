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

    <section class="categ">
        <div class="container">
            <div class="namearr d-flex justify-content-between align-items-center">
                <h4 class="categhead">კატეგორიები</h4>
                <div class="swicont">
                    <i class="bi bi-chevron-left lf"></i>
                    <i class="bi bi-chevron-right lr"></i>
                </div>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="categs">
                            <img src="img/icons/01.svg" alt="">
                            <h1>მუსიკა</h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="categs">
                            <img src="img/icons/03.svg" alt="">
                            <h1>კონო</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categ calendar">
        <div class="container position-relative">

            <button class="datsc scleft"><i class="bi bi-chevron-left"></i></button>
            <button class="datsc sclright"><i class="bi bi-chevron-right"></i></button>

            <div class="calensec">
                <div class="month">
                    <h2>მაისი</h2>
                    <div class="allday">

                        <div class="dayname">
                            <p>1</p>
                            <p>ორშ</p>
                        </div>
                        <div class="dayname">
                            <p>2</p>
                            <p>სამშ</p>
                        </div>
                        <div class="dayname">
                            <p>3</p>
                            <p>ოთხ</p>
                        </div>
                        <div class="dayname">
                            <p>4</p>
                            <p>ხუთ</p>
                        </div>
                        <div class="dayname">
                            <p>5</p>
                            <p>პარ</p>
                        </div>
                        <div class="dayname">
                            <p>6</p>
                            <p>შაბ</p>
                        </div>
                        <div class="dayname">
                            <p>7</p>
                            <p>კვი</p>
                        </div>
                        <div class="dayname">
                            <p>8</p>
                            <p>ორშ</p>
                        </div>
                        <div class="dayname">
                            <p>9</p>
                            <p>სამშ</p>
                        </div>
                        <div class="dayname">
                            <p>10</p>
                            <p>ოთხ</p>
                        </div>
                        <div class="dayname">
                            <p>11</p>
                            <p>ხუთ</p>
                        </div>
                        <div class="dayname">
                            <p>12</p>
                            <p>პარ</p>
                        </div>
                        <div class="dayname">
                            <p>13</p>
                            <p>შაბ</p>
                        </div>
                        <div class="dayname">
                            <p>14</p>
                            <p>კვი</p>
                        </div>
                    </div>
                </div>
                <div class="month">
                    <h2>ივნისი</h2>
                    <div class="allday">

                        <div class="dayname">
                            <p>1</p>
                            <p>ორშ</p>
                        </div>
                        <div class="dayname">
                            <p>2</p>
                            <p>სამშ</p>
                        </div>
                        <div class="dayname">
                            <p>3</p>
                            <p>ოთხ</p>
                        </div>
                        <div class="dayname">
                            <p>4</p>
                            <p>ხუთ</p>
                        </div>
                        <div class="dayname">
                            <p>5</p>
                            <p>პარ</p>
                        </div>
                        <div class="dayname">
                            <p>6</p>
                            <p>შაბ</p>
                        </div>
                        <div class="dayname">
                            <p>7</p>
                            <p>კვი</p>
                        </div>
                        <div class="dayname">
                            <p>8</p>
                            <p>ორშ</p>
                        </div>
                        <div class="dayname">
                            <p>9</p>
                            <p>სამშ</p>
                        </div>
                        <div class="dayname">
                            <p>10</p>
                            <p>ოთხ</p>
                        </div>
                        <div class="dayname">
                            <p>11</p>
                            <p>ხუთ</p>
                        </div>
                        <div class="dayname">
                            <p>12</p>
                            <p>პარ</p>
                        </div>
                        <div class="dayname">
                            <p>13</p>
                            <p>შაბ</p>
                        </div>
                        <div class="dayname">
                            <p>14</p>
                            <p>კვი</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="promobanner">

        <div class="container">
            <h1 class="headline">
                TOP - <span>10</span> ღონისძიება
            </h1>
            <div class="row">
                <?php
    include "apsh.php";
    ?>
            </div>
        </div>
    </section>

    <section class="promobanner">

        <div class="container">
            <h1 class="logoline">
               <img src="img/icons/01.svg" alt=""> მუსიკა
            </h1>
            <div class="row">
                <?php
    include "apsh.php";
    ?>
            </div>
        </div>
    </section>

    <section class="promobanner">

        <div class="container">
            <h1 class="logoline">
               <img src="img/icons/03.svg" alt=""> კინო
            </h1>
            <div class="row">
                <?php
    include "apsh.php";
    ?>
            </div>
        </div>
    </section>

    <section class="products bgsc pt-4">
        <div class="container">
            <h2>გართობა</h2>
           <div class="row">
               <div class="col-lg-4 col-sm-6  ">
                   <div class="prodcard bg-white">
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

               <div class="col-lg-4 col-sm-6  ">
                <div class="prodcard bg-white">
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
                <div class="prodcard  bg-white">
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

               </div>
               </div>
               </section>


    <section class="slog">

        <div class="container">
            <h5> ცხოვრობ ერთხელ , ესე იგი <span> შთამბეჭდავი</span> ემოციების დროა ! </h5>
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

    <script>
        var swiper3 = new Swiper(".swiper", {
            slidesPerView: 1,
            spaceBetween: 10,

            navigation: {
                nextEl: ".lf",
                prevEl: ".lr",
            },

            breakpoints: {
                640: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 30,
                },
            },
        });
    </script>

</body>

</html>