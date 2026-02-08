<?php require_once(__DIR__ . "/bootstrap.php"); ?>
<?php $head_title="Cart | Wooden Magic interiors"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header4.php'); ?>
<?php
$page_title = "Cart";
require_once('parts/page-title.php');
?>

        <!--Start Cart Page-->
        <section class="cart-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cart-page__left">
                            <div class="table-responsive">
                                <table class="table cart-table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-box">
                                                    <div class="img-box">
                                                        <div class="inner">
                                                            <img src="assets/img/shop/cart-page-img1.jpg" alt="#">
                                                        </div>
                                                        <div class="product-box-croos-icon">
                                                            <i class="fas fa-times"></i>
                                                        </div>
                                                    </div>
                                                    <h3><a href="product-details.php">Cereal</a></h3>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-quantity">
                                                    <div class="product-quantity-box">
                                                        <div class="input-box">
                                                            <input class="quantity-spinner" type="text" value="1"
                                                                name="quantity">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                $300.00
                                            </td>
                                            <td>
                                                $300.00
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="cart-cupon__form-box">
                                <p class="cart-cupon__sub-title">Coupon code:</p>
                                <form action="#" class="default-form cart-cupon__form">
                                    <input type="text" placeholder="Type Your Coupon Code" class="cart-cupon__input">
                                    <button class="thm-btn" type="submit">
                                        <span class="txt">Add Code</span>
                                    </button>
                                </form>
                                <a href="#" class="cart-cupon__btn">Continue Shopping</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="cart-page__right">
                            <div class="cart-page__total-box">
                                <div class="cart-page__total-table-outer">
                                    <table class="cart-page__total-table">
                                        <tbody>
                                            <tr>
                                                <td>Cart totals</td>
                                                <td>$300.00</td>
                                            </tr>
                                            <tr>
                                                <td>Subtotal</td>
                                                <td>$300.00</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>
                                                    <p class="flat-rate">Flat rate: $20.00</p>
                                                    <p class="shipping-usa">Shipping to USA</p>
                                                    <p class="change-address"><a href="#">Change address</a></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td>$320.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <button class="proceed-checkout thm-btn" type="button"><span class="txt">Proceed to
                                        checkout</span></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Cart Page-->
        <?php require_once('parts/footer/footer.php'); ?>
        <?php require_once('parts/layout/bottom-layout.php'); ?>

        