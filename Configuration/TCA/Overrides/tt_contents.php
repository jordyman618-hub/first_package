<?php
define('Typo3') or die();

$relativeAssetPath = 'first_package';

//Typ des Contents
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt-content',
    'CType',
    [
        'Raster',
        'raster_main',
        'content-textpic'
    ],
    'text',
    'after'
);

//Felder werden angezeigt
$GLOBALS['TCA']['tt_content']['types']['raster-main'] = [
    'showitem' => '
    --div--;LLL:EXT:core/Ressources/Private/Language/locallang_tca.xlf:be_groups_tab_common,--pallette--;;
    general,
    header,
    bodytext; RasterText;t3editor,
    --div--;LLL:EXT:core/Ressources/Private/Language/locallang_tca.xlf:be_groups_tab_access,
    hidden,
    starttime,
    endtime
    ',
];