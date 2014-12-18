<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Gjo.' . $_EXTKEY,
    'ManyToOneUniPlugin',
    array(
        'OwnerManyToOneUniPerson' => 'findAll, show, addForm, add, updateForm, update, remove'
    ),
    array(
        'OwnerManyToOneUniPerson' => 'findAll, show, addForm, add, updateForm, update, remove'
    )
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Gjo.' . $_EXTKEY,
    'OneToManyPlugin',
    array(
        'OneToManyBlog' => 'findAll, show, addForm, add, updateForm, update, remove',
        'OneToManyPost' => 'show, addForm, add, updateForm, update, remove'
    ),
    array(
        'OneToManyBlog' => 'findAll, show, addForm, add, updateForm, update, remove',
        'OneToManyPost' => 'show, addForm, add, updateForm, update, remove'
    )
);