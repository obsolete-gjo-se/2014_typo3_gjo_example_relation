<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

return array(

    'ctrl' => array(
        'title' => 'Table: tx_gjoexamplerelation_domain_model_onetomanyblog',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gjo_example_relation') . 'Resources/Public/Icons/tx_gjoexamplerelation_domain_model_onetomanyblog.gif',
        'label' => 'title',

    ),

    'columns' => array(

        'title' => array(
            'label' => 'Label: title',
            'config' => array(
                'type' => 'input',
            ),
        ),

        'posts_counter' => array(
            'label' => 'Label: posts',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_gjoexamplerelation_domain_model_onetomanypost',
                'foreign_field' => 'blog_id',
                'maxitems' => 9999,
                'appearance' => array(
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ),
            ),

        ),
    ),

    'types' => array(
        '1' => array(
            'showitem' => '
                title,
                posts_counter
                '),
    ),

    'interface' => array(
        'showRecordFieldList' => '
            title,
            posts_counter
            ',),
);