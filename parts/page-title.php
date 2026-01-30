
        <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/img/background/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner text-center">
                    <ul class="thm-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><?php if(isset($page_title)&&!empty($page_title)) { echo $page_title; } ?></li>
                    </ul>
                    <h2><?php if(isset($page_title)&&!empty($page_title)) { echo $page_title; } ?></h2>
                </div>
            </div>
        </section>
        <!--End Page Header-->