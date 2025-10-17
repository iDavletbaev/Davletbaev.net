<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$photoId = rand(1, count($arResult['PROPERTIES']['PHOTOS']['VALUE']));
$background = rand(1, count($arResult['PROPERTIES']['BACK_PHOTOS']['VALUE']));
?>

<style>
    /*.hero {
        padding: 180px 0 100px;
        background: linear-gradient(135deg, rgba(26, 32, 44, 0.9) 0%, rgba(42, 50, 70, 0.9) 100%),
        url(<?=$arResult['PROPERTIES']['BACK_PHOTOS']['ARR_VALUE'][--$background]['SRC']?>);
        background-size: cover;
        overflow: hidden;
    }*/
</style>

<section id="about" class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="title"><?= $arResult['NAME'] ?></h1>
                <h2 class="subtitle"><?= $arResult['PREVIEW_TEXT'] ?></h2>
                <p class="description">
                    <?= $arResult['DETAIL_TEXT'] ?>
                </p>

                <div class="social-links">
                    <a href="<?=$GLOBALS['CONTACTS']['GitHub']['UF_DAV_VALUE']?>"
                       target="_blank"
                       title="Профиль на GitHub"
                       aria-label="GitHub">
                        <i class="hero-social-icons">
                            <svg enable-background="new 0 0 128 128" id="Social_Icons" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x31__stroke"><g id="Github_1_"><rect clip-rule="evenodd" fill="none" fill-rule="evenodd" height="128" width="128"/><path clip-rule="evenodd" d="M63.996,1.333C28.656,1.333,0,30.099,0,65.591    c0,28.384,18.336,52.467,43.772,60.965c3.2,0.59,4.368-1.394,4.368-3.096c0-1.526-0.056-5.566-0.088-10.927    c-17.804,3.883-21.56-8.614-21.56-8.614c-2.908-7.421-7.104-9.397-7.104-9.397c-5.812-3.988,0.44-3.907,0.44-3.907    c6.42,0.454,9.8,6.622,9.8,6.622c5.712,9.819,14.98,6.984,18.628,5.337c0.58-4.152,2.236-6.984,4.064-8.59    c-14.212-1.622-29.152-7.132-29.152-31.753c0-7.016,2.492-12.75,6.588-17.244c-0.66-1.626-2.856-8.156,0.624-17.003    c0,0,5.376-1.727,17.6,6.586c5.108-1.426,10.58-2.136,16.024-2.165c5.436,0.028,10.912,0.739,16.024,2.165    c12.216-8.313,17.58-6.586,17.58-6.586c3.492,8.847,1.296,15.377,0.636,17.003c4.104,4.494,6.58,10.228,6.58,17.244    c0,24.681-14.964,30.115-29.22,31.705c2.296,1.984,4.344,5.903,4.344,11.899c0,8.59-0.08,15.517-0.08,17.626    c0,1.719,1.152,3.719,4.4,3.088C109.68,118.034,128,93.967,128,65.591C128,30.099,99.344,1.333,63.996,1.333" fill="rgb(0,200,0)" fill-rule="evenodd" id="Github"/></g></g></svg>
                        </i>
                    </a>
                    <a href="<?=$GLOBALS['CONTACTS']['LinkedIn']['UF_DAV_VALUE']?>"
                       target="_blank"
                       title="Профиль в LinkedIn"
                       aria-label="LinkedIn">
                        <i class="hero-social-icons">
                            <svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,0c141.29,0 256,114.71 256,256c0,141.29 -114.71,256 -256,256c-141.29,0 -256,-114.71 -256,-256c0,-141.29 114.71,-256 256,-256Zm-80.037,399.871l0,-199.921l-66.464,0l0,199.921l66.464,0Zm239.62,0l0,-114.646c0,-61.409 -32.787,-89.976 -76.509,-89.976c-35.255,0 -51.047,19.389 -59.889,33.007l0,-28.306l-66.447,0c0.881,18.757 0,199.921 0,199.921l66.446,0l0,-111.65c0,-5.976 0.43,-11.95 2.191,-16.221c4.795,-11.935 15.737,-24.299 34.095,-24.299c24.034,0 33.663,18.34 33.663,45.204l0,106.966l66.45,0Zm-272.403,-296.321c-22.74,0 -37.597,14.95 -37.597,34.545c0,19.182 14.405,34.544 36.717,34.544l0.429,0c23.175,0 37.6,-15.362 37.6,-34.544c-0.43,-19.595 -14.424,-34.545 -37.149,-34.545Z"/></svg>
                        </i>
                    </a>
                    <a href="<?=$GLOBALS['CONTACTS']['Telegram']['UF_DAV_VALUE']?>"
                       target="_blank"
                       title="Написать мне в Telegram"
                       aria-label="Telegram">
                        <i class="hero-social-icons">
                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256,0C114.615,0,0,114.615,0,256S114.615,512,256,512,512,397.385,512,256,397.385,0,256,0ZM389.059,161.936,343.591,379a16.007,16.007,0,0,1-25.177,9.593l-66.136-48.861-40.068,37.8a5.429,5.429,0,0,1-7.74-.294l-.861-.946,6.962-67.375L336.055,194.266a3.358,3.358,0,0,0-4.061-5.317L171.515,290.519,102.4,267.307a9.393,9.393,0,0,1-.32-17.694L372.5,147.744A12.441,12.441,0,0,1,389.059,161.936Z" style="stroke:none;fill-rule:nonzero;fill:rgb(0,200,0);fill-opacity:1"/></svg>
                        </i>
                    </a>
                    <a href="<?=$GLOBALS['CONTACTS']['Bitrix']['UF_DAV_VALUE']?>"
                       target="_blank"
                       title="Профиль на сайте 1С-Битрикс"
                       aria-label="Bitrix">
                        <i class="hero-social-icons">
<svg xmlns="http://www.w3.org/2000/svg" width="149" height="150" viewBox="0 0 149 149"><path d="M60.086 148.277c-13.027-2.695-25.18-8.714-34.719-17.187C.871 109.336-6.699 75.16 6.242 44.75c3.176-7.465 8.344-15.043 14.742-21.629l5.645-5.805.398 33.973c.38 32.52.465 34.16 2.004 38.258 3.078 8.195 6.375 13.418 12.055 19.074 14.672 14.61 36.191 18.254 54.484 9.23 17.196-8.484 28.035-26.93 26.778-45.558-.848-12.516-5.055-21.691-14.141-30.836-6.871-6.914-14.957-11.43-23.758-13.273-8.953-1.872-8.523-2.149-8.523 5.433v6.543l4.906.903c19.012 3.503 31.586 22.175 27.625 41.015-1.266 6.016-4.09 11.332-8.621 16.227-6.887 7.437-16.574 10.992-25.035 10.976-13.992-.027-25.672-7.976-31.332-19.73 0 0-1.485-3.364-1.961-5.438-2.805-12.21-1.012-37.918-1.012-37.918l-.219-37.582 2.22-1.148c1.222-.633 2.39-1.149 2.6-1.149.212 0 .477 17.262.594 38.364 0 0-2.695 27.656.637 38.254.48 1.53 1.39 4.148 1.39 4.148 2.919 5.945 7.598 11.176 13.677 14.055 4.613 2.187 6.937 3.175 13.761 3.175 4.461 0 8.414-1.41 12.957-3.5 5.36-2.464 11.508-9 13.782-14.964 6.257-16.442-2.457-34.13-19.247-39.059-6.863-2.016-6.722-2.129-6.722 5.332v6.52l3.293.882c11.875 3.176 15.496 19.09 6.176 27.266-3.293 2.89-6.262 4.168-11.454 4.168-5.546 0-10.87-3.36-13.609-8.508-1.64-3.094-1.781-6.027-1.781-7.37 0-12.415-.27-34.74-.27-34.74L58.06 2.048l1.707-.422c.937-.234 4.726-.809 8.418-1.281 12.53-1.598 31.062 2.5 43.515 9.625 16.977 9.715 29.82 26.398 35.168 45.683 1.84 6.633 2.043 8.563 2.043 19.235 0 10.625-.207 12.617-2.008 19.105-7.273 26.211-25.777 44.95-52.234 52.895-5.57 1.672-8.176 1.992-18.004 2.199-7.926.172-13.066-.082-16.578-.809m0 0" style="stroke:none;fill-rule:nonzero;fill:rgb(0,200,0);fill-opacity:1"/></svg>

                        </i>
                    </a>
                </div>

                <div class="hero-buttons">
                    <?php if (is_array($arResult['DISPLAY_PROPERTIES']['CONTACT_BTN'])) { ?>
                        <a href="<?= $arResult['DISPLAY_PROPERTIES']['CONTACT_BTN']['DESCRIPTION'] ?>" class="btn">
                            <?= $arResult['DISPLAY_PROPERTIES']['CONTACT_BTN']['VALUE'] ?>
                        </a>
                    <?php } ?>
                    <?php if (is_array($arResult['DISPLAY_PROPERTIES']['SECOND_BTN'])) { ?>
                        <a href="<?= $arResult['DISPLAY_PROPERTIES']['SECOND_BTN']['DESCRIPTION'] ?>"
                           class="btn btn-outline">
                            <?= $arResult['DISPLAY_PROPERTIES']['SECOND_BTN']['VALUE'] ?>
                        </a>
                    <?php } ?>
                </div>
            </div>

            <div class="hero-image">
                <div class="photo-container">
                    <div class="photo-frame"></div>
                    <img src="<?= $arResult['PROPERTIES']['PHOTOS']['ARR_VALUE'][--$photoId]['SRC'] ?>"
                         alt="<?=$GLOBALS['CONTACTS']['Name']['UF_DAV_VALUE']?>, разработчик 1С-Битрикс"
                         class="profile-img">
                </div>

                <div class="tech-icons">
                    <?php foreach ($arResult['PROPERTIES']['TECH_ICONS']['~VALUE'] as $icon) {
                        echo $icon['TEXT'];
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
