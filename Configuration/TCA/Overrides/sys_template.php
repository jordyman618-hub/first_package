<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'first_package',
    'Configuration/TypoScript',
    'Local Grids Configuration'
);