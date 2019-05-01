<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="format-detection" content="telephone=no">
  <meta name="format-detection" content="address=no">
  <meta http-equiv="x-rim-auto-match" content="none">
  <title>WSP</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap-grid-validation-modal-tabs-print.css">
  <link rel="stylesheet" href="css/slick.css">
    <?php if ($GLOBALS["page"] === "reviews") { ?>
        <link rel="stylesheet" href="swipebox/swipebox.css">
    <?php } ?>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header <?php if ($GLOBALS["page"] !== "home") { ?>class="header-inner"<?php } ?>>
    <div class="container header-container">
        <a href="/" class="header-logo">
            <img src="./img/logo.svg" alt="" class="header-logo-img">
        </a>
        <div class="header-contacts">
            <div class="header-contacts-in">
                <p class="header-contacts-item">
                    <a class="header-contacts-link header-email-link contacts-link" href="mailto:wsp@mail.com"><span>wsp@mail.com</span></a>
                </p>
                <p class="header-contacts-item">
                    <a class="header-contacts-link header-phone-link phone-link contacts-link" href="tel:+74956541236"><span>+7 (495) 654 12 36</a>
                    <a href="whatsapp://send?phone=74956541236" class="messenger-link">
                        <img src="./img/ico-whatsapp.png" alt="Whatsapp">
                    </a>
                    <a href="viber://chat?number=+74956541236" class="messenger-link">
                        <img src="./img/ico-viber.png" alt="Viber">
                    </a>
                    <a href="tg://resolve?domain=имя" class="messenger-link">
                        <img src="./img/ico-telegram.png" alt="Telegram">
                    </a>
                </p>
            </div>
            <a class="btn btn-icon<?php if ($GLOBALS["page"] === "home") { ?> btn-icon-light<?php } elseif ($GLOBALS["page"] !== "home") { ?> btn-icon-light-inverse<?php } ?> btn-block header-callback-btn" data-href="#request-call-modal" data-toggle="modal"
               data-target="#request-call-modal" href="#">Перезвоните</a>
        </div>
    </div>
    <nav id="js-menu-wrapper" class="menu-wrapper">
        <div class="container menu-container">
            <button id="js-menu-btn" class="menu-btn">
                <span class="menu-btn-item menu-btn-item-1"></span>
                <span class="menu-btn-item menu-btn-item-2"></span>
                <span class="menu-btn-item menu-btn-item-3"></span>
            </button>
            <ul id="js-menu" class="menu">
                <li class="menu-item">
                    <a href="about-us.php" class="menu-link<?php if ($GLOBALS["page"] === "about") { ?> active<?php } ?>">О студии</a>
                </li>
                <li class="menu-item menu-item-with-submenu">
                    <span class="menu-link js-submenu-item<?php if ($GLOBALS["page"] === "development") { ?> active<?php } ?>">Разработка сайта</span>
                    <ul class="submenu js-submenu">
                        <li class="submenu-item">
                            <a href="development.php" class="submenu-link">Сайт компании</a>
                        </li>
                        <li class="submenu-item">
                            <a href="development.php" class="submenu-link">Корпоративный сайт</a>
                        </li>
                        <li class="submenu-item">
                            <a href="development.php" class="submenu-link">Сайт каталог</a>
                        </li>
                        <li class="submenu-item">
                            <a href="development.php" class="submenu-link">Интернет магазин</a>
                        </li>
                        <li class="submenu-item">
                            <a href="development.php" class="submenu-link">Landing Page</a>
                        </li>
                        <li class="submenu-item">
                            <a href="development.php" class="submenu-link">Другое</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-with-submenu">
                    <span class="menu-link js-submenu-item<?php if ($GLOBALS["page"] === "promotion") { ?> active<?php } ?>">Продвижение</span>
                    <ul class="submenu js-submenu">
                        <li class="submenu-item">
                            <a href="promotion.php" class="submenu-link">Сео продвижение</a>
                        </li>
                        <li class="submenu-item">
                            <a href="promotion.php" class="submenu-link">Контекстная реклама</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="portfolio.php" class="menu-link<?php if ($GLOBALS["page"] === "portfolio") { ?> active<?php } ?>">Портфолио</a>
                </li>
                <li class="menu-item">
                    <a href="reviews.php" class="menu-link<?php if ($GLOBALS["page"] === "reviews") { ?> active<?php } ?>">Отзывы</a>
                </li>
                <li class="menu-item">
                    <a href="blog.php" class="menu-link<?php if ($GLOBALS["page"] === "blog") { ?> active<?php } ?>">Полезная информация</a>
                </li>
                <li class="menu-item">
                    <a href="contacts.php" class="menu-link<?php if ($GLOBALS["page"] === "contacts") { ?> active<?php } ?>">Контакты</a>
                </li>
            </ul>
            <a class="btn btn-icon btn-icon-light-inverse btn-block menu-callback-btn" data-href="#request-call-modal" data-toggle="modal" data-target="#request-call-modal" href="#">Перезвоните</a>
        </div>
    </nav>
</header>
