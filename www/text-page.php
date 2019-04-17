<?php
$GLOBALS["page"] = "reviews";
require_once $_SERVER["DOCUMENT_ROOT"] . "/_header.php"; ?>
<div class="breadcrumbs">
    <div class="container">
        <a href="/" class="breadcrumbs-link">Главная</a>
        <span class="breadcrumbs-current">Отзывы</span>
    </div>
</div>
<section class="section-inner text-section">
    <div class="container">
        <h1 class="section-title section-title-dark">Заголовок</h1>
        <div class="text-section-block">
            <img src="./img/img-text-page.png" alt="" class="img-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria</p>
        </div>
        <h2>Заголовок 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria</p>
        <h3>Заголовок 3</h3>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
            <li>t aliquip ex ea commodo consequat. Duis .</li>
            <li>enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure d</li>
        </ul>
        <div class="video-wrapper">
            <video poster="./img/img-text-page.png">
                <source src="" type='video/webm; codecs="vp8, vorbis"'>
                <source src="" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                <source src="" type='video/ogg; codecs="theora, vorbis"'>
                Вмдео не поддерживается. Вы можете скачать видео <a href="">здесь</a>.
            </video>
            <button class="video-play-btn">
                <img src="./img/ico-play.png" alt="">
            </button>
        </div>
    </div>
</section>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_subscribe-form.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_footer.php"; ?>
