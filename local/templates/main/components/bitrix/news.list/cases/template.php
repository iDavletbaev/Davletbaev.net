<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/cases.css");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/cases.js");

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
//** @global CDatabase $DB */
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
            <h1 class="page-title">Мои кейсы</h1>
            <p class="page-subtitle">Реализованные проекты и успешные решения</p>
        </div>

        <?php if ($arParams["DISPLAY_TOP_PAGER"]) { ?>
            <?= $arResult["NAV_STRING"] ?><br/>
        <?php } ?>

        <div class="cases-categories">
            <button class="category-btn active" data-category="all">Все</button>
            <button class="category-btn" data-category="web">Веб-сайты</button>
            <button class="category-btn" data-category="app">Приложения</button>
            <button class="category-btn" data-category="ecommerce">Интернет-магазины</button>
            <button class="category-btn" data-category="optimization">Оптимизация</button>
        </div>

        <div class="cases-grid">
            <?php foreach ($arResult["ITEMS"] as $arItem) {
//                d($arItem);
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <article
                    class="case-card"
                    data-category="web"
                    data-case="1"
                    id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                >
                    <div class="case-card-image">
                        <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"
                             alt="<?=$arItem['NAME']?>"
                        >
                        <span class="case-category">Веб-сайты</span>
                    </div>
                    <div class="case-card-content">
                        <div class="case-meta">
                            <span class="case-date"><i class="far fa-calendar"></i> Январь 2023</span>
                            <span class="case-duration"><i class="far fa-clock"></i> 3 недели</span>
                        </div>
                        <h3 class="case-title"><?=$arItem['NAME']?></h3>cdscsds
                        <p class="case-excerpt">
                            <?=$arItem['PREVIEW_TEXT']?>
                        </p>
                        <button class="case-read-more">Подробнее <i class="fas fa-arrow-right"></i></button>
                    </div>
                </article>
            <?php } ?>
        </div>

        <?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <br/><?= $arResult["NAV_STRING"] ?>
        <?php endif; ?>

        <div class="cases-pagination">
            <a href="#" class="pagination-btn active">1</a>
            <a href="#" class="pagination-btn">2</a>
            <a href="#" class="pagination-btn">3</a>
        </div>
    </div>
</main>

<?php // Модальное окно кейса ?>
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
