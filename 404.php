<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss("/local/templates/main/css/errors.css");
Asset::getInstance()->addJs("/local/templates/main/js/errors.js");
/** @global CMain $APPLICATION */

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

/*$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
	"LEVEL"	=>	"3",
	"COL_NUM"	=>	"2",
	"SHOW_DESCRIPTION"	=>	"Y",
	"SET_TITLE"	=>	"Y",
	"CACHE_TIME"	=>	"36000000"
	)
);*/
?>
    <div class="error-container">
        <div class="error-content">
            <div class="error-animation">
                <div class="error-circle">
                    <div class="error-number">4</div>
                    <div class="error-icon">
                        <i class="fas fa-question"></i>
                    </div>
                    <div class="error-number">4</div>
                </div>
            </div>
            <h1>Страница не найдена</h1>
            <p>Запрашиваемая вами страница перемещена или больше не существует</p>
            <div class="error-buttons">
                <a href="index.html" class="btn btn-error">
                    <i class="fas fa-home"></i> На главную
                </a>
                <a href="javascript:history.back()" class="btn btn-error-outline">
                    <i class="fas fa-arrow-left"></i> Вернуться назад
                </a>
            </div>
        </div>
    </div>

    <!-- Анимационные элементы -->
    <div class="error-particle" style="--i:1"></div>
    <div class="error-particle" style="--i:2"></div>
    <div class="error-particle" style="--i:3"></div>
    <!-- Еще частицы -->
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
