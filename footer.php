<!-- FOOTER -->
<footer>
    <!-- Page 7 -->
    <section class="page7">
        <hr>
        <div class="container">
            <div class="first-navbar-of-page7">
                <nav class="navbar-of-page7">
                    <ul class="navbar-list">
                        <li class="navbar-item-page7"><a href="#">Policy</a></li>
                        <li class="navbar-item-page7"><a href="#">Terms</a></li>
                        <li class="navbar-item-page7"><a href="#">FAQS</a></li>
                        <li class="navbar-item-page7"><a href="#">Support</a></li>
                    </ul>
                </nav>
            </div>

            <div class="second-navbar-of-page7">
                <nav class="navbar-of-page7">
                    <ul class="navbar-list">
                        <li class="second-navbar-item-page7"><a href="#">Facebook</a></li>
                        <li class="second-navbar-item-page7"><a href="#">Instagram</a></li>
                        <li class="second-navbar-item-page7"><a href="#">Twitter</a></li>
                        <li class="second-navbar-item-page7"><a href="#">Youtube</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <!-- Page 8 -->
    <section class="page8 mt-4">
        <div class="text-of-page8 mt-3">
            <p>&copy; 2018 SHILA</p>
        </div>
    </section>
</footer>

 <!-- custom js file link  -->
    <!-- custom js file link  -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src= "https://rawgit.com/artberri/sidr-package/master/jquery.sidr.min.js"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    const swiper = new Swiper('.swiper', {
      slidesPerView: 1,
      spaceBetween: 10,
      slidesPerGroup :1,
      autoplay: false,
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

});
  });


  $(document).ready(function(){
    const swiper = new Swiper('.swiper-product', {
      watchOverflow : true,	// hide navigation in case no slides
      slidesPerView: 4,
      spaceBetween: 10,
      slidesPerGroup: 4,
      autoplay: true,


});
  });
</script>

<script>$(document).ready(function(){
  var activeCat = "";
  function filterGroup(group){
    if(activeCat != group){
      $("div").filter("."+group).show();
      $("div").filter(":not(."+group+")").hide();
      activeCat = group;
    }
  }
  
  $(".cat-all").click(function(){
    $("div").show();
    activeCat = "all";
  });
  $(".cat-1").click(function(){ filterGroup("group-1"); });
  $(".cat-2").click(function(){ filterGroup("group-2"); });
  $(".cat-3").click(function(){ filterGroup("group-3"); });
});
</script>




</body>
</html>