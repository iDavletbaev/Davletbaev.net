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
?>
<link rel="stylesheet" href="/local/templates/main/components/bitrix/news.detail/hero/style.css">
    <style>
        .hero {
            padding: 180px 0 100px;
            background: linear-gradient(135deg, rgba(26, 32, 44, 0.9) 0%, rgba(42, 50, 70, 0.9) 100%);
            background-size: cover;
            overflow: hidden;
        }
    </style>

    <section id="about" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="title">Упс...</h1>
                    <h2 class="subtitle">Такой страницы нет!</h2>

                    <div class="error-buttons">
                        <a href="/" class="btn btn-error">
                            <i class="fas fa-home"></i> На главную
                        </a>
                        <a href="javascript:history.back()" class="btn btn-error-outline">
                            <i class="fas fa-arrow-left"></i> Вернуться назад
                        </a>
                    </div>
                </div>

                <div class="hero-image">
                    <div class="photo-container">
                        <div class="photo-frame"></div>

                        <div class="error404-circle">
                            <div class="error404-number">4</div>
                            <div class="error404-number">0</div>
                            <div class="error404-number">4</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Анимационные элементы -->
    <div class="error-particle" style="--i:1"></div>
    <div class="error-particle" style="--i:2"></div>
    <div class="error-particle" style="--i:3"></div>
    <!-- Еще частицы -->
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
