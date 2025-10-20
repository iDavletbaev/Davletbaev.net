<?php

use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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
?>

<main class="cases-page">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title"><?=$arResult['NAME']?></h1>
            <p class="page-subtitle"><?=$arResult['DESCRIPTION']?></p>
        </div>

        <div class="cases-categories">
            <button class="category-btn active" data-category="all">Все</button>
            <?php foreach ($arResult['SECTIONS'] as $arSection) { ?>
                <button class="category-btn" id="category_filter_<?= $arSection['ID'] ?>"
                        data-category="<?= $arSection['ID'] ?>">
                    <?= $arSection['NAME'] ?>
                </button>
            <?php } ?>
        </div>

        <div class="cases-grid">
            <?php foreach ($arResult['ITEMS'] as $arItem) { ?>
                <article class="case-card" data-category="<?= $arItem['IBLOCK_SECTION_ID'] ?>"
                         data-case="<?= $arItem['ID'] ?>">
                    <div class="case-card-image case-read-more">
                        <?php if (isset($arItem['PREVIEW_PICTURE']['SRC'])) { ?>
                            <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                 alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>"
                            >
                        <?php } else { ?>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/background-pattern.png"
                                 alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>"
                            >
                        <?php } ?>
                        <span class="case-category category-btn"
                              data-category="<?= $arItem['IBLOCK_SECTION_ID'] ?>"
                        >
                        <?= $arItem['SECTION']['NAME'] ?>
                    </span>
                    </div>
                    <div class="case-card-content">
                        <h3 class="case-title"><?= $arItem['NAME'] ?></h3>

                        <?php if (strlen($arItem['~PREVIEW_TEXT']) > 0) { ?>
                            <p><?= $arItem['~PREVIEW_TEXT'] ?></p>
                        <?php } ?>

                        <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="case-detail">
                            <?= Loc::getMessage('CASE_LIST_MORE_BTN') ?>
                        </a>
                    </div>
                </article>
            <?php } ?>
        </div>

        <?php if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
            <br/><?= $arResult["NAV_STRING"] ?>
        <?php endif; ?>
    </div>
</main>


