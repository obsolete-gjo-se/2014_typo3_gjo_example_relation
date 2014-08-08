<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

return array(

    'ctrl' => array(
        'title' => 'Table: tx_gjoexamplerelation_domain_model_onetomanypost',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gjo_example_relation') . 'Resources/Public/Icons/tx_gjoexamplerelation_domain_model_onetomanypost.gif',
        'label' => 'title',

    ),

    'columns' => array(

        'title' => array(
            'label' => 'Label: title',
            'config' => array(
                'type' => 'input',
            ),
        ),

        'blog_id' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
    ),

    'types' => array(
        '1' => array(
            'showitem' => '
                title,
                blog_id
                '),
    ),

    'interface' => array(
        'showRecordFieldList' => '
            title,
            blog_id
            ',),
);