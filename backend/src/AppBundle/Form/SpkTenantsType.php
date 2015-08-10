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
            ->add("spkTenantsid")
            ->add("spkPropertyid")
            ->add("createuser")
            ->add("createdate")
            ->add("modifyuser")
            ->add("modifydate")
            ->add("accountid")
            ->add("contactid")
            ->add("currentContact")
            ->add("contactType")
            ->add("startdate")
            ->add("enddate")
            ->add("area")
            ->add("period")
            ->add("rentalrate")
            ->add("opexrate")
            ->add("opexinclude")
            ->add("opexcur")
            ->add("vat")
            ->add("vatinclude")
            ->add("indexation")
            ->add("deposit")
            ->add("parkinglots")
            ->add("parkingrate")
            ->add("parkingcur")
            ->add("workplaces")
            ->add("comments")
            ->add("breakoption")
            ->add("autoprolong")
            ->add("rightsublease")
            ->add("reminder")
            ->add("manactivityid")
            ->add("consactivityid")
            ->add("penalties")
            ->add("rentalcur")
            ->add("smallAddress");
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SpkTenants',
            'csrf_protection' => false
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tenants';
    }
}