<?php

namespace Koehnlein\SchedulerDisableRuntask\Xclass;

class SchedulerModuleController extends \TYPO3\CMS\Scheduler\Controller\SchedulerModuleController
{
    protected function listTasksAction()
    {
        $content = '
            <style type="text/css">
                .t-span .btn-group:last-child .btn:last-child,
                #scheduler_executeselected[name="go"] {
                  display: none;
                }
            </style>
        ';
        $content .= parent::listTasksAction();

        return $content;
    }
}
