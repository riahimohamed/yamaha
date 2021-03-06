<?php

namespace Gestion\YamahaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StockType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantity', 'integer')
            ->add('modele', 'choice', array(
                'choices' => array(
                    '1' => 'bobine cuivre',
                    '2' => 'bobine laiton',
                    '3' => 'etain',
                    '4' => 'feuille de tole laiton',
                    '5' => 'feuille de tole acier',
                    '6' => 'etain en baguette',)
            ))
            ->add('nbrModele', 'integer');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\YamahaBundle\Entity\Stock'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gestion_yamahabundle_stocktype';
    }
}
