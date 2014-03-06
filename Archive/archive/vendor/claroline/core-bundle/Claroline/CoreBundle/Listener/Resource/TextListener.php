<?php

namespace Claroline\CoreBundle\Listener\Resource;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use Claroline\CoreBundle\Entity\Resource\Text;
use Claroline\CoreBundle\Form\Factory\FormFactory;
use Claroline\CoreBundle\Entity\Resource\Revision;
use Claroline\CoreBundle\Event\CreateFormResourceEvent;
use Claroline\CoreBundle\Event\CreateResourceEvent;
use Claroline\CoreBundle\Event\DeleteResourceEvent;
use Claroline\CoreBundle\Event\OpenResourceEvent;
use Claroline\CoreBundle\Event\CopyResourceEvent;
use Claroline\CoreBundle\Event\ExportResourceTemplateEvent;
use Claroline\CoreBundle\Event\ImportResourceTemplateEvent;
use Claroline\CoreBundle\Library\Resource\ResourceCollection;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service
 */
class TextListener implements ContainerAwareInterface
{
    private $container;

    /**
     * @DI\InjectParams({
     *     "container" = @DI\Inject("service_container")
     * })
     *
     * @param ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @DI\Observe("create_form_text")
     *
     * @param CreateFormResourceEvent $event
     */
    public function onCreateForm(CreateFormResourceEvent $event)
    {
        $formFactory = $this->container->get('claroline.form.factory');
        $form = $formFactory->create(FormFactory::TYPE_RESOURCE_TEXT, array('text_'.rand(0, 1000000000)));
        $response = $this->container->get('templating')->render(
            'ClarolineCoreBundle:Text:createForm.html.twig',
            array(
                'form' => $form->createView(),
                'resourceType' => 'text'
            )
        );
        $event->setResponseContent($response);
        $event->stopPropagation();
    }

    /**
     * @DI\Observe("create_text")
     *
     * @param CreateResourceEvent $event
     */
    public function onCreate(CreateResourceEvent $event)
    {
        $request = $this->container->get('request');
        $em = $this->container->get('doctrine.orm.entity_manager');
        $user = $this->container->get('security.context')->getToken()->getUser();
       //wtf !
        $id = array_pop(array_keys($request->request->all()));
        $form = $this->container->get('claroline.form.factory')->create(FormFactory::TYPE_RESOURCE_TEXT, array($id));
        $form->handleRequest($request);

        if ($form->isValid()) {
            $revision = new Revision();
            $revision->setContent($form->getData()->getText());
            $revision->setUser($user);
            $text = new Text();
            $text->setName($form->getData()->getName());
            $revision->setText($text);
            $em->persist($text);
            $em->persist($revision);
            $event->setResources(array($text));
            $event->stopPropagation();

            return;
        }

        $errorForm = $this->container->get('claroline.form.factory')->create(FormFactory::TYPE_RESOURCE_TEXT, array('text_'.rand(0, 1000000000)));
        $errorForm->setData($form->getData());
        $children = $form->getIterator();
        $errorChildren = $errorForm->getIterator();

        foreach ($children as $key => $child) {
            $errors = $child->getErrors();
            foreach ($errors as $error) {
                $errorChildren[$key]->addError($error);
            }
        }

        $content = $this->container->get('templating')->render(
            'ClarolineCoreBundle:Text:createForm.html.twig',
            array(
                'form' => $errorForm->createView(),
                'resourceType' => 'text'
            )
        );
        $event->setErrorFormContent($content);
        $event->stopPropagation();
    }

    /**
     * @DI\Observe("copy_text")
     *
     * @param CopyResourceEvent $event
     */
    public function onCopy(CopyResourceEvent $event)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $resource = $event->getResource();
        $revisions = $resource->getRevisions();
        $copy = new Text();

        foreach ($revisions as $revision) {
            $rev = new Revision();
            $rev->setVersion($revision->getVersion());
            $rev->setContent($revision->getContent());
            $rev->setUser($revision->getUser());
            $rev->setText($copy);
            $em->persist($rev);
        }

        $event->setCopy($copy);
    }

    /**
     * @DI\Observe("open_text")
     *
     * @param OpenResourceEvent $event
     */
    public function onOpen(OpenResourceEvent $event)
    {
        $text = $event->getResource();
        $collection = new ResourceCollection(array($text->getResourceNode()));
        $isGranted = $this->container->get('security.context')->isGranted('WRITE', $collection);
        $revisionRepo = $this->container->get('doctrine.orm.entity_manager')
            ->getRepository('ClarolineCoreBundle:Resource\Revision');
        $content = $this->container->get('templating')->render(
            'ClarolineCoreBundle:Text:index.html.twig',
            array(
                'text' => $revisionRepo->getLastRevision($text)->getContent(),
                '_resource' => $text,
                'isEditGranted' => $isGranted
            )
        );
        $response = new Response($content);
        $event->setResponse($response);
        $event->stopPropagation();
    }

    /**
     * @DI\Observe("delete_text")
     *
     * @param DeleteResourceEvent $event
     */
    public function onDelete(DeleteResourceEvent $event)
    {
        $event->stopPropagation();
    }

    /**
     * @DI\Observe("resource_text_to_template")
     *
     * @param ExportResourceTemplateEvent $event
     */
    public function onExportTemplate(ExportResourceTemplateEvent $event)
    {
        $text = $event->getResource();
        $revisionRepo = $this->container->get('doctrine.orm.entity_manager')
            ->getRepository('ClarolineCoreBundle:Resource\Revision');
        $config['text'] = $revisionRepo->getLastRevision($text)->getContent();
        $event->setConfig($config);
        $event->stopPropagation();
    }

    /**
     * @DI\Observe("resource_text_from_template")
     *
     * @param ImportResourceTemplateEvent $event
     */
    public function onImportTemplate(ImportResourceTemplateEvent $event)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $user = $event->getUser();
        $text = new Text();
        $em->persist($text);
        $config = $event->getConfig();
        $revision = new Revision();
        $revision->setContent($config['text']);
        $revision->setUser($user);
        $revision->setText($text);
        $em->persist($revision);
        $event->setResource($text);
        $event->stopPropagation();
    }
}
