<?php

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'CHR.chr_wallsio',
    'wall',
    [
        'Wall' => 'show',
    ],
    // non-cacheable actions
    [
        'Wall' => 'show',
    ]
);

