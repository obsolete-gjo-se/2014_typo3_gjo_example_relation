<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Gjo.' . $_EXTKEY,
    'ManyToOneUniPlugin',
    'ManyToOneUniPlugin Default'
);