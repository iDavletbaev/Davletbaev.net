<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
?>

<!-- Подвал -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <a href="#" class="logo">Ivan<span>Dev</span></a>
                <p>Веб-разработчик & Linux администратор</p>
            </div>
            <div class="footer-links">
                <h3>Быстрые ссылки</h3>
                <ul>
                    <li><a href="#about">Обо мне</a></li>
                    <li><a href="#skills">Навыки</a></li>
                    <li><a href="#certificates">Сертификаты</a></li>
                    <li><a href="#tasks">Услуги</a></li>
                    <li><a href="#contact">Контакты</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Контакты</h3>
                <ul>
                    <li><i class="fas fa-envelope"></i> ivan@example.com</li>
                    <li><i class="fas fa-phone"></i> +7 (123) 456-78-90</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> Ильнур Давлетбаев. Все права защищены.</p>
        </div>
    </div>
</footer>

<!-- Модальное окно (скрыто по умолчанию) -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h2 id="modal-title"></h2>
        <div id="modal-body"></div>
    </div>
</div>

<!-- Кнопка "Наверх" -->
<button id="back-to-top" aria-label="Вернуться к началу страницы">
    <svg id="progress-circle" width="60" height="60" viewBox="0 0 60 60">
        <circle class="bg" cx="30" cy="30" r="28"/>
        <circle class="progress" cx="30" cy="30" r="28"/>
    </svg>
    <i class="fas fa-arrow-up"></i>
</button>
<?php
global $USER;
if ($USER->IsAdmin() == false) {
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/cursor.css");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/cursor.js");
    ?>
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
<?php } ?>
</body>
</html>

