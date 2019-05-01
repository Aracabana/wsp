<?php
$GLOBALS["page"] = "portfolio";
require_once $_SERVER["DOCUMENT_ROOT"] . "/_header.php"; ?>
<div class="breadcrumbs">
    <div class="container">
        <a href="/" class="breadcrumbs-link">Главная</a>
        <a href="portfolio.php" class="breadcrumbs-link">Портфолио</a>
        <span class="breadcrumbs-current">Название сайта</span>
    </div>
</div>
<section class="section-inner">
    <div class="container">
        <h1 class="section-title section-title-dark">Название сайта</h1>
        <div class="row">
            <div class="col-lg-5">
                <img src="./img/img-site-page-big.jpg" alt="" class="site-main-img">
            </div>
            <div class="col-lg-7">
                <div class="site-info">
                    <h3 class="site-name"><span>RIBONI GROUP</span> - Представительство итальянских мебельных фабрик.</h3>
                    <div class="site-tags-wrapper">
                        <p class="tag"><span>Сайт-визитка</span></p>
                        <p class="tag"><span>Сайт под ключ</span></p>
                    </div>
                    <div class="site-info-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <a href="" class="btn btn-icon btn-icon-dark btn-block site-link-btn" target="_blank">Посмотреть сайт</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-inner">
    <div class="container">
        <h2 class="section-title section-title-dark">Другие страницы сайта</h2>
        <div class="row">
            <div class="col-md-4 site-page-img-wrapper">
                <img src="./img/img-site-page-small.jpg" alt="" class="site-page-img">
            </div>
            <div class="col-md-4 site-page-img-wrapper">
                <img src="./img/img-site-page-small.jpg" alt="" class="site-page-img">
            </div>
            <div class="col-md-4 site-page-img-wrapper">
                <img src="./img/img-site-page-small.jpg" alt="" class="site-page-img">
            </div>
        </div>
        <div class="site-buttons-wrapper">
            <a href="portfolio-inner.php" class="btn btn-block btn-default-inverse site-btn">Предыдушая работа</a>
            <a href="portfolio-inner.php" class="btn btn-block btn-default-inverse site-btn">Следующая работа</a>
        </div>
    </div>
</section>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_subscribe-form.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_footer.php"; ?>
