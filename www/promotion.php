<?php
$GLOBALS["page"] = "promotion";
require_once $_SERVER["DOCUMENT_ROOT"] . "/_header.php"; ?>
<div class="breadcrumbs">
    <div class="container">
        <a href="/" class="breadcrumbs-link">Главная</a>
        <a href="" class="breadcrumbs-link">Продижение</a>
        <span class="breadcrumbs-current">СЕО продвижение</span>
    </div>
</div>
<section class="section-inner">
    <div class="container">
        <h1 class="section-title section-title-dark">СЕО продвижение</h1>
        <div class="categories-wrapper categories-wrapper-border categories-wrapper-center">
            <a href="" class="category">СЕО продвижение</a>
            <a href="" class="category">Контекстаня реклама</a>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <img src="./img/img-development.png" alt="" class="development-img">
            </div>
            <div class="col-lg-8">
                <ul class="development-list">
                    <li><span class="development-list-icon"></span>Современные технологии достигли такого уровня, что синтетическое тестирование предполагает независимые способы реализации системы массового участия.</li>
                    <li><span class="development-list-icon"></span>Современные технологии достигли такого уровня, что синтетическое тестирование предполагает независимые способы реализации системы массового участия.</li>
                    <li><span class="development-list-icon"></span>Современные технологии достигли такого уровня, что синтетическое тестирование предполагает независимые способы реализации системы массового участия. Современные технологии достигли такого уровня, что синтетическое тестирование предполагает независимые способы реализации системы массового участия.</li>
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
                <h2 class="section-title section-title-dark section-title-left">Свяжитесь с&nbsp;нашим менеджером</h2>
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
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_subscribe-form.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_footer.php"; ?>
