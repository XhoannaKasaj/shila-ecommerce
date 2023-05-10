<?php
include 'header.php';
?>

       <!-- Page 2 -->
       <section class="page2">
        <div class="container">
        <div class="swiper">
        <div class="swiper-wrapper">
                <div class="swiper-slide sale-image1-slide"> 
                  <div class="card">
                    <img src="images/grid/background-Image.png" class="card-img" alt="...">
                    <div class="card-img-overlay text-white mt-1">
                      <h5 class="card-title">New Collection </h5>
                      <div class="slider-button">
                        <button type="button" class="btn btn-light shop-button-homepage">Shop Now</button>
                      </div>
                    </div>
                  </div>       
                </div>

                <div class="swiper-slide">
                  <div class="card">
                    <img src="images/grid/background-Image.png" class="card-img" alt="...">
                    <div class="card-img-overlay text-white mt-1">
                      <h5 class="card-title">New Collection </h5>
                      <div class="slider-button">
                        <button type="button" class="btn btn-light shop-button-homepage">Shop Now</button>
                      </div>
                    </div>
                  </div>                   
                </div> 

                <div class="swiper-slide sale-image1-slide"> 
                  <div class="card">
                    <img src="images/grid/background-Image.png" class="card-img" alt="...">
                    <div class="card-img-overlay text-white mt-1">
                      <h5 class="card-title">New Collection </h5>
                      <div class="slider-button">
                        <button type="button" class="btn btn-light shop-button-homepage">Shop Now</button>
                      </div>
                    </div>
                  </div>       
              </div>
      </div>

      <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
 

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
        </div>
        </div>
    </section>

    <!-- Page 3 -->
    <section class="page3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card text-white">
                        <img src="images/grid/new.jpg" class="card-img images-homepage" alt="...">
                        <div class="card-img-overlay product-text">
                          <h5 class="card-title product-name">New Textures</h5>
                          <a href="catalog.php"><ion-icon name="arrow-forward-outline" class="next-button-first-image"></ion-icon></a>
                        </div>
                    </div> 
                </div>

                <div class="col-3">
                <div class="row">
                     <div class="col-12">
                        <div class="card text-white">
                            <img src="images/grid/summer-hats.jpg" class="card-img images-homepage" alt="...">
                            <div class="card-img-overlay product-text">
                              <h5 class="card-title product-name">Summer Hats</h5>
                              <a href="catalog.php"><ion-icon name="arrow-forward-outline" class="next-button"></ion-icon></a>
                            </div>
                        </div>
                       </div>
                  
                    <div class="col-12">
                        <div class="card text-white">
                            <img src="images/grid/party-shoes.jpg" class="card-img images-homepage mt-4" alt="...">
                            <div class="card-img-overlay product-text">
                              <h5 class="card-title product-name">Party Shoes</h5>
                              <a href="catalog.php"><ion-icon name="arrow-forward-outline" class="next-button"></ion-icon></a>
                            </div>
                        </div>  
                    </div>
                </div>
                </div>
                
                <div class="col-3">
                    <div class="card text-white">
                        <img src="images/grid/natural.jpg" class="card-img images-homepage" alt="...">
                        <div class="card-img-overlay product-text">
                          <h5 class="card-title product-name">Natural Fibers</h5>
                          <a href="catalog.php"><ion-icon name="arrow-forward-outline" class="next-button-last-image"></ion-icon></a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <!-- Page 4 -->
    <section class="page4 mt-5">
        <div class="container">
            <p class="paragraph-of-page4">Lorem ipsum dolorsit amet,consectetur adipiscing elit.Vivamus sed fermentum nibh, vel aliquet massa.Etiam in magna id risus lacinia luctus eget eu est.</p>
            <h4 class="subtitle-of-page4 mt-4">Featured Products</h4>
        </div>
    </section>


<?php
include 'slider.php';
include 'subscribe.php';
include 'footer.php';
?>