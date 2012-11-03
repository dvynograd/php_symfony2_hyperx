<?php

namespace Kingston\HyperxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('content')
            ->add('date')
            ->add('is_active')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kingston\HyperxBundle\Entity\News'
        ));
    }

    public function getName()
    {
        return 'kingston_hyperxbundle_newstype';
    }
}
