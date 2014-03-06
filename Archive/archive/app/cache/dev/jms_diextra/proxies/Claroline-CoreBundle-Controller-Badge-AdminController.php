<?php

namespace EnhancedProxybafd91b3_be49f7544aa71ff804e9e9ca06c7fd61e5767ad0\__CG__\Claroline\CoreBundle\Controller\Badge;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AdminController extends \Claroline\CoreBundle\Controller\Badge\AdminController
{
    private $__CGInterception__loader;

    public function unawardAction(\Symfony\Component\HttpFoundation\Request $request, \Claroline\CoreBundle\Entity\Badge\Badge $badge, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Badge\\AdminController', 'unawardAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $badge, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $badge, $user), $interceptors);

        return $invocation->proceed();
    }

    public function manageClaimAction(\Symfony\Component\HttpFoundation\Request $request, \Claroline\CoreBundle\Entity\Badge\BadgeClaim $badgeClaim, $validate = false)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Badge\\AdminController', 'manageClaimAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $badgeClaim, $validate));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $badgeClaim, $validate), $interceptors);

        return $invocation->proceed();
    }

    public function listAction($badgePage, $claimPage)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Badge\\AdminController', 'listAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($badgePage, $claimPage));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($badgePage, $claimPage), $interceptors);

        return $invocation->proceed();
    }

    public function editAction(\Symfony\Component\HttpFoundation\Request $request, \Claroline\CoreBundle\Entity\Badge\Badge $badge, $page = 1)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Badge\\AdminController', 'editAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $badge, $page));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $badge, $page), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(\Claroline\CoreBundle\Entity\Badge\Badge $badge)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Badge\\AdminController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($badge));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($badge), $interceptors);

        return $invocation->proceed();
    }

    public function awardAction(\Symfony\Component\HttpFoundation\Request $request, \Claroline\CoreBundle\Entity\Badge\Badge $badge)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Badge\\AdminController', 'awardAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $badge));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $badge), $interceptors);

        return $invocation->proceed();
    }

    public function addAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Badge\\AdminController', 'addAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}