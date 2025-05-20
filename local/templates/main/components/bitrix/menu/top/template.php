<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}?>

    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

<?php if (!empty($arResult)) {?>
    <ul class="nav-menu">
        <?php foreach($arResult as $arItem) { ?>
        <li class="nav-item">
            <a href="<?=$arItem["LINK"]?>"
               class="nav-link">
                <?=$arItem["TEXT"]?>
            </a>
        </li>
        <?php } ?>
    </ul>
<?php }
