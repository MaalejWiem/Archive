<?php

namespace EnhancedProxybafd91b3_3a6664d31eadd588da916f6834cfbb0b0cb95ba7\__CG__\Claroline\CoreBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AdministrationController extends \Claroline\CoreBundle\Controller\AdministrationController
{
    private $__CGInterception__loader;

    public function usersOfGroupListAction(\Claroline\CoreBundle\Entity\Group $group, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'usersOfGroupListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function usersManagementAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'usersManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function userListPicsAction($page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'userListPicsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function userListPagerAction($page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'userListPagerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function userListAction($page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'userListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function userCreationFormAction(\Claroline\CoreBundle\Entity\User $currentUser)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'userCreationFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($currentUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($currentUser), $interceptors);

        return $invocation->proceed();
    }

    public function updatePlatformSettingsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'updatePlatformSettingsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function updateGroupSettingsAction(\Claroline\CoreBundle\Entity\Group $group)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'updateGroupSettingsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group), $interceptors);

        return $invocation->proceed();
    }

    public function subscribeMultipleUsersToOneWorkspaceAction(array $roles, array $users)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'subscribeMultipleUsersToOneWorkspaceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($roles, $users));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($roles, $users), $interceptors);

        return $invocation->proceed();
    }

    public function subscribeMultipleUsersToMultipleWorkspacesAction($roleKey, array $workspaces, array $users)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'subscribeMultipleUsersToMultipleWorkspacesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($roleKey, $workspaces, $users));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($roleKey, $workspaces, $users), $interceptors);

        return $invocation->proceed();
    }

    public function subscribeMultipleGroupsToOneWorkspaceAction(array $roles, array $groups)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'subscribeMultipleGroupsToOneWorkspaceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($roles, $groups));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($roles, $groups), $interceptors);

        return $invocation->proceed();
    }

    public function subscribeMultipleGroupsToMultipleWorkspacesAction($roleKey, array $workspaces, array $groups)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'subscribeMultipleGroupsToMultipleWorkspacesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($roleKey, $workspaces, $groups));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($roleKey, $workspaces, $groups), $interceptors);

        return $invocation->proceed();
    }

    public function registrationManagementUserListAction(array $workspaces)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'registrationManagementUserListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspaces));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspaces), $interceptors);

        return $invocation->proceed();
    }

    public function registrationManagementGroupListAction(array $workspaces)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'registrationManagementGroupListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspaces));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspaces), $interceptors);

        return $invocation->proceed();
    }

    public function registrationManagementAction($search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'registrationManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($search), $interceptors);

        return $invocation->proceed();
    }

    public function pluginParametersAction($domain)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'pluginParametersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($domain));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($domain), $interceptors);

        return $invocation->proceed();
    }

    public function pluginListAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'pluginListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function platformSettingsFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'platformSettingsFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function outsideOfGroupUserListAction(\Claroline\CoreBundle\Entity\Group $group, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'outsideOfGroupUserListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function logListAction($page)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'logListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($page));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($page), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function importUsersIntoGroupFormAction(\Claroline\CoreBundle\Entity\Group $group)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'importUsersIntoGroupFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group), $interceptors);

        return $invocation->proceed();
    }

    public function importUsersIntoGroupAction(\Claroline\CoreBundle\Entity\Group $group)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'importUsersIntoGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group), $interceptors);

        return $invocation->proceed();
    }

    public function importUsersFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'importUsersFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function importUsers()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'importUsers');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function groupSettingsFormAction(\Claroline\CoreBundle\Entity\Group $group)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'groupSettingsFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group), $interceptors);

        return $invocation->proceed();
    }

    public function groupListPagerAction($page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'groupListPagerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function groupListAction($page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'groupListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function groupCreationFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'groupCreationFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function deleteUsersFromGroupAction(\Claroline\CoreBundle\Entity\Group $group, array $users)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'deleteUsersFromGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group, $users));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group, $users), $interceptors);

        return $invocation->proceed();
    }

    public function deleteUsersAction(array $users)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'deleteUsersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($users));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($users), $interceptors);

        return $invocation->proceed();
    }

    public function deleteLogoAction($file)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'deleteLogoAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($file));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($file), $interceptors);

        return $invocation->proceed();
    }

    public function deleteGroupsAction(array $groups)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'deleteGroupsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($groups));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($groups), $interceptors);

        return $invocation->proceed();
    }

    public function createUserAction(\Claroline\CoreBundle\Entity\User $currentUser)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'createUserAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($currentUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($currentUser), $interceptors);

        return $invocation->proceed();
    }

    public function createGroupAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'createGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function analyticsTopAction($topType)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'analyticsTopAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($topType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($topType), $interceptors);

        return $invocation->proceed();
    }

    public function analyticsResourcesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'analyticsResourcesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function analyticsConnectionsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'analyticsConnectionsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function analyticsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'analyticsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function addUsersToGroupAction(\Claroline\CoreBundle\Entity\Group $group, array $users)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AdministrationController', 'addUsersToGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group, $users));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group, $users), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}