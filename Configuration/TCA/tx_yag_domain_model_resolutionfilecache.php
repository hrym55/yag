<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

return [
    'ctrl' => [
        'title' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_resolutionfilecache',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => false,
        'delete' => 'deleted',
        'enablecolumns' => [],
        'iconfile' => 'EXT:yag/Resources/Public/Icons/tx_yag_domain_model_resolutionfilecache.png'
    ],
    'hideTable' => 1,
    'interface' => [
        'showRecordFieldList' => 'width,height,quality,path,item,paramhash',
    ],
    'types' => [
        '1' => ['showitem' => 'width,height,quality,path,item,paramhash'],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
    ],
    'columns' => [
        'paramhash' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_resolutionfilecache.paramhash',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'width' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_resolutionfilecache.width',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'height' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_resolutionfilecache.height',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'path' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_resolutionfilecache.path',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'item' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_resolutionfilecache.item',
            'config' => [
                'type' => 'select', 		'renderType' => 'selectSingle',
                'foreign_table' => 'tx_yag_domain_model_item',
                'minitems' => 0,
                'maxitems' => 1,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                        'options' => [
                            'type' => 'popup',
                            'title' => 'Edit',
                            'module' => [
                                'name' => 'wizard_edit',
                            ],
                            'popup_onlyOpenIfSelected' => true,
                            'icon' => 'actions-open',
                            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        ],
                    ],
                    'addRecord' => [
                        'disabled' => false,
                        'options' => [
                            'title' => 'Create new',
                            'setValue' => 'prepend',
                            'table' => 'tx_yag_domain_model_gallery',
                            'pid' => '###CURRENT_PID###',
                            'module' => [
                                'name' => 'wizard_add'
                            ]
                        ],
                    ],
                ],
            ],
        ],
    ],
];

$TCA['tx_yag_domain_model_resolutionfilecache']['ctrl']['hideTable'] = 1;
