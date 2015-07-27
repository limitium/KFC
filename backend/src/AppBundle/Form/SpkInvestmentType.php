<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SpkInvestmentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('spkPropertyid')
            ->add('createuser')
            ->add('createdate')
            ->add('modifyuser')
            ->add('modifydate')
            ->add('seccodeid')
            ->add('id')
            ->add('nameRus')
            ->add('nameEng')
            ->add('propertyType')
            ->add('status')
            ->add('comments')
            ->add('updated')
            ->add('segment');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SpkInvestment',
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
