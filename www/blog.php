<?php
$GLOBALS["page"] = "blog";
require_once $_SERVER["DOCUMENT_ROOT"] . "/_header.php"; ?>
<div class="breadcrumbs">
    <div class="container">
        <a href="/" class="breadcrumbs-link">Главная</a>
        <span class="breadcrumbs-current">Полезное</span>
    </div>
</div>
<section class="section-inner">
    <div class="container">
        <h1 class="section-title section-title-dark">Полезное</h1>
        <div class="blog-filter">
            <form id="search-form" class="search-form">
                <input type="search" id="search" class="form-control search-input" placeholder="Введите текст">
                <button class="search-btn" type="submit">
                    <img src="./img/ico-search.svg" alt="Поиск">
                </button>
            </form>
            <p class="tag"><a href="">Интернет-магазин</a></p>
            <p class="tag"><a href="">ui desing</a></p>
            <p class="tag"><a href="">другая тегга может быть длинной</a></p>
            <p class="tag"><a href="">landing page</a></p>
            <p class="tag"><a href="">ui desing</a></p>
            <p class="tag"><a href="">Интернет-магазин</a></p>
            <p class="tag"><a href="">ui desing</a></p>
            <p class="tag"><a href="">другая тегга может быть длинной</a></p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 article-card-wrapper">
                <?php require $_SERVER["DOCUMENT_ROOT"] . "/_article-card.php"; ?>
            </div>
            <div class="col-sm-6 col-lg-4 article-card-wrapper">
                <?php require $_SERVER["DOCUMENT_ROOT"] . "/_article-card.php"; ?>
            </div>
            <div class="col-sm-6 col-lg-4 article-card-wrapper">
                <?php require $_SERVER["DOCUMENT_ROOT"] . "/_article-card.php"; ?>
            </div>
            <div class="col-sm-6 col-lg-4 article-card-wrapper">
                <?php require $_SERVER["DOCUMENT_ROOT"] . "/_article-card.php"; ?>
            </div>
            <div class="col-sm-6 col-lg-4 article-card-wrapper">
                <?php require $_SERVER["DOCUMENT_ROOT"] . "/_article-card.php"; ?>
            </div>
            <div class="col-sm-6 col-lg-4 article-card-wrapper">
                <?php require $_SERVER["DOCUMENT_ROOT"] . "/_article-card.php"; ?>
            </div>
        </div>
        <a href="portfolio.php" class="btn btn-default btn-block section-inner-btn">Показать еще</a>
    </div>
</section>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_subscribe-form.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_footer.php"; ?>
siz
