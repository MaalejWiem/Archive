<?php

namespace EnhancedProxy_73b88e6bf5989f9e4785cea753cad509a15376f1\__CG__\JMS\SecurityExtraBundle\Tests\Functional\TestBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class PostController extends \JMS\SecurityExtraBundle\Tests\Functional\TestBundle\Controller\PostController implements \JMS\DiExtraBundle\DependencyInjection\LookupMethodClassInterface
{
    private $__jmsDiExtra_container;

    public function __jmsDiExtra_setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        $this->__jmsDiExtra_container = $container;
    }

    public function __jmsDiExtra_getOriginalClassName()
    {
        return 'JMS\\SecurityExtraBundle\\Tests\\Functional\\TestBundle\\Controller\\PostController';
    }

    protected function getAclProvider()
    {
        return $this->__jmsDiExtra_container->get('security.acl.provider', 1);
    }
}