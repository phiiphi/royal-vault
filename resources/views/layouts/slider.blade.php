<div class="">
  <div class="swiper">
    <div class="swiper-wrapper ">
      <div class="swiper-slide myswiper">
        <img class="object-cover w-full h-80 md:h-96 overflow-hidden" src="http://royalvaults.com/wp-content/uploads/2018/09/s2.jpg" alt="image" />
        <!-- <div class="button-left">
            <h2 class="text-6xl text-black">LOYAL BULLION SECURITY VAULT</h2>
        </div> -->
      </div>
      <div class="swiper-slide">
        <img class="object-cover w-full overflow-hidden h-80 md:h-96" src="http://royalvaults.com/wp-content/uploads/2018/09/S3.jpg"
          alt="image" />
          <!-- <div class="button-left text-6xl uppercase">LOYAL BULLION SECURITY VAULT</div> -->
      </div>
      <div class="swiper-slide">
        <img class="object-cover w-full overflow-hidden h-80 md:h-96" src="https://www.nzbd.com/application/files/4415/4147/5228/slide2-bg.jpg"
          alt="image" />
          <!-- <div class="button-left">Hello world</div> -->
      </div>
      <div class="swiper-slide">
        <img class="object-cover w-full h-80 md:h-96" src="https://www.nzbd.com/application/files/7215/4147/5244/slide1-bg.jpg"
          alt="image" />
          <!-- <div class="button-left">Hello world</div> -->
      </div>
      <div class="swiper-slide">
        <img class="object-cover w-full h-80 md:h-96 overflow-hidden" src="{{ asset('images/slider1.jpeg') }}" 
          alt="image" />
          <!-- <div class="button-left">Hello world</div> -->
      </div>
    </div>
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper", {
        cssMode: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
        },
        autoplay: {
        delay: 9000,
        },
        mousewheel: true,
        keyboard: true,
      });
  </script>
</div>