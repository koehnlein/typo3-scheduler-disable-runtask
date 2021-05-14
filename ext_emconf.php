<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Disable "Run task" in scheduler',
    'description' => 'Hide "Run task" button in scheduler module to not click it by mistake.',
    'category' => 'be',
    'author' => 'Albrecht Köhnlein',
    'state' => 'beta',
    'version' => '0.1.2',
    'constraints' => [
        'depends' => [
            'typo3' => '8.0.0-8.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Koehnlein\\SchedulerDisableRuntask\\' => 'Classes'
        ]
    ],
];
