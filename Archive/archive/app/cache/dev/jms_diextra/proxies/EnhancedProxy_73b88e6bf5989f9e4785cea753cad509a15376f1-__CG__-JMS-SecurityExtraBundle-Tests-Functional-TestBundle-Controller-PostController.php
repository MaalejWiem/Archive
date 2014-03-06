<?php

namespace EnhancedProxybafd91b3_dfd68e3b7d24f73291d182582cfbe600406fb1ca\__CG__\JMS\SecurityExtraBundle\Tests\Functional\TestBundle\Controller;

require_once '/home/jenkins/jobs/Release/workspace/app/cache/dev/jms_diextra/lookup_method_classes/JMS-SecurityExtraBundle-Tests-Functional-TestBundle-Controller-PostController.php';

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class PostController extends \EnhancedProxy_73b88e6bf5989f9e4785cea753cad509a15376f1\__CG__\JMS\SecurityExtraBundle\Tests\Functional\TestBundle\Controller\PostController
{
    private $__CGInterception__loader;

    public function newPostAction()
    {
        $ref = new \ReflectionMethod('JMS\\SecurityExtraBundle\\Tests\\Functional\\TestBundle\\Controller\\PostController', 'newPostAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function listPostAction()
    {
        $ref = new \ReflectionMethod('JMS\\SecurityExtraBundle\\Tests\\Functional\\TestBundle\\Controller\\PostController', 'listPostAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function fooPostAction()
    {
        $ref = new \ReflectionMethod('JMS\\SecurityExtraBundle\\Tests\\Functional\\TestBundle\\Controller\\PostController', 'fooPostAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function editPostAction(\JMS\SecurityExtraBundle\Tests\Functional\TestBundle\Entity\Post $post)
    {
        $ref = new \ReflectionMethod('JMS\\SecurityExtraBundle\\Tests\\Functional\\TestBundle\\Controller\\PostController', 'editPostAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($post));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($post), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}