<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

global $USER;
/** @global CMain $APPLICATION */
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->ShowTitle() ?></title>

    <?php
    $APPLICATION->ShowHead();
    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
    Asset::getInstance()->addCss("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");


//    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/cases.cs");
//    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/cases.js");
    ?>
</head>
<body>

<header class="header">
    <?php $APPLICATION->ShowPanel(); ?>
    <div class="container">
        <nav class="navbar">
            <a href="/" class="logo">Ilnur <span>Davletbaev</span></a>

            <?php
            if ($APPLICATION->GetCurPage() == '/') {
                $menuType = 'top';
            } else {
                $menuType = 'top2';
            }
            $APPLICATION->IncludeComponent(
                "bitrix:menu",
                'top',
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

            <!-- Кнопка бургер для мобильных -->
            <!--<div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>-->

            <!-- Меню -->
            <!--<ul class="nav-menu">
                <li class="nav-item"><a href="/#about" class="nav-link">Обо мне</a></li>
                <li class="nav-item"><a href="/#skills" class="nav-link">Навыки</a></li>
                <li class="nav-item"><a href="/#certificates" class="nav-link">Сертификаты</a></li>
                <li class="nav-item"><a href="tasks.html" class="nav-link">Услуги</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link active">Блог</a></li>
                <li class="nav-item"><a href="/#contact" class="nav-link">Контакты</a></li>
            </ul>-->
        </nav>
    </div>
</header>
