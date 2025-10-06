<?php
//if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;
require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;

header('Content-Type: application/json');

$caseData = \Bitrix\Iblock\ElementTable::getById($_REQUEST['id'])->fetch();
$section = \Bitrix\Iblock\SectionTable::getById($caseData['IBLOCK_SECTION_ID'])->fetch();

$caseProperty = CIBlockElement::GetProperty(
    6,
    $_REQUEST['id']
);

$props = array();
while ($casePropertyT = $caseProperty->fetch()) {
    //  Если свойство - строка
    if ($casePropertyT['USER_TYPE'] !== 'directory') {
        if ($casePropertyT['MULTIPLE'] == 'N') {
            $props[$casePropertyT['CODE']]['ID'] = $casePropertyT['ID'];
            $props[$casePropertyT['CODE']]['NAME'] = $casePropertyT['NAME'];
            $props[$casePropertyT['CODE']]['VALUE'] = $casePropertyT['VALUE'];
            $props[$casePropertyT['CODE']]['DESCRIPTION'] = $casePropertyT['DESCRIPTION'];
        }
        if ($casePropertyT['MULTIPLE'] == 'Y') {
            $props[$casePropertyT['CODE']]['ID'] = $casePropertyT['ID'];
            $props[$casePropertyT['CODE']]['NAME'] = $casePropertyT['NAME'];
            $props[$casePropertyT['CODE']]['VALUES'][] = $casePropertyT['VALUE_ENUM'];
        }
    } elseif ($casePropertyT['USER_TYPE'] == 'directory') {
        $props[$casePropertyT['CODE']]['ID'] = $casePropertyT['ID'];
        $props[$casePropertyT['CODE']]['NAME'] = $casePropertyT['NAME'];
        $props[$casePropertyT['CODE']]['TABLE_NAME'] = $casePropertyT['USER_TYPE_SETTINGS']['TABLE_NAME'];
        $props[$casePropertyT['CODE']]['VALUE'][] = $casePropertyT['VALUE'];
        $props[$casePropertyT['CODE']]['VALUE_ENUM'][] = $casePropertyT['VALUE_ENUM'];

        Loader::includeModule('highloadblock');
        $hlblockId = 2;
        $hlblock = HL\HighloadBlockTable::getById($hlblockId)->fetch();
        $entity = HL\HighloadBlockTable::compileEntity($hlblock);
        $entityClass = $entity->getDataClass();

        // Параметры выборки
        $params = [
            'select' => ['*'],
            'filter' => array(
                'UF_XML_ID' => $props['TECH']['VALUE']
                ),
            'cache' => ['ttl' => 3600],
        ];

        $result = $entityClass::getList($params)->fetchAll();

        if ($result) {
            $props['TECH']['V'] = $result;
        }
    }
    if ($casePropertyT['CODE'] == 'IMAGES') {
        $arFile = CFile::GetFileArray($casePropertyT['VALUE']);
        if (is_array($arFile)) {
            $caseData['IMAGES'][] = CFile::GetFileArray($casePropertyT['VALUE']);
        } else {
            $caseData['IMAGES'][0]['SRC'] = '/upload/iblock/d2e/92068oc0ak0kp5ztr4qojs6gq6i5jj5c.gif';
        }
    }
}

$case = array(
    'title' => $caseData['NAME'],
    'duration' => ($props['DURATION']['VALUE']) ? '<span id="modal-case-duration">'.$props['DURATION']['VALUE'].'</span>' : '',
    'category' => $section['NAME'],
    'description' => $caseData['DETAIL_TEXT'],
    'url' => array(
        'link' => (isset($props['URL']['VALUE'])) ? $props['URL']['VALUE'] : '',
        'description' => (isset($props['URL']['DESCRIPTION'])) ? $props['URL']['DESCRIPTION'] : '',
    ),
    'tech' => $props['TECH']['V'],
    'images' => $caseData['IMAGES'],
    'results' => $caseData['PREVIEW_TEXT'],
);

echo json_encode($case);
