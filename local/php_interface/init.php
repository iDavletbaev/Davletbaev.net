<?php

use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Loader;

if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/vendor/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/vendor/autoload.php");
}

Loader::includeModule("highloadblock");
$hlblock = HighloadBlockTable::getById(1)->fetch();

if ($hlblock) {
    $entity = HighloadBlockTable::compileEntity($hlblock);
    $entityDataClass = $entity->getDataClass();

    $result = $entityDataClass::getList(array(
        "select" => array("*"),
        "order" => array("ID" => "DESC"),
    ));

    while ($arRow = $result->Fetch()) {
        $GLOBALS['CONTACTS'][$arRow['UF_DAV_NAME']] = $arRow;
    }
}
