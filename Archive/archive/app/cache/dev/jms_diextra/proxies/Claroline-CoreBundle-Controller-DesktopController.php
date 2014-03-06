<?php

namespace EnhancedProxybafd91b3_6eb2fa14bce3f2a13bba152832de15b89404cd22\__CG__\Claroline\CoreBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class DesktopController extends \Claroline\CoreBundle\Controller\DesktopController
{
    private $__CGInterception__loader;

    public function widgetsWithoutConfigAction($homeTabId, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\DesktopController', 'widgetsWithoutConfigAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($homeTabId, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($homeTabId, $user), $interceptors);

        return $invocation->proceed();
    }

    public function widgetsWithConfigAction($homeTabId, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\DesktopController', 'widgetsWithConfigAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($homeTabId, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($homeTabId, $user), $interceptors);

        return $invocation->proceed();
    }

    public function renderToolListAction(\Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\DesktopController', 'renderToolListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function openToolAction($toolName)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\DesktopController', 'openToolAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($toolName));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($toolName), $interceptors);

        return $invocation->proceed();
    }

    public function openAction(\Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\DesktopController', 'openAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}