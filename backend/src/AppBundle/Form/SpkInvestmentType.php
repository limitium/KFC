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
            ->add('id', 'text', array(
                'required' => false
            ))
            ->add('nameRus')
            ->add('propertyType')
            ->add('status')
//            ->add('segment')
//            ->add('landlords', 'collection', array(
//                'type' => new SpkLandlordsType(),
//                'allow_add' => true
//            ))
//            ->add('tenants', 'collection', array(
//                'type' => new SpkTenantsType(),
//                'allow_add' => true
//            ))
            ->add('blocks', 'collection', array(
                'type' => new SpkInvestBlocksType(),
                'allow_add' => true
            ))
//            ->add('encumbrances')
//            ->add('investSegments')
//            ->add('location', new SpkLocationType())
//            ->add('commerc', new SpkCommercType())
//            ->add('tech', new SpkTechType())
//            ->add('description', new SpkDescriptionType())
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SpkInvestment',
            'csrf_protection' => false,
            'allow_extra_fields' => true
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
