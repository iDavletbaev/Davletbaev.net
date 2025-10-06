<?php

foreach ($arResult["ITEMS"] as $key=>$arItem) {
    $arResult['ITEMS'][$key]['SECTION'] = \Bitrix\Iblock\SectionTable::getById($arItem['IBLOCK_SECTION_ID'])->fetch();
    $arResult['SECTIONS'][] = \Bitrix\Iblock\SectionTable::getById($arItem['IBLOCK_SECTION_ID'])->fetch();
}
