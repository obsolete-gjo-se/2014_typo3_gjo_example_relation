<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

return array(

    'ctrl' => array(
        'title' => 'Table: tx_gjoexamplerelation_domain_model_ownermanytooneuniperson',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gjo_example_relation') . 'Resources/Public/Icons/tx_gjoexamplerelation_domain_model_ownermanytooneuniperson.gif',
        'label' => 'string_without_break',

    ),

    'columns' => array(
        'string_without_break' => array(
            'label' => 'Label: stringWithoutBreak',
            'config' => array(
                'type' => 'input',
            ),
        ),
    ),

    'types' => array(
        '1' => array(
            'showitem' => '
                string_without_break,
                '),
    ),

    'interface' => array(
        'showRecordFieldList' => '
            string_without_break,
            ',),
);