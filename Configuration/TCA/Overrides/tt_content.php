<?php

$extKey = 'chr_wallio';
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'CHR.' . $extKey,
    'wall',
    'SocialWall',
    'EXT:chr_wallio/ext_icon.gif'
);
$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($extKey);
$pluginSignature = strtolower($extensionName) . '_wall';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] =
    'select_key,pages,recursive';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:' . $extKey . '/Configuration/FlexForms/Plugin.xml'
);