<?php
$GLOBALS["page"] = "development";
require_once $_SERVER["DOCUMENT_ROOT"] . "/_header.php"; ?>
<div class="breadcrumbs">
    <div class="container">
        <a href="/" class="breadcrumbs-link">Главная</a>
        <a href="" class="breadcrumbs-link">Разработка сайтов</a>
        <span class="breadcrumbs-current">Сайт компании</span>
    </div>
</div>
<section class="section-inner">
    <div class="container">
        <h1 class="section-title section-title-dark">Сайт компании</h1>
        <div class="categories-wrapper categories-wrapper-border">
            <a href="" class="category">Сайт компании</a>
            <a href="" class="category">Корпоративный сайт</a>
            <a href="" class="category">Сайт каталог</a>
            <a href="" class="category">Интернет магазин</a>
            <a href="" class="category">Landing Page</a>
            <a href="" class="category">Другое</a>
            <a href="" class="category">Продвижение</a>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <img src="./img/img-development.png" alt="" class="development-img">
            </div>
            <div class="col-lg-8">
                <ul class="development-list">
                    <li><span class="development-list-icon"></span>Сайт визитка поможет предоставить основную информацию о деятельности компании, ее преимуществах, услугах и ценах клиентам или партнерам. </li>
                    <li><span class="development-list-icon"></span>Так же на сайте можно разместить отзывы, новости компании или информационные тематические статьи.</li>
                    <li><span class="development-list-icon"></span>Клиенты смогут связаться с Вами по контактным данным указанным на сайте, в онлайн чате или отправить заявку.</li>
                </ul>
                <div class="development-price">от 20000 руб.</div>
            </div>
        </div>
    </div>
</section>
<section class="manager-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <h2 class="section-title section-title-dark section-title-left section-title-small">Для&nbsp;получения более детальной информации о&nbsp;возможностях сайта визитки свяжитесь с&nbsp;нашим менеджером</h2>
                <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_manager-form.php"; ?>
            </div>
        </div>
    </div>
</section>
<section class="section-inner development-portfolio">
    <div class="container">
        <h2 class="section-title section-title-dark">Портфолио</h2>
        <div id="js-portfolio-slider-autoplay" class="portfolio-slider slider-dark">
            <div class="portfolio-slide">
                <?php require $_SERVER["DOCUMENT_ROOT"] . "/_portfolio-card.php"; ?>
            </div>
            <div class="portfolio-slide">
                <?php require $_SERVER["DOCUMENT_ROOT"] . "/_portfolio-card.php"; ?>
            </div>
            <div class="portfolio-slide">
                <?php require $_SERVER["DOCUMENT_ROOT"] . "/_portfolio-card.php"; ?>
            </div>
            <div class="portfolio-slide">
                <?php require $_SERVER["DOCUMENT_ROOT"] . "/_portfolio-card.php"; ?>
            </div>
        </div>
        <a href="portfolio.php" class="btn btn-default btn-block btn-center">Все работы</a>
    </div>
</section>
<section class="section-inner development-algorithm">
    <div class="container">
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_algorithm.php"; ?>
    </div>
</section>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_subscribe-form.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_footer.php"; ?>
