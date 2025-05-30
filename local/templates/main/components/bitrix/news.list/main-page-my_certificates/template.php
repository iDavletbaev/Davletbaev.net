<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
///** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section id="certificates" class="certificates-section">
    <div class="container">
        <h2 class="section-title"><?= $arResult['NAME'] ?></h2>
        <div class="certificates-grid">
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
                <div class="certificate-mp-card">
                    <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>"
                         alt="<?=$item['NAME']?>">
                    <div class="certificate-overlay">
                        <h3><?=$item['NAME']?></h3>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="text-center">
            <a href="/<?=$arResult['CODE']?>/" class="btn btn-outline">
                <?=$arResult['DESCRIPTION']?>
            </a>
        </div>
    </div>
</section>
