<?php
$GLOBALS["page"] = "error";
require_once $_SERVER["DOCUMENT_ROOT"] . "/_header.php"; ?>
<div class="error-content">
    <div class="container">
        <h1 class="error-title">404</h1>
        <p>Запрашиваемая страница не&nbsp;найдена, либо&nbsp;произошла ошибка!
        </p>
        <p>Вы можете <a href="" class="error-link">вернуться назад</a> либо&nbsp;перейти <a href="/" class="error-link">на&nbsp;главную</a> страницу сайта</p>
    </div>
</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/_footer.php"; ?>
