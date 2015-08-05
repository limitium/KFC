<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/5/2015
 * Time: 11:37 PM
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class SpkLandlordsType extends AbstractType
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
            ->add('spkLandlordsid')
            ->add('spkPropertyid')
            ->add('accountid')
            ->add('contactid')
            ->add('primaryContact')
            ->add('contactType')
            ->add('partOwned')
            ->add('startdate')
            ->add('enddate')
            ->add('currentContact');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SpkLandlords',
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