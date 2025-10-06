<?php

/** @var array $arResult */
foreach ($arResult['ITEMS'] as $key=> $arItem) {
    $section = \Bitrix\Iblock\SectionTable::getById($arItem['IBLOCK_SECTION_ID'])->fetch();
    $arResult['ITEMS'][$key]['SECTION'] = $section;
    $arResult['SECTIONS'][$section['ID']] = $section;
}
