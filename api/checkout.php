<?php require_once(__DIR__ . "/bootstrap.php"); ?>
<?php $head_title="Checkout | Wooden Magic interiors"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header4.php'); ?>
<?php
$page_title = "Checkout";
require_once('parts/page-title.php');
?>

        <!--Start Checkout Area-->
        <section class="checkout-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="form billing-info">
                            <div class="title">
                                <h3>Billing details</h3>
                            </div>
                            <form method="post" action="checkout.php">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-label">First name *</div>
                                        <div class="field-input">
                                            <input type="text" name="fname" value="" placeholder="First Name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-label">Last name *</div>
                                        <div class="field-input">
                                            <input type="text" name="lname" value="" placeholder="Last Name"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="field-label">Country / Region *</div>
                                        <div class="field-input">
                                            <div class="checkout__select-box">
                                                <select class="selectpicker" aria-label="Default select example">
                                                    <option selected>London</option>
                                                    <option value="1">Bangladesh</option>
                                                    <option value="2">United State</option>
                                                    <option value="3">United Kingdom (UK)</option>
                                                    <option value="3">Canada</option>
                                                    <option value="3">France</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="field-label">Street address *</div>
                                        <div class="field-input address">
                                            <input type="text" name="address" value="" placeholder="Street address"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-label">Town / City *</div>
                                        <div class="field-input address">
                                            <input type="text" name="address" value="" placeholder="Town" required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-label">State *</div>
                                        <div class="field-input">
                                            <div class="checkout__select-box">
                                                <select class="selectpicker" aria-label="Default select example">
                                                    <option selected>Abbey Road</option>
                                                    <option value="1">Bangladesh</option>
                                                    <option value="2">United State</option>
                                                    <option value="3">United Kingdom (UK)</option>
                                                    <option value="3">Canada</option>
                                                    <option value="3">France</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="field-label">ZIP Code *</div>
                                        <div class="field-input">
                                            <input type="text" name="zipcode" value="" placeholder="ZIP Code "
                                                required="">
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-label">Phone *</div>
                                        <div class="field-input">
                                            <input type="tel" name="phone" placeholder="Phone"
                                                pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-label">Email address *</div>
                                        <div class="field-input">
                                            <input type="email" name="email" value="" placeholder="Email address"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="checkout-area__checkbox">
                                                <div class="checkout-area__checkbox-single">
                                                    <input type="checkbox" name="free-parking" id="tag_1">
                                                    <label for="tag_1"><span></span>Ship to a different address?</label>
                                                </div>

                                                <div class="checkout-area__checkbox-single">
                                                    <input type="checkbox" name="friendly-workspace" id="tag_2" checked>
                                                    <label for="tag_2"><span></span>Create an account?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="field-label style2">Order notes (optional)</div>
                                        <div class="field-input">
                                            <textarea name="order-notes" placeholder="Note about your order"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    <!--Start Checkout Area Sidebar-->
                    <div class="col-xl-4 col-lg-5">
                        <div class="checkout-area__sidebar">
                            <div class="checkout-area__sidebar-single">
                                <div class="title">
                                    <h3>Order summary</h3>
                                </div>
                                <ul>
                                    <li>
                                        <div class="text-box">
                                            <div class="img-box">
                                                <img src="assets/img/shop/checkout-page-img1.jpg" alt="#">
                                            </div>
                                            <div class="title-one">
                                                <p>Mike and <br>
                                                    honey 1 pic</p>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <p>$300.00</p>
                                        </div>
                                    </li>

                                    <li class="bg">
                                        <div class="text-box">
                                            <div class="title-box">
                                                <p>Cart Totals</p>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <p>$300.00</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="text-box">
                                            <div class="title-box">
                                                <p>SubTotal</p>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <p>$300.00</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="text-box">
                                            <div class="title-box">
                                                <p>Shipping</p>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <p class="text1">Flat rate: $20.00</p>
                                            <span>Shipping to USA</span>
                                            <a href="#">Change address</a>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="text-box">
                                            <div class="title-box">
                                                <p>Total</p>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <p>$320.00</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="checkout-area__sidebar-single mb0">
                                <div class="title">
                                    <h3>Payment information</h3>
                                </div>

                                <div class="checkout__payment">
                                    <div class="checkout__payment__item checkout__payment__item--active">
                                        <h3 class="checkout__payment__title">Direct bank transfer</h3>
                                        <div class="checkout__payment__content">
                                            Make your payment directly into our bank account.
                                        </div>
                                    </div>

                                    <div class="checkout__payment__item">
                                        <h3 class="checkout__payment__title">Online Payment </h3>
                                        <div class="checkout__payment__content">
                                            Make your payment directly into our bank account.
                                        </div>
                                    </div>

                                    <div class="checkout__payment__item mb0">
                                        <h3 class="checkout__payment__title">PayPal</h3>
                                        <div class="checkout__payment__content">
                                            Make your payment directly into our bank account.
                                        </div>
                                    </div>

                                </div>

                                <div class="checkout__payment__checkbox">
                                    <div class="checkout-area__checkbox-single">
                                        <input type="checkbox" name="checkbox" id="tag_3">
                                        <label for="tag_3"><span></span>I have read and agree to the <br> website terms
                                            and
                                            conditions</label>
                                    </div>
                                </div>

                                <div class="checkout__payment-btn clearfix">
                                    <a class="thm-btn" href="checkout.php"><span class="txt">Place
                                            order</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Checkout area Sidebar-->
                </div>
            </div>
        </section>
        <!--End Checkout area-->
        <?php require_once('parts/footer/footer.php'); ?>
        <?php require_once('parts/layout/bottom-layout.php'); ?>

        