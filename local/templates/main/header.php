<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

global $USER;
/** @global CMain $APPLICATION */
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <meta charset="UTF-8">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m,e,t,r,i,k,a){
            m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
        })(window, document,'script','https://mc.yandex.ru/metrika/tag.js', 'ym');

        ym(99600287, 'init', {webvisor:true, clickmap:true, accurateTrackBounce:true, trackLinks:true});
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/99600287" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="manifest" href="/site.webmanifest">

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
