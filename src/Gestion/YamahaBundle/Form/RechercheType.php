<?php

namespace Gestion\YamahaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RechercheType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('recherche', 'text');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gestion_yamahabundle_recherche';
    }
}
