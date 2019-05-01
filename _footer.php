<footer>
    <div class="container footer-container">
        <div class="footer-logo-wrapper">
            <a href="/" class="footer-logo">
                <img src="./img/logo.svg" alt="" class="footer-logo-img">
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
                    </li>
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
                <a class="footer-contacts-link footer-phone-link phone-link contacts-link"
                   href="tel:+74956541236"><span>+7 (495) 654 12 36</a>
                <a href="whatsapp://send?phone=74956541236" class="messenger-link">
                    <img src="./img/ico-whatsapp.png" alt="Whatsapp" class="messenger-link-whatsapp-img">
                </a>
                <a href="viber://chat?number=+74956541236" class="messenger-link">
                    <img src="./img/ico-viber.png" alt="Viber" class="messenger-link-viber-img">
                </a>
                <a href="tg://resolve?domain=имя" class="messenger-link">
                    <img src="./img/ico-telegram.png" alt="Telegram" class="messenger-link-telegram-img">
                </a>
            </p>
            <p class="footer-contacts-item">
                <a class="footer-contacts-link footer-email-link contacts-link" href="mailto:wsp@mail.com"><span>wsp@mail.com</span></a>
            </p>
            <a class="btn btn-default btn-block" data-href="#request-call-modal" data-toggle="modal"
               data-target="#request-call-modal" href="#">Перезвоните</a>
        </div>
    </div>
</footer>



<div id="review-modal" class="modal fade review-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog review-modal-dialog" role="document">
        <div class="modal-content review-modal-content">
            <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                <img src="./img/ico-cancel.svg" alt="">
            </button>
            <div class="review-card review-card-dark review-card-modal">
                <div class="review-card-header">
                    <div class="review-card-avatar-wrapper">
                        <div class="review-card-avatar-wrapper-in">
                            <img src="./img/ico-avatar-man.svg" alt="" class="review-card-avatar"  style="width: 54px;">
                        </div>
                    </div>
                    <h3 class="section-title section-title-dark section-title-left review-card-modal-title">Название <br>компании</h3>
                </div>
                <div class="review-card-content">
                    <p class="review-card-author"><span class="review-card-author-name">Имя Фамилия</span>, <span class="review-card-author-position">Должность</span></p>
                    <p class="review-card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p class="review-card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p class="review-card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="request-call-modal" class="modal fade request-call-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog request-call-modal-dialog" role="document">
        <div class="modal-content request-call-modal-content">
            <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                <img src="./img/ico-cancel.svg" alt="">
            </button>
            <h3 class="section-title section-title-dark">Заказать звонок</h3>
            <form id="request-call-form" class="request-call-form inline-form" name="request-call-form">
                <div class="row">
                    <div class="col-md-6">
                        <input id="request-call-name" type="text" name="request-call-name" class="form-control" placeholder="Имя">
                    </div>
                    <div class="col-md-6">
                        <input id="request-call-tel" type="tel" name="request-call-tel" class="form-control" placeholder="Телефон">
                    </div>
                </div>
                <button class="btn btn-default btn-block btn-center submit-btn" type="submit">Перезвоните</button>
                <p class="form-disclaimer">Нажимая &laquo;Перезвоните&raquo; Вы даете согласие на&nbsp;обработку персональных данных и&nbsp;соглашаетесь c&nbsp;<a
                            href="text-page.php">пользовательским соглашением и&nbsp;политикой конфиденциальности</a>.</p>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/slick.min.js"></script>
<script src="swipebox/jquery.swipebox.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
