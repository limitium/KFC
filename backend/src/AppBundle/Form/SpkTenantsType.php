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


class SpkTenantsType extends AbstractType
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
            ->add('contactType', new ListItemType())
            ->add('primaryContact')
            ->add('currentContact')
            ->add('account', new ListItemType())
            ->add('contactDetail')
            ->add('startDate')
            ->add('endDate')
            ->add('area');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Form\TenantDTO',
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