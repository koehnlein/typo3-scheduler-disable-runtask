<?php
defined('TYPO3_MODE') or die();

(function () {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Scheduler\Controller\SchedulerModuleController::class] = [
        'className' => \Koehnlein\SchedulerDisableRuntask\Xclass\SchedulerModuleController::class,
    ];
})('scheduler_disable_runtask');
