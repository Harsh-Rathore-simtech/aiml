<?php require_once(__DIR__ . "/bootstrap.php"); ?>
<?php $head_title="404 | Wooden Magic interiors"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header4.php'); ?>
<?php
$page_title = "404";
require_once('parts/page-title.php');
?>

        <!--Start Error Page-->
        <section class="error-page">
            <div class="error-page__shape1">
                <img src="assets/img/shape/error-page-bg.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__wrapper text-center">
                            <div class="error-page__content">
                                <h2>404</h2>
                                <h3>Opps! Page Not Found</h3>
                                <p>The page you are looking for does not exist. It might have been moved or deleted.</p>
                                <div class="btn-box">
                                    <a class="thm-btn" href="index.php">
                                        <span class="txt">back to home</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Error Page-->
        <?php require_once('parts/footer/footer.php'); ?>
        <?php require_once('parts/layout/bottom-layout.php'); ?>
      