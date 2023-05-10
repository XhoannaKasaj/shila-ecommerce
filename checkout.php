<?php
include 'header.php';
?>

<body>
    <section class="section2-page5 mt-3">
        <div class="container subtitle-page2">
            <h3 class="text-of-page2">Checkout</h3>
        </div>
    </section>

    <section class="section3-page5 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-5">
                        <label for="validationCustom01" class="form-label">Email</label>
                        <input type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">Looks good!</div>
                    </div>

                    <div class="col-md-5">
                        <label for="validationCustom02" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="validationCustom02"  required>
                        <div class="valid-feedback">Looks good!</div>
                    </div>

                    <h4>Shipping address</h4>
                    <div class="col-md-5">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please enter your first name.</div>
                    </div>

                    <div class="col-md-5">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02"  required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please enter your last name.</div>
                    </div>
  
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Address</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">Please provide a valid Address*.</div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">Apt,suite,etc.*</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">Please provide a valid Address*.</div>
                    </div>

                    <div class="col-md-5">
                        <label for="validationCustom03" class="form-label">City</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">Please provide a valid city.</div>
                    </div>

                    <div class="col-md-5">
                        <label for="validationCustom03" class="form-label">Country</label>
                        <select class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">United Kingdom</option>
                        <option>Albania</option>
                        <option>France</option>
                        </select>
                        <div class="invalid-feedback">Please provide a valid country.</div>
                    </div>
  
                    <div class="col-md-5">
                        <label for="validationCustom05" class="form-label">Postal Code</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">Please provide a valid postal code.</div>
                    </div>

                    <h4>Payment Method</h4>
                    <div class="form-check" style="    border: 2px solid lightgrey;
    padding: 12px 34px;
    width: 41%;">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Visa/Mastercard
  </label>
</div>

<div class="form-check" style="margin-left: 2%; border: 2px solid lightgrey;
    padding: 12px 34px;
    width: 41%;">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
  <label class="form-check-label" for="flexRadioDefault2">
   PayPal
  </label>
</div>
                </form>
                </div>

                <div class="col-md-4 right-part-of-page-5">
                    <p>Your order</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images\grid\jeanss.jpg" alt="">
                        </div>

                        <div class="col-md-7 mt-3">
                            <h6>Jeans with sequins</h6>
                            <p>Size <span>XL</span> Color <span>Blue</span></p>
                            <h6>$39,00 <span>x2</span></h6>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-4">
                            <img src="images\grid\mini-wooden-bag.jpg" alt="">
                        </div>

                        <div class="col-md-7 mt-4">
                            <h6>Mini wooden tote bag</h6>
                            <h6>$29,00</h6>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <p>Delivery</p>
                        </div>

                        <div class="col-md-9">
                            <p>$20 (Express Delivery)</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <p>Discount</p>
                        </div>

                        <div class="col-md-9">
                            <h6>-$10</h6>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <h3>Total</h3>
                        </div>

                        <div class="col-md-9">
                            <h3>$117,00</h3>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
</body>

<?php
include 'footer.php';
?>