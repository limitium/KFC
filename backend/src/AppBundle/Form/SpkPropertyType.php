<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SpkPropertyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('createuser')
            ->add('createdate')
            ->add('modifyuser')
            ->add('modifydate')
            ->add('accountmanagerid')
            ->add('export')
            ->add('kfObject')
            ->add('spkAddressid')
            ->add('importsource')
            ->add('competitorObject')
            ->add('webaddress')
            ->add('regionObject')
            ->add('oldid')
            ->add('gpsId')
            ->add('investmentPl')
            ->add('investment')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SpkProperty',
            'csrf_protection' => false
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return '';
    }
}
