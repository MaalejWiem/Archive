<?php

namespace Claroline\CoreBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ProfileController__JMSInjector
{
    public static function inject($container) {
        require_once '/home/jenkins/jobs/Release/workspace/app/cache/dev/jms_diextra/proxies/Claroline-CoreBundle-Controller-ProfileController.php';
        $h = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Claroline\\CoreBundle\\Controller\\ProfileController' => array('formAction' => array(0 => 'security.access.method_interceptor'), 'updateAction' => array(0 => 'security.access.method_interceptor'), 'viewAction' => array(0 => 'security.access.method_interceptor'), 'editPasswordFormAction' => array(0 => 'security.access.method_interceptor'), 'editPasswordAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxybafd91b3_1e66503ca64c98cacb618e17be2344fab04cb88a\__CG__\Claroline\CoreBundle\Controller\ProfileController($container->get('claroline.manager.user_manager', 1), $container->get('claroline.manager.role_manager', 1), $container->get('claroline.event.event_dispatcher', 1), $container->get('security.context', 1), $container->get('request', 1));
        $instance->__CGInterception__setLoader($h);
        return $instance;
    }
}
