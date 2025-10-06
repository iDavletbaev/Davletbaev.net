<?php
global $APPLICATION;
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");

d($GLOBALS['CONTACTS']);
?>

<!-- Подвал -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <a href="/" class="logo">
                    <?=$GLOBALS['CONTACTS']['Name']['UF_DAV_VALUE']?>
                    <span><?=$GLOBALS['CONTACTS']['LastName']['UF_DAV_VALUE']?></span>
                    </a>
                <p>Веб-разработчик</p>
            </div>
            <?php
            if ($APPLICATION->GetCurPage() == '/') {
                $menuType = 'top';
            } else {
                $menuType = 'top2';
            }
            $APPLICATION->IncludeComponent(
                "bitrix:menu",
                'footer',
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => $menuType,
                    "USE_EXT" => "N",
                ),
                false
            );
            ?>

            <div class="footer-contact">
                <h3>Контакты</h3>
                <ul>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <?=$GLOBALS['CONTACTS']['Email']['UF_DAV_VALUE']?>
                    </li>
                    <li>
                        <i class="fa fa-telegram" aria-hidden="true"></i>

                        <a href="<?=$GLOBALS['CONTACTS']['Telegram']['UF_DAV_VALUE']?>"
                           target="_blank">
                            <?=$GLOBALS['CONTACTS']['Telegram']['UF_DAV_NAME']?>
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        <a href="<?=$GLOBALS['CONTACTS']['LinkedIn']['UF_DAV_VALUE']?>"
                           target="_blank">
                            <?=$GLOBALS['CONTACTS']['LinkedIn']['UF_DAV_NAME']?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?>  <?=$GLOBALS['CONTACTS']['FullName']['UF_DAV_VALUE']?>. Все права защищены.</p>
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

