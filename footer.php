 
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
       <div class="minh">
       <h4 class="fotheader">ინფორმაცია</h4>
        <a href="">YOLO-ს შესახებ</a>
        <a href="">მიტანის პირობები</a>
        <a href="">წესები & პირობები</a>
        <a href="">კონტაქტი</a>
       </div>

        <img src="img/logo.png" class="footlogo" alt="">
      </div>
      <div class="col-lg-3">
     <div class="minh">
     <h4 class="fotheader">კომპანია</h4>
        <a href="">ბლოგი  </a>
        <a href="">სიახლეები</a>
     </div>
        <img src="img/master.svg" class="footlogo" alt="">
      </div>
      <div class="col-lg-6">
      <h4 class="fotheader">კონტაქტი</h4>

      <p class="social"><i class="bi bi-geo-alt-fill"></i> თბილისი საქართველო  , სტურუას 24 ა</p>
      <p class="social"><i class="bi bi-envelope"></i> info@yolo.ge</p>
      <p class="social"><i class="bi bi-telephone-fill"></i> +995 55 88 77</p>
      </div>
    </div>
  </div>
  <div class="copy">
  <div class="container">
  ©  2023  yolo.ge
  </div>
 </footer>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="js/mine.js"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js" integrity="sha512-dSI4QnNeaXiNEjX2N8bkb16B7aMu/8SI5/rE6NIa3Hr/HnWUO+EAZpizN2JQJrXuvU7z0HTgpBVk/sfGd0oW+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      loop:true,
      navigation: {
        nextEl: ".bt-left",
        prevEl: ".bt-right",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
   
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
      },
    });
  </script>