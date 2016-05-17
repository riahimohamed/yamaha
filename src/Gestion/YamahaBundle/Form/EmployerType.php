<?php

namespace Gestion\YamahaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmployerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('cin', 'text')
            ->add('embauche','date')
            ->add('finContrat', 'date')
            ->add('salair', 'integer')
            ->add('grade', 'choice', array(
                'choices' => array('1' => 'ingénieur',
                                    '2' => 'technicien',
                                    '3' => 'Ouvrier')
            ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\YamahaBundle\Entity\Employer'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gestion_yamahabundle_employertype';
    }
}
