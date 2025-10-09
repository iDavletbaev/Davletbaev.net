<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}

use Bitrix\Main\Localization\Loc;
?>



<div class="footer-links">
    <?php if (!empty($arResult)) {?>
    <h3><?= Loc::getMessage('MENU_DOT_DEFAULT_NAME')?></h3>
    <ul>
        <?php foreach($arResult as $arItem) { ?>
        <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?php } ?>
    </ul>
    <?php } ?>
</div>
