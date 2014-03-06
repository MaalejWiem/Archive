<?php

namespace EnhancedProxybafd91b3_1e66503ca64c98cacb618e17be2344fab04cb88a\__CG__\Claroline\CoreBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ProfileController extends \Claroline\CoreBundle\Controller\ProfileController
{
    private $__CGInterception__loader;

    public function viewAction(\Claroline\CoreBundle\Entity\User $user, $page = 1)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ProfileController', 'viewAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $page));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $page), $interceptors);

        return $invocation->proceed();
    }

    public function updateAction(\Claroline\CoreBundle\Entity\User $user, \Claroline\CoreBundle\Entity\User $loggedUser)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ProfileController', 'updateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $loggedUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $loggedUser), $interceptors);

        return $invocation->proceed();
    }

    public function formAction(\Claroline\CoreBundle\Entity\User $user, \Claroline\CoreBundle\Entity\User $loggedUser)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ProfileController', 'formAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $loggedUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $loggedUser), $interceptors);

        return $invocation->proceed();
    }

    public function editPasswordFormAction(\Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ProfileController', 'editPasswordFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function editPasswordAction(\Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ProfileController', 'editPasswordAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}