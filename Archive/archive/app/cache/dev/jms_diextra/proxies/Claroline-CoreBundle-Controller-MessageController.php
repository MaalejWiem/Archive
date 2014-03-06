<?php

namespace EnhancedProxybafd91b3_48b8d92badd5c5e63f554c20e9458a06fa9a128e\__CG__\Claroline\CoreBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class MessageController extends \Claroline\CoreBundle\Controller\MessageController
{
    private $__CGInterception__loader;

    public function softDeleteAction(\Claroline\CoreBundle\Entity\User $user, array $messages)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'softDeleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $messages));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $messages), $interceptors);

        return $invocation->proceed();
    }

    public function showAction(\Claroline\CoreBundle\Entity\User $user, array $receivers, \Claroline\CoreBundle\Entity\Message $message = NULL)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'showAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $receivers, $message));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $receivers, $message), $interceptors);

        return $invocation->proceed();
    }

    public function sendAction(\Claroline\CoreBundle\Entity\User $sender, \Claroline\CoreBundle\Entity\Message $parent = NULL)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'sendAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sender, $parent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sender, $parent), $interceptors);

        return $invocation->proceed();
    }

    public function restoreFromTrashAction(\Claroline\CoreBundle\Entity\User $user, array $messages)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'restoreFromTrashAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $messages));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $messages), $interceptors);

        return $invocation->proceed();
    }

    public function markAsReadAction(\Claroline\CoreBundle\Entity\User $user, \Claroline\CoreBundle\Entity\Message $message)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'markAsReadAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $message));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $message), $interceptors);

        return $invocation->proceed();
    }

    public function listSentAction(\Claroline\CoreBundle\Entity\User $sender, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'listSentAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sender, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sender, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function listRemovedAction(\Claroline\CoreBundle\Entity\User $user, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'listRemovedAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function listReceivedAction(\Claroline\CoreBundle\Entity\User $receiver, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'listReceivedAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($receiver, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($receiver, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function formForGroupAction(\Claroline\CoreBundle\Entity\Group $group)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'formForGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(\Claroline\CoreBundle\Entity\User $user, array $messages)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $messages));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $messages), $interceptors);

        return $invocation->proceed();
    }

    public function contactableUsersListAction(\Claroline\CoreBundle\Entity\User $user, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'contactableUsersListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function contactableGroupsListAction(\Claroline\CoreBundle\Entity\User $user, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'contactableGroupsListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function checkAccess(\Claroline\CoreBundle\Entity\Message $message, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\MessageController', 'checkAccess');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($message, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($message, $user), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}