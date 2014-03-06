<?php

namespace Claroline\CoreBundle\Form\Field;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Claroline\CoreBundle\Form\DataTransformer\JavascriptSafeTransformer;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service("claroline.form.tinymce")
 * @DI\FormType(alias = "tinymce")
 */
class TinymceType extends TextareaType
{
    private $defaultAttributes = array(
        'class' => 'tinymce',
        'data-theme' => 'advanced'
    );

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new JavascriptSafeTransformer());
    }

    public function getName()
    {
        return 'tinymce';
    }

    public function getParent()
    {
        return 'textarea';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('attr' => $this->defaultAttributes));
        $resolver->setNormalizers(
            array(
                'attr' => function (Options $options, $value) {
                    return array_merge($this->defaultAttributes, $value);
                }
            )
        );

    }
}
