<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

return [
    'ctrl' => [
        'title' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_gallery',
        'label' => 'name',
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
        'iconfile' => 'EXT:yag/Resources/Public/Icons/tx_yag_domain_model_gallery.png'
    ],
    'interface' => [
        'showRecordFieldList' => 'name,description,date,fe_user_uid,fe_group_uid,albums,thumb_album,sorting,hidden,fe_group',
    ],
    'types' => [
        '1' => ['showitem' =>
            '--div--;Metadata,
			name,description,date,thumb_album,
			--div--;Albums,
			albums,
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
                'foreign_table' => 'tx_yag_domain_model_gallery',
                'foreign_table_where' => 'AND tx_yag_domain_model_gallery.uid=###REC_FIELD_l18n_parent### AND tx_yag_domain_model_gallery.sys_language_uid IN (-1,0)',
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
        'name' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_gallery.name',
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
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_gallery.date',
            'config' => [
                'type' => 'input',
                'size' => 12,
                'eval' => 'datetime',
                'renderType' => 'inputDateTime',
                'checkbox' => 1,
                'default' => time()
            ],
        ],
        'fe_user_uid' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_gallery.fe_user_uid',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'sorting' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_gallery.sorting',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'fe_group_uid' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_gallery.fe_group_uid',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'albums' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_gallery.albums',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_yag_domain_model_album',
                'foreign_field' => 'gallery',
                'foreign_sortby' => 'sorting',
                'minitems' => 0,
                'maxitems' => 9999,
                'appearance' => [
                    'collapse' => 0,
                    'levelLinksPosition' => 'bottom',
                    'showSynchronizationLink' => 0,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                    'showPossibleRecordsSelector' => 1,
                    'enabledControls' => ['new' => false, 'delete' => false, 'hide' => false]
                ],
            ]
        ],
        'thumb_album' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_item.thumb_album',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_yag_domain_model_album',
                'foreign_field' => 'uid',
                'minitems' => 1,
                'maxitems' => 1,
                'appearance' => [
                    'collapse' => 0,
                    'levelLinksPosition' => 'bottom',
                    'showSynchronizationLink' => 0,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                    'showPossibleRecordsSelector' => 1,
                    'enabledControls' => ['new' => false, 'delete' => false, 'hide' => false]
                ],
                'behaviour' => [
                    'localizeChildrenAtParentLocalization' => true
                ]
            ],
        ],
        'rating' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:yag/Resources/Private/Language/locallang_db.xlf:tx_yag_domain_model_gallery.rating',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'float'
            ],
        ],
    ],
];
