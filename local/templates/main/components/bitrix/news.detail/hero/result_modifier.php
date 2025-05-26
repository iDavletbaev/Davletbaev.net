<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}

foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $key => $photo) {
    $arResult['PROPERTIES']['PHOTOS']['ARR_VALUE'][$key] = CFile::GetFileArray($photo);
}

foreach ($arResult['PROPERTIES']['BACK_PHOTOS']['VALUE'] as $key => $background) {
    $arResult['PROPERTIES']['BACK_PHOTOS']['ARR_VALUE'][$key] = CFile::GetFileArray($background);
}
