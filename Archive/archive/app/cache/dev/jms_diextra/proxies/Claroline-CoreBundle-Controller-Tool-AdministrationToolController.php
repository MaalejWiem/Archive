<?php

namespace EnhancedProxybafd91b3_714394198e816565b20be1a7bba0d79d46b3c2e1\__CG__\Claroline\CoreBundle\Controller\Tool;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AdministrationToolController extends \Claroline\CoreBundle\Controller\Tool\AdministrationToolController
{
    private $__CGInterception__loader;

    public function showToolAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Tool\\AdministrationToolController', 'showToolAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function modifyToolAction(\Claroline\CoreBundle\Entity\Tool\Tool $tool)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Tool\\AdministrationToolController', 'modifyToolAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($tool));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($tool), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}