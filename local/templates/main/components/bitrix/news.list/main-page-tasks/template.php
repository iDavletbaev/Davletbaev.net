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
<section id="skills" class="skills-section">
    <div class="container">
        <h2 class="section-title"><?= $arResult['NAME'] ?></h2>
        <div class="skills-grid">
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
                <div class="skill-card">
                    <div class="skill-icon">
                       <?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['FA_ICON']['~VALUE']?>
                    </div>
                    <h3><?=$item['NAME']?></h3>
                    <p><?=$arResult['ITEMS'][0]['~PREVIEW_TEXT']?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
