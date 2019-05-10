<?php
$GLOBALS["page"] = "contacts";
require_once $_SERVER["DOCUMENT_ROOT"] . "/_header.php"; ?>
<div class="breadcrumbs">
    <div class="container">
        <a href="/" class="breadcrumbs-link">Главная</a>
        <span class="breadcrumbs-current">Контакты</span>
    </div>
</div>
<section class="section-inner">
    <div class="container">
        <h1 class="section-title section-title-dark">Контакты</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="contacts-list">
                    <p class="contacts-item">
                        <a class="email-link contacts-link" href="mailto:wsp@mail.com"><span>wsp@mail.com</span></a>
                    </p>
                    <p class="contacts-item">
                        <a class="phone-link contacts-link" href="tel:+74956541236"><span>+7 (495) 654 12 36</a>
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
                    <p class="contacts-item address">г.&nbsp;Москва, ул.&nbsp;Первая, дом&nbsp;16, офис&nbsp;156</p>
                </div>
                <div class="map-wrapper">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0364d6f31d5cf59e3686db5639de064eca9e0a76040e323acf217296dc56c9b7&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
            <div class="col-lg-6">
                <form id="contacts-form" class="contacts-form">
                    <h3 class="title-h2">Форма обратной связи</h3>
                    <div class="row">
                        <div class="col-xl-6 form-group">
                            <input id="contacts-name" type="text" name="contacts-name" class="form-control" placeholder="Имя" required>
                        </div>
                        <div class="col-xl-6 form-group">
                            <input id="contacts-tel" type="tel" name="contacts-tel" class="form-control" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="form-group">
                        <input id="contacts-email" type="email" name="contacts-email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <textarea name="contacts-text" id="contacts-text" class="form-control" placeholder="Сообщение" required></textarea>
                    </div>
                    <p class="form-disclaimer">Нажимая &laquo;Отправить&raquo; Вы даете согласие на&nbsp;обработку персональных данных и&nbsp;соглашаетесь c&nbsp;<a
                            href="text-page.php">пользовательским соглашением и&nbsp;политикой конфиденциальности</a>.</p>
                    <button class="btn btn-default btn-block btn-center submit-btn" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_subscribe-form.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_footer.php"; ?>
