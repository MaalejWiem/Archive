<?php

namespace EnhancedProxybafd91b3_a232afb78673de2599888a2e581d6374bc48073b\__CG__\Claroline\CoreBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class HomeController extends \Claroline\CoreBundle\Controller\HomeController
{
    private $__CGInterception__loader;

    public function updateAction($content)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'updateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($content));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($content), $interceptors);

        return $invocation->proceed();
    }

    public function typesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'typesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function reorderAction($type, $a, \Claroline\CoreBundle\Entity\Home\Content $b = NULL)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'reorderAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type, $a, $b));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type, $a, $b), $interceptors);

        return $invocation->proceed();
    }

    public function deletetypeAction($type)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'deletetypeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction($content)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($content));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($content), $interceptors);

        return $invocation->proceed();
    }

    public function createTypeAction($name)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'createTypeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($name));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($name), $interceptors);

        return $invocation->proceed();
    }

    public function createAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'createAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function contentToRegionAction($region, $content)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'contentToRegionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($region, $content));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($region, $content), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}