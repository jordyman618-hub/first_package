<?php

defined('TYPO3') or die('Access denied.');

// Add default RTE configuration
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['first_package'] = 'EXT:first_package/Configuration/RTE/Default.yaml';

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'FirstPackage',
    'Pi1',
    [
        \Vendor\FirstPackage\Controller\DefaultController::class => 'container',
    ],
    []
);