<footer>
    <div class="container footer-container">
        <div class="footer-logo-wrapper">
            <a href="/" class="footer-logo">
                <img src="./img/logo.png" alt="" class="footer-logo-img">
            </a>
        </div>
        <div class="footer-menu-wrapper">
            <div class="footer-menu-block">
                <h3 class="title-h4 footer-menu-title">ИНФОРМАЦИЯ</h3>
                <ul class="footer-menu">
                    <li class="footer-menu-item">
                        <a class="footer-menu-link" href="about-us.php">О студии</a>
                    </li>
                    <li class="footer-menu-item">
                        <a class="footer-menu-link" href="portfolio.php">Портфолио</a>
                    </li>
                    <li class="footer-menu-item">
                        <a class="footer-menu-link" href="reviews.php">Отзывы </a>
                    </li>
                    <li class="footer-menu-item">
                        <a class="footer-menu-link" href="blog.php">Полезная информация</a>
                    </li>
                    <li class="footer-menu-item">
                        <a class="footer-menu-link" href="contacts.php">Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="footer-menu-block">
                <h3 class="title-h4 footer-menu-title">Разработка сайта</h3>
                <ul class="footer-menu">
                    <li class="footer-menu-item">
                        <a class="footer-menu-link" href="development.php">Сайт компании визитка</a>
                    </li class="footer-menu-item">
                    <li class="footer-menu-item">
                        <a class="footer-menu-link" href="development.php">Корпоративный сайт</a>
                    </li>
                    <li class="footer-menu-item">
                        <a class="footer-menu-link" href="development.php">Сайт каталог</a>
                    </li>
                    <li class="footer-menu-item">
                        <a class="footer-menu-link" href="development.php">Интернет магазин</a>
                    </li>
                    <li class="footer-menu-item">
                        <a class="footer-menu-link" href="development.php">Landing Page</a>
                    </li>
                </ul>
            </div>
            <div class="footer-menu-block">
                <h3 class="title-h4 footer-menu-title">Продвижение</h3>
                <ul class="footer-menu">
                    <li class="footer-menu-item">
                        <a class="footer-menu-link" href="promotion.php">СЕО продвижение</a>
                    </li>
                    <li class="footer-menu-item">
                        <a class="footer-menu-link" href="promotion.php">Контекстная реклама</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-contacts">
            <p class="footer-contacts-item">
                <a class="footer-contacts-link footer-phone-link phone-link contacts-link" href="tel:+74956541236"><span>+7 (495) 654 12 36</a>
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
            <p class="footer-contacts-item">
                <a class="footer-contacts-link footer-email-link contacts-link" href="mailto:wsp@mail.com"><span>wsp@mail.com</span></a>
            </p>
            <button class="btn btn-default btn-block">Перезвоните</button>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/slick.min.js"></script>
<?php if ($GLOBALS["page"] === "reviews") { ?>
    <script src="swipebox/js/jquery.swipebox.min.js"></script>
<?php } ?>
<script src="js/main.js"></script>
</body>
</html>
