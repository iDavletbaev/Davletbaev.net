<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult ['ITEMS']$arResult */
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

<main class="page-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title"><?= $arResult['NAME'] ?></h1>
            <p class="page-subtitle"><?= $arResult['DESCRIPTION'] ?></p>
        </div>

        <div class="content-grid">
            <div class="filter-sidebar">
                <h3 class="filter-title">Фильтровать по категориям</h3>
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">Все</button>
                    <?php foreach ($arResult['SECTIONS'] as $section) { ?>
                        <button class="filter-btn"
                                data-filter="<?= $section['CODE'] ?>"><?= $section['NAME'] ?></button>
                    <?php } ?>
                </div>
            </div>

            <div class="certificates-container">
                <div class="certificates-grid">
                    <?php foreach ($arResult['ITEMS'] as $arItem) { ?>
                        <div class="certificate-card"
                             data-category="<?= $arItem['SECTION']['CODE'] ?>"
                        >
                            <div class="certificate-image">
                                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                 alt="<?= $arItem['NAME'] ?>"
                                 data-src="<?=$arItem['DETAIL_PICTURE']['SRC'] ?>"
                                 >
                                <div class="certificate-overlay">
                                    <button class="view-btn" data-cert-id="<?= $arItem['ID'] ?>">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="certificate-info">
                                <h3><?= $arItem['NAME'] ?></h3>
                                <div class="certificate-meta">
                                <span class="cert-issuer">
                                    <i class="fas fa-award"></i> <?= $arItem['SECTION']['NAME'] ?>
                                </span>
                                <span class="cert-date">
                                    <i class="far fa-calendar"></i> <?= $arItem['DISPLAY_PROPERTIES']['YEAR']['VALUE'] ?>
                                </span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="pagination">
                    <?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                        <br/><?= $arResult["NAV_STRING"] ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</main>
