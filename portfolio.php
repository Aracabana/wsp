<?php
$GLOBALS["page"] = "portfolio";
require_once $_SERVER["DOCUMENT_ROOT"] . "/_header.php"; ?>
<div class="portfolio-page">
    <div class="breadcrumbs">
        <div class="container">
            <a href="/" class="breadcrumbs-link">Главная</a>
            <span class="breadcrumbs-current">Портфолио</span>
        </div>
    </div>
    <section class="section-inner">
        <div class="container">
            <h1 class="section-title section-title-dark">Портфолио</h1>
            <div class="categories-wrapper">
                <a href="" class="category">Все</a>
                <a href="" class="category">Сайт компании</a>
                <a href="" class="category">Корпоративный сайт</a>
                <a href="" class="category">Сайт каталог</a>
                <a href="" class="category">Интернет магазин</a>
                <a href="" class="category">Landing Page</a>
                <a href="" class="category">Другое</a>
                <a href="" class="category">Продвижение</a>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xl-4 portfolio-card-wrapper">
                    <?php require $_SERVER["DOCUMENT_ROOT"] . "/_portfolio-card.php"; ?>
                </div>
                <div class="col-sm-6 col-xl-4 portfolio-card-wrapper">
                    <?php require $_SERVER["DOCUMENT_ROOT"] . "/_portfolio-card.php"; ?>
                </div>
                <div class="col-sm-6 col-xl-4 portfolio-card-wrapper">
                    <?php require $_SERVER["DOCUMENT_ROOT"] . "/_portfolio-card.php"; ?>
                </div>
                <div class="col-sm-6 col-xl-4 portfolio-card-wrapper">
                    <?php require $_SERVER["DOCUMENT_ROOT"] . "/_portfolio-card.php"; ?>
                </div>
                <div class="col-sm-6 col-xl-4 portfolio-card-wrapper">
                    <?php require $_SERVER["DOCUMENT_ROOT"] . "/_portfolio-card.php"; ?>
                </div>
                <div class="col-sm-6 col-xl-4 portfolio-card-wrapper">
                    <?php require $_SERVER["DOCUMENT_ROOT"] . "/_portfolio-card.php"; ?>
                </div>
            </div>
            <a href="portfolio.php" class="btn btn-default btn-block section-inner-btn">Показать еще</a>
        </div>
    </section>
</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_subscribe-form.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_footer.php"; ?>
