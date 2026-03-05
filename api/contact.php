<?php require_once(__DIR__ . "/bootstrap.php"); ?>
<?php $head_title="Contact | Wooden Magic interiors"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header4.php'); ?>
<?php
$page_title = "Contact";
require_once('parts/page-title.php');
?>

        <!--Start Contact Page-->
        <section class="contact-page">
            <div class="contact-page__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__top-content">
                                <div class="contact-page__top-content-top">
                                    <h2>Have a space in mind or planning a new interior?</h2>
                                    <p>We’d love to understand your requirements and help you shape a space that feels thoughtful, functional, and well-crafted. Reach out to us to discuss your project or book a consultation.</p>
                                </div>

                                <div class="contact-page__top-content-bottom">
                                    <h2>Contact Info</h2>
                                    <ul>
                                        <li>
                                            <div class="inner">
                                                <div class="icon-box">
                                                    <span class="icon-pin"></span>
                                                </div>

                                                <div class="content-box">
                                                    <h4>Address</h4>
                                                    <p>989 5th A cross, Outer Ring Rd, HRBR Layout, Kalyan Nagar, Bengaluru, Karnataka 560113</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="inner">
                                                <div class="icon-box">
                                                    <span class="icon-phone"></span>
                                                </div>

                                                <div class="content-box">
                                                    <h4>Phone</h4>
                                                    <p><a href="tel:123456789">+91 9986301995</a></p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="inner">
                                                <div class="icon-box">
                                                    <span class="icon-envelope"></span>
                                                </div>

                                                <div class="content-box">
                                                    <h4>Email</h4>
                                                    <p><a href="mailto:yourmail@email.com">projects@woodenmagic.in</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__google-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34383.50497785744!2d77.59262171583087!3d13.006366955807572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae176311bc13c7%3A0xda1ef980cc21df5d!2sRP%20Detailing%20Studio!5e0!3m2!1sen!2sin!4v1772693399423!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-page__bottom">
                <!--Start Contact Two-->
                <div class="contact-two">
                    <div class="container">
                        <div class="contact-two__inner">
                            <div class="title-box">
                                <h2>Let’s Get in Touch</h2>
                                <p>Your email address will not be published. Required fields are marked *</p>
                            </div>
                            <div class="contact-two__inner-box">
                                <form action="assets/inc/sendemail.php"
                                    class="contact-page__form contact-form-validated">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Your Name*" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="email" placeholder="Your Email*" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Phone*" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Subject*" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <textarea name="message" placeholder="Write Message*"></textarea>
                                            </div>
                                            <div class="contact-page__btn">
                                                <button class="thm-btn" type="submit"
                                                    data-loading-text="Please wait...">
                                                    <span class="txt">
                                                        SEND MEASSAGE
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Contact Two-->
            </div>
        </section>
        <!--End Contact Page-->
        <?php require_once('parts/footer/footer.php'); ?>
        <?php require_once('parts/layout/bottom-layout.php'); ?>

       