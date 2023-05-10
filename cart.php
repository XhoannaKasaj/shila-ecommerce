<?php
include 'header.php';
?>

<body>
    <section class="section2-page4 mt-3">
        <div class="container subtitle-page2">
            <h3 class="text-of-page2">Shopping Cart</h3>
        </div>
    </section>

    <section class="section3-page4 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    Product
                </div>

                <div class="col-md-2">Price</div>
                <div class="col-md-2">Quantity</div>
                <div class="col-md-2">Total</div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images\grid\jeanss.jpg" alt="">
                        </div>

                        <div class="col-md-7 mt-3">
                            <h5>Jeans with sequins</h5>
                            <p>Size <span>XL</span> Color <span>Blue</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 mt-4">
                    <p>$39,00</p>
                </div>

                <div class="col-md-2 mt-4">
                    <div class="btn-group">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            2
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">3</a></li>
                            <li><a class="dropdown-item" href="#">4</a></li>
                            <li><a class="dropdown-item" href="#">9</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 mt-4">
                    <h5>$78,00</h5>
                </div>

                <div class="col-md-1 mt-4">
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images\grid\mini-wooden-bag.jpg" alt="">
                        </div>

                        <div class="col-md-7 mt-4">
                            <h5>Mini wooden tote bag</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 mt-4">
                    <p>$29,00</p>
                </div>

                <div class="col-md-2 mt-4">
                    <div class="btn-group">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            1
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">3</a></li>
                            <li><a class="dropdown-item" href="#">4</a></li>
                            <li><a class="dropdown-item" href="#">9</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 mt-4">
                    <h5>$29,00</h5>
                </div>

                <div class="col-md-1 mt-4">
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-9">
                    <p>Do you have a discount?</p>
                    <div class="buttons mt-4">
                        <div class="input-group">
                            <input type="email"placeholder="Coupon code" aria-label="YOUR EMAIL">
                            <a href="checkout.php"><ion-icon name="arrow-forward-outline" class="next-button-page4"></ion-icon></a>
                        </div>
                     </div>
                </div>

                <div class="col-md-3">
                    <p>Shipping</p>
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                        Express Delivery -$20
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <li><button class="dropdown-item" type="button">Express Delivery -$70</button></li>
                          <li><button class="dropdown-item" type="button">Card</button></li>
                        </ul>
                      </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Discount</p>
                            <h5>Total</h5>
                        </div>
                        
                        <div class="col-md-6">
                            <p>-$10</p>
                            <h5>$117,00</h5>
                        </div>
                    </div>

                    <button type="button" class="btn btn-dark checkout-button mt-2">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </section>
</body>

<?php
include 'footer.php';
?>