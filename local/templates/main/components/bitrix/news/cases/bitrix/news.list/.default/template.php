<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

use Bitrix\Main\Localization\Loc;

$sections = array();
//d($sections);
?>

<main class="cases-page">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title"><?=$arResult['NAME']?></h1>
            <p class="page-subtitle"><?=$arResult['~DESCRIPTION']?></p>
        </div>

        <?php $APPLICATION->ShowViewContent('case-filter');?>

        <div class="cases-grid">
            <?php foreach ($arResult['ITEMS'] as $arItem) {
                $sections[] = $arItem['SECTION_DATA'];
                ?>
                <article class="case-card"
                         data-category="<?= $arItem['IBLOCK_SECTION_ID'] ?>"
                         data-case="<?= $arItem['ID'] ?>"
                >
                    <div class="case-card-image">
                        <?php if (isset($arItem['PREVIEW_PICTURE']['SRC'])) { ?>
                            <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                 alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>"
                            >
                        <?php } ?>
                        <span class="case-category"><?= $arItem['SECTION_DATA']['NAME'] ?></span>
                    </div>
                    <div class="case-card-content">
                        <div class="case-meta">
                            <span class="case-date"><i class="far fa-calendar"></i> Январь 2023</span>
                            <span class="case-duration"><i class="far fa-clock"></i> 3 недели</span>
                        </div>
                        <h3 class="case-title"><?= $arItem['NAME'] ?></h3>
                        <p class="case-excerpt">
                            <?php if (isset($arItem['~PREVIEW_TEXT'])) {
                                echo $arItem['~PREVIEW_TEXT'];
                            } ?>
                        </p>
                        <button class="btn case-read-more">
                            <?= Loc::getMessage('CASES_MODAL') ?>
                            <!-- <i class="fas fa-arrow-right"></i>-->
                        </button>
                    </div>
                </article>
            <?php } ?>

        </div>

        <div class="cases-pagination">
            <a href="#" class="pagination-btn active">1</a>
            <a href="#" class="pagination-btn">2</a>
            <a href="#" class="pagination-btn">3</a>
            <a href="#" class="pagination-btn">Следующая <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</main>

<?php $this->SetViewTarget('case-filter'); ?>
<div class="cases-categories">
    <button class="category-btn active" data-category="all">Все</button>
    <?php foreach ($sections as $section) { ?>
        <button class="category-btn" data-category="<?= $section['ID'] ?>">
            <?= $section['NAME'] ?>
        </button>
    <?php } ?>
</div>
<?php $this->EndViewTarget(); ?>

<div id="case-modal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="modal-case-content">
            <div class="case-slider">
                <img src="" alt="" class="active-slide" id="modal-case-image">
                <div class="case-thumbnails" id="case-thumbnails">
                    <!-- Миниатюры будут добавляться через JS -->
                </div>
            </div>
            <div class="case-details">
                <h2 id="modal-case-title"></h2>
                <div class="case-meta-modal">
                    <span id="modal-case-date"></span>
                    <span id="modal-case-duration"></span>
                    <span id="modal-case-category"></span>
                </div>
                <div class="case-description" id="modal-case-description"></div>

                <div class="case-tech">
                    <h3>Использованные технологии:</h3>
                    <div class="tech-tags" id="modal-case-tech"></div>
                </div>

                <div class="case-results">
                    <h3>Результаты:</h3>
                    <ul class="results-list" id="modal-case-results"></ul>
                </div>

                <a href="#" class="btn" id="case-visit-btn">Посетить сайт</a>
            </div>
        </div>
    </div>
</div>
