<?php

foreach ($arResult["ITEMS"] as $key=>$arItem) {
    $arResult['ITEMS'][$key]['SECTION_DATA'] = \Bitrix\Iblock\SectionTable::getById($arItem['IBLOCK_SECTION_ID'])->fetch();
//    $arResult['SECTONS'] = \Bitrix\Iblock\SectionTable::getById($arItem['IBLOCK_SECTION_ID'])->fetch();
}
foreach ($arResult["ITEMS"] as $key=>$arItem) {
    $arResult['ITEMS'][$key]['SECTION_DATA'] = \Bitrix\Iblock\SectionTable::getById($arItem['IBLOCK_SECTION_ID'])->fetch();
//    $arResult['SECTONS'] = \Bitrix\Iblock\SectionTable::getById($arItem['IBLOCK_SECTION_ID'])->fetch();
}
