<?php

namespace Claroline\CoreBundle\Controller\Tool;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class WorkspaceAgendaController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\CoreBundle\Controller\Tool\WorkspaceAgendaController($container->get('security.context', 1), $container->get('claroline.form.factory', 1), $container->get('claroline.persistence.object_manager', 1), $container->get('request', 1));
        return $instance;
    }
}
