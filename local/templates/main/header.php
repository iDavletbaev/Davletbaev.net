<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

global $USER;
/** @global CMain $APPLICATION */
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <meta charset="UTF-8">

    <?php
    if ($_SERVER['SERVER_NAME'] == 'davletbaev.net') { ?>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (m, e, t, r, i, k, a) {
                m[i] = m[i] || function () {
                    (m[i].a = m[i].a || []).push(arguments)
                };
                m[i].l = 1 * new Date();
                for (var j = 0; j < document.scripts.length; j++) {
                    if (document.scripts[j].src === r) {
                        return;
                    }
                }
                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
            })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym');

            ym(99600287, 'init', {webvisor: true, clickmap: true, accurateTrackBounce: true, trackLinks: true});
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/99600287" style="position:absolute; left:-9999px;" alt=""/></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
    <?php } ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32"/>
    <link rel="manifest" href="/site.webmanifest">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->ShowTitle() ?></title>

    <?php if ($APPLICATION->GetCurPage() == '/') { ?>
        <meta property="og:type" content="website">
        <meta property="og:title" content="Ильнур Давлетбаев — Веб-разработчик 1С-Битрикс">
        <meta property="og:description" content="Создаю современные, адаптивные и высокопроизводительные веб-приложения.
        Более 10 лет опыта в веб-разработке.">
        <meta property="og:url" content="https://davletbaev.net/">
        <meta property="og:image" content="https://davletbaev.net/upload/iblock/b35/k1kv383a4291fzfg6khaftqwf2uwqazs.jpg">
        <meta property="og:site_name" content="Ilnur Davletbaev">
        <meta property="og:locale" content="ru_RU">

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Person",
                "name": "Ильнур Давлетбаев",
                "url": "https://davletbaev.net/",
                "image": "https://davletbaev.net/upload/iblock/b35/k1kv383a4291fzfg6khaftqwf2uwqazs.jpg",
                "sameAs": [
                    "https://github.com/iDavletbaev",
                    "https://www.linkedin.com/in/ilnur-davletbaev/",
                    "https://t.me/IlnurD",
                    "https://dev.1c-bitrix.ru/learning/resume.php?ID=45969232-194259"
                ],
                "jobTitle": "Веб-разработчик 1С-Битрикс",
                "description": "Создаю современные, адаптивные и высокопроизводительные веб-приложения. Более 10 лет опыта в веб-разработке."
            }
        </script>
    <?php } ?>

    <link rel="canonical" href="https://<?=$_SERVER['SERVER_NAME']?><?=$APPLICATION->GetCurPage()?>">

    <?php
    $APPLICATION->ShowHead();
    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
    Asset::getInstance()->addCss("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
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
        </nav>
    </div>
</header>
