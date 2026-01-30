<?php require_once(__DIR__ . "/bootstrap.php"); ?>
<?php $head_title="Blog Details"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header4.php'); ?>
<?php
$page_title = "Blog Details";
require_once('parts/page-title.php');
?>

        <!--Start Blog Details-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <!--Start Blog Sidebar Content-->
                    <div class="col-xl-8">
                        <div class="blog-details__content">
                            <div class="blog-details__content-img1">
                                <img src="assets/img/blog/blog-details-img1.jpg" alt="">
                            </div>

                            <div class="blog-details__content-text1">
                                <h2>Easy & Most Powerful Server Platform.</h2>
                                <p class="text1">March 23, 2022 _ DEVELOPMENT _ BY Katty Olson _ 2 Comments</p>
                                <p class="text2">With worldwide annual spend on digital advertising surpassing $325
                                    billion, it’s no
                                    surprise that different approaches to online marketing are becoming available. One
                                    of these new approaches is performance marketing or digital performance marketing.
                                    Keep reading to learn all about performance marketing, from how it works to how it
                                    compares to digital marketing. Plus, get insight into the benefits and risks of
                                    performance marketing and how it can affect your company’s long-term success and
                                    profitability. Performance marketing is an approach to digital marketing or
                                    advertising where businesses only pay when a specific result occurs. This result
                                    could be a new lead, sale, or other outcome agreed upon by the advertiser and
                                    business. Performance marketing involves channels such as affiliate marketing,
                                    online advertising.</p>
                            </div>

                            <div class="blog-details__content-img2">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="blog-details__content-img2-single">
                                            <img src="assets/img/blog/blog-details-img2.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="blog-details__content-img2-single">
                                            <img src="assets/img/blog/blog-details-img3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-details__content-text2">
                                <h2>Latest Articles Updated Daily</h2>
                                <p>With worldwide annual spend on digital advertising surpassing $325 billion, it’s no
                                    surprise that different approaches to online marketing are becoming available. One
                                    of these new approaches is performance marketing or digital performance marketing.
                                    Keep reading to learn all about performance marketing</p>
                            </div>

                            <div class="blog-details__content-text3 text-center">
                                <div class="icon-box">
                                    <span class="icon-right-quotation-mark"></span>
                                </div>

                                <div class="text-box">
                                    <h4>Diam luctus nostra dapibus varius et semper semper rutrum ad risus felis
                                        eros. Cursus libero viverra tempus netus diam vestibulum</h4>
                                    <p>David Backhum</p>
                                </div>
                            </div>

                            <div class="blog-details__content-text4">
                                <div class="tag-box">
                                    <div class="title">
                                        <h2>Posted in:</h2>
                                    </div>

                                    <div class="tag-box-list">
                                        <ul>
                                            <li><a href="#">Development</a></li>
                                            <li><a href="#">Digital</a></li>
                                            <li><a href="#">Tech</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="icon-box">
                                    <a href="#"><span class="icon-share"></span></a>
                                </div>
                            </div>

                            <div class="comment-one">
                                <h3 class="comment-one__title">Comments (2)</h3>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/img/blog/blog-details-img4.jpg" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Saiful Islam</h3>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. </p>
                                        <span>February 03. 2023 <a href="#" class="comment-one__btn">Reply</a></span>
                                    </div>
                                </div>

                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/img/blog/blog-details-img5.jpg" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Jhon Smith</h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form.</p>
                                        <span>February 03. 2023 <a href="#" class="comment-one__btn">Reply</a></span>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-details__content-form">
                                <div class="title-box">
                                    <h2>Let’s Get in Touch</h2>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                </div>

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
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Website*" name="website">
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
                                                        Send Meassage
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Sidebar Content-->

                    <!--Start Sidebar-->
                    <div class="col-xl-4">
                        <div class="sidebar">
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__search">
                                <h3 class="sidebar__title">Search</h3>
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Keywords here....">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>

                                <ul class="sidebar__category-list">
                                    <li><a class="active" href="#">Architecture <span
                                                class="icon-left-arrow"></span></a></li>
                                    <li><a href="#">Interior Design <span class="icon-left-arrow"></span></a></li>
                                    <li><a href="#">Ui/Ux Designing <span class="icon-left-arrow"></span></a></li>
                                    <li><a href="#">Building Renovation <span class="icon-left-arrow"></span></a></li>
                                    <li><a href="#">Construction Site <span class="icon-left-arrow"></span></a></li>
                                    <li><a href="#">Security System <span class="icon-left-arrow"></span></a></li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__recent-post">
                                <h3 class="sidebar__title">Recent Post</h3>

                                <ul class="sidebar__recent-post-box">
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="assets/img/blog/sidebar-img1.jpg" alt="">
                                            </div>

                                            <div class="content-box">
                                                <h4><a href="#">Keep Your Business <br> Safe
                                                        Ensure High</a></h4>
                                                <p><span class="icon-clock"></span> April 21, 2023</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="assets/img/blog/sidebar-img2.jpg" alt="">
                                            </div>

                                            <div class="content-box">
                                                <h4><a href="#">We’ve Been a Strategy <br>
                                                        Thought Leader for</a></h4>
                                                <p><span class="icon-clock"></span> April 21, 2023</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="assets/img/blog/sidebar-img3.jpg" alt="">
                                            </div>

                                            <div class="content-box">
                                                <h4><a href="#">This Week’s Top <br> Stories
                                                        About It</a></h4>
                                                <p><span class="icon-clock"></span> April 21, 2023</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <ul class="sidebar__tags-list clearfix">
                                    <li><a href="#">IT Technology</a></li>
                                    <li><a href="#">Software</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Digital</a></li>
                                    <li><a href="#">Cyber</a></li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->
                        </div>
                    </div>
                    <!--End Sidebar-->
                </div>
            </div>
        </section>
        <!-- End Blog Details-->
        <?php require_once('parts/footer/footer.php'); ?>
        <?php require_once('parts/layout/bottom-layout.php'); ?>

       