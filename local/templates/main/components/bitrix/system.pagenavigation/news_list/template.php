<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>
<div class="cases-pagination">
<?php if ($arResult["bDescPageNumbering"] === true): ?>

<?php else: ?>

    <?php if ($arResult["NavPageNomer"] > 1): ?>

        <?php if ($arResult["bSavePage"]): ?>
            <a class="pagination-btn" href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=1"><?= GetMessage("nav_begin") ?></a>
            |
            <a class="pagination-btn" href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"><?= GetMessage("nav_prev") ?></a>
            |
        <?php endif ?>

    <?php endif ?>

    <?php while ($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>

        <?php if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
            <b class="pagination-btn active"><?= $arResult["nStartPage"] ?></b>
        <?php elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false): ?>
            <a class="pagination-btn" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $arResult["nStartPage"] ?></a>
        <?php else: ?>
            <a class="pagination-btn" href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
        <?php endif ?>
        <?php $arResult["nStartPage"]++ ?>
    <?php endwhile ?>

<?php endif ?>


<?php if ($arResult["bShowAll"]): ?>
    <noindex>
        <?php if ($arResult["NavShowAll"]): ?>
            |&nbsp;<a class="pagination-btn"
                href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>SHOWALL_<?= $arResult["NavNum"] ?>=0"
                rel="nofollow"><?= GetMessage("nav_paged") ?></a>
        <?php else: ?>
            |&nbsp;<a class="pagination-btn"
                href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>SHOWALL_<?= $arResult["NavNum"] ?>=1"
                rel="nofollow"><?= GetMessage("nav_all") ?></a>
        <?php endif ?>
    </noindex>
<?php endif ?>
</div>
