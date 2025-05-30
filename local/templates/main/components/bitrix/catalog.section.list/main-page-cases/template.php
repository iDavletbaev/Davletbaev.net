<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}

use Bitrix\Main\Localization\Loc;

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section id="tasks" class="tasks-section">
    <div class="container">
        <h2 class="section-title">Типовые задачи</h2>
        <div class="tasks-grid">
            <?php foreach ($arResult['SECTIONS'] as $arSection) { ?>
            <div class="task-card">
                <div class="task-icon">
                    <?=$arSection['~UF_CASE_SECTION_ICON']?>
                </div>
                <h3><?=$arSection['NAME']?></h3>
                <p>
                    <?=$arSection['~DESCRIPTION']?>
                </p>
            </div>
            <?php } ?>
        </div>
        <div class="text-center">
            <a href="/<?=$arResult['SECTIONS'][0]['IBLOCK_CODE']?>/"
               class="btn btn-outline">
                <?= Loc::getMessage('GO_TO_CASES_LINk')?>
            </a>
        </div>
    </div>
</section>
