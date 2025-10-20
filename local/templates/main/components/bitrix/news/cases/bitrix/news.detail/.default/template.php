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

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/cases.css");
?>
<main class="cases-detail-page">
    <div class="container">
        <article class="blog-article">
            <div class="article-content">
            <div class="article-header">
                <div class="article-meta">
                    <span class="article-category">В
                    <?=$arResult['SECTIOM']['NAME']?></span>
                    <?php if ($arResult['DISPLAY_PROPERTIES']['DURATION']['DISPLAY_VALUE']) { ?>
                    <span class="article-date"><i class="far fa-calendar"></i>
                        <?=$arResult['DISPLAY_PROPERTIES']['DURATION']['DISPLAY_VALUE']?></span>
                    <?php } ?>
                </div>
                <h1 class="article-title"><?=$arResult['NAME']?></h1>
            </div>


            <?php if ($arResult['PREVIEW_PICTURE']['SRC']) { ?>
            <div class="article-image">
                <img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>"
                     alt="<?=$arResult['NAME']?>">
            </div>
            <?php } ?>
                <?=$arResult['DETAIL_TEXT']?>

                <?php if ($arResult['~PREVIEW_TEXT']) { ?>
                        <h2><?=Loc::getMessage("T_NEWS_DETAIL_RESULT")?></h2>
                    <?=$arResult['~PREVIEW_TEXT']?>
                <?php } ?>
            </div>

            <div class="article-footer">
                <?php if (is_array($arResult['DISPLAY_PROPERTIES']['TECH']['DISPLAY_VALUE'])) { ?>
                <div class="article-tags">
                    <h3><?=Loc::getMessage("T_NEWS_DETAIL_TECH")?></h3>
                    <div class="article-tags">
                        <?php foreach ($arResult['DISPLAY_PROPERTIES']['TECH']['DISPLAY_VALUE'] as $tech) { ?>
                        <span class="tag"><?=$tech?></span>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>

                <a class="btn" href="/cases/">
                    <i class="fas fa-arrow-left"></i>
                    <?=Loc::getMessage("T_NEWS_DETAIL_BACK")?>
                </a>
            </div>
        </article>
    </div>
</main>