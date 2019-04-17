<?php
$GLOBALS["page"] = "about";
require_once $_SERVER["DOCUMENT_ROOT"] . "/_header.php"; ?>
<div class="breadcrumbs">
    <div class="container">
        <a href="/" class="breadcrumbs-link">Главная</a>
        <span class="breadcrumbs-current">О нас</span>
    </div>
</div>
<section class="section-inner">
    <div class="container">
        <h1 class="section-title section-title-dark">О нас</h1>
        <p class="section-inner-text">Наша команда специалистов поможет с&nbsp;разработкой понятного и&nbsp;удобного сайта, который будет отражать индивидуальность Вашей компании, предоставлять необходимую информацию, оптимизировать Вашу работу за&nbsp;счет нужного функционала и&nbsp;расширит возможности.</p>
        <div class="row">
            <div class="col-lg-6">
                <div class="about-us-card about-us-card-1">
                    <img src="./img/ico-about-1.png" alt="" class="about-us-card-img">
                    <p class="about-us-card-text">Наш опыт в&nbsp;разработке сайтов более 6&nbsp;лет.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-card about-us-card-2">
                    <img src="./img/ico-about-2.png" alt="" class="about-us-card-img">
                    <p class="about-us-card-text">Подходим к&nbsp;работе индивидуально, исходя из&nbsp;Ваших задач и&nbsp;с&nbsp;учетом пожеланий</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-card about-us-card-3">
                    <img src="./img/ico-about-3.png" alt="" class="about-us-card-img">
                    <p class="about-us-card-text">Учитываем современные тренды, возможности и&nbsp;потребности в&nbsp;веб-разработке.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-card about-us-card-4">
                    <img src="./img/ico-about-4.png" alt="" class="about-us-card-img">
                    <p class="about-us-card-text">Каждый сотрудник нашей команды профессионал в&nbsp;своей области и&nbsp;с&nbsp;удовольствием применяет свои знания, навыки и &nbsp;опыт в&nbsp;работе над&nbsp;проектами.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="manager-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2 class="section-title section-title-dark section-title-left">Свяжитесь с&nbsp;нашим менеджером</h2>
                <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_manager-form.php"; ?>
            </div>
        </div>
    </div>
</section>
<section class="section-inner">
    <div class="container">
        <h2 class="section-title section-title-dark">Наша команда</h2>
        <div class="row">
            <div class="col-sm-6 col-lg-4 card-wrapper-big">
                <div class="team-card">
                    <div class="team-card-avatar-wrapper">
                        <div class="team-card-avatar-wrapper-in">
                            <img src="./img/img-team-avatar.jpg" alt="" class="team-card-avatar">
                        </div>
                    </div>
                    <p class="team-card-name">Елена Чернова</p>
                    <p class="team-card-position">Менеджер</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 card-wrapper-big">
                <div class="team-card">
                    <div class="team-card-avatar-wrapper">
                        <div class="team-card-avatar-wrapper-in">
                            <img src="./img/img-team-avatar.jpg" alt="" class="team-card-avatar">
                        </div>
                    </div>
                    <p class="team-card-name">Елена Чернова</p>
                    <p class="team-card-position">Менеджер</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 card-wrapper-big">
                <div class="team-card">
                    <div class="team-card-avatar-wrapper">
                        <div class="team-card-avatar-wrapper-in">
                            <img src="./img/img-team-avatar.jpg" alt="" class="team-card-avatar">
                        </div>
                    </div>
                    <p class="team-card-name">Елена Чернова</p>
                    <p class="team-card-position">Менеджер</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 card-wrapper-big">
                <div class="team-card">
                    <div class="team-card-avatar-wrapper">
                        <div class="team-card-avatar-wrapper-in">
                            <img src="./img/img-team-avatar.jpg" alt="" class="team-card-avatar">
                        </div>
                    </div>
                    <p class="team-card-name">Елена Чернова</p>
                    <p class="team-card-position">Менеджер</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 card-wrapper-big">
                <div class="team-card">
                    <div class="team-card-avatar-wrapper">
                        <div class="team-card-avatar-wrapper-in">
                            <img src="./img/img-team-avatar.jpg" alt="" class="team-card-avatar">
                        </div>
                    </div>
                    <p class="team-card-name">Елена Чернова</p>
                    <p class="team-card-position">Менеджер</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 card-wrapper-big">
                <div class="team-card">
                    <div class="team-card-avatar-wrapper">
                        <div class="team-card-avatar-wrapper-in">
                            <img src="./img/img-team-avatar.jpg" alt="" class="team-card-avatar">
                        </div>
                    </div>
                    <p class="team-card-name">Елена Чернова</p>
                    <p class="team-card-position">Менеджер</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_subscribe-form.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_footer.php"; ?>
