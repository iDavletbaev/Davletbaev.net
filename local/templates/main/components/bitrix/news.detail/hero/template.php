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
                       aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="<?=$GLOBALS['CONTACTS']['LinkedIn']['UF_DAV_VALUE']?>"
                       target="_blank"
                       aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="<?=$GLOBALS['CONTACTS']['Telegram']['UF_DAV_VALUE']?>"
                       target="_blank"
                       aria-label="Telegram">
                        <i class="fab fa-telegram"></i>
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
