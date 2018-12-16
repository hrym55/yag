<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

return [
    'ctrl' => [
        'title' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'fe_group' => 'fe_group'
        ],
        'dividers2tabs' => true,
        'iconfile' => 'EXT:yag/Resources/Public/Icons/tx_yag_domain_model_item.png'
    ],
    'interface' => [
        'showRecordFieldList' => 'title,filename,description,date,sourceuri,filehash,item_type,width,height,filesize,fe_user_uid,fe_group_uid,sorting,album,item_meta,fe_group',
    ],
    'types' => [
        '1' => ['showitem' =>
            '--div--;Metadata,
			title,description,link,date,
			--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
			hidden,fe_group'],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
            'config' => [
                'type' => 'select', 		'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    ['LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.php:LGL.default_value', 0]
                ],
            ]
        ],
        'fe_group' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.fe_group',
            'config' => [
                'type' => 'select', 		'renderType' => 'selectSingle',
                'size' => 5,
                'maxitems' => 20,
                'items' => [
                    ['LLL:EXT:lang/locallang_general.php:LGL.hide_at_login', -1],
                    ['LLL:EXT:lang/locallang_general.php:LGL.any_login', -2],
                    ['LLL:EXT:lang/locallang_general.php:LGL.usergroups', '--div--']
                ],
                'exclusiveKeys' => '-1,-2',
                'foreign_table' => 'fe_groups',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ]
            ]
        ],
        'l18n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
            'config' => [
                'type' => 'select', 		'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_yag_domain_model_item',
                'foreign_table_where' => 'AND tx_yag_domain_model_item.uid=###REC_FIELD_l18n_parent### AND tx_yag_domain_model_item.sys_language_uid IN (-1,0)',
            ]
        ],
        'l18n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ]
        ],
        't3ver_label' => [
            'displayCond' => 'FIELD:t3ver_label:REQ:true',
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
            'config' => [
                'type' => 'none',
                'cols' => 27,
            ]
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config' => [
                'type' => 'check',
            ]
        ],
        'title' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'filename' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.filename',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'original_filename' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.original_filename',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_album.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 5,
                'eval' => 'trim',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
            ]
        ],
        'date' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.date',
            'config' => [
                'type' => 'input',
                'size' => 12,
                'eval' => 'datetime',
                'renderType' => 'inputDateTime',
                'checkbox' => 1,
                'default' => time()
            ],
        ],
        'sourceuri' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.sourceuri',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'filehash' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.filehash',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'item_type' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.item_type',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'width' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.width',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'height' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.height',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'link' => [
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.link',
            'exclude' => 1,
            'config' => [
                'type' => 'input',
                'size' => '50',
                'max' => '256',
                'eval' => 'trim',
                'renderType' => 'inputLink',
                'softref' => 'typolink',
            ],
        ],
        'filesize' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.filesize',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'fe_user_uid' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.fe_user_uid',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'fe_group_uid' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.fe_group_uid',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'sorting' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.sorting',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim'
            ]
        ],
        'album' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.album',
            'config' => [
                'type' => 'select', 		'renderType' => 'selectSingle',
                'foreign_table' => 'tx_yag_domain_model_album',
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
                            'table' => 'tx_yag_domain_model_album',
                            'pid' => '###CURRENT_PID###',
                            'module' => [
                                'name' => 'wizard_add'
                            ]
                        ],
                    ],
                ],
            ],
        ],
        'item_meta' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.item_meta',
            'config' => [
                'type' => 'select', 		'renderType' => 'selectSingle',
                'foreign_table' => 'tx_yag_domain_model_itemmeta',
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
                            'table' => 'tx_yag_domain_model_itemmeta',
                            'pid' => '###CURRENT_PID###',
                            'module' => [
                                'name' => 'wizard_add'
                            ]
                        ],
                    ],
                ],
            ],
        ],

        'tags' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.tags',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_yag_domain_model_tag',
                'MM' => 'tx_yag_item_tag_mm',
                'maxitems' => 99999,
                'appearance' => [
                    'collapse' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],

        'crdate' => [
            'label' => 'crdate',
            'config' => [
                'type' => 'input',
                'size' => 8,
                'eval' => 'date',
                'renderType' => 'inputDateTime',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ]
            ]
        ],

        'tstamp' => [
            'label' => 'crdate',
            'config' => [
                'type' => 'input',
                'size' => 8,
                'eval' => 'date',
                'renderType' => 'inputDateTime',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ]
            ]
        ],


        'rating' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.rating',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'float'
            ],
        ],
    ],
];
