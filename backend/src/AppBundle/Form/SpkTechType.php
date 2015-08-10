<?php


namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class SpkTechType extends AbstractType
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
            ->add("salePerBlock")
            ->add("class")
            ->add("fitOut")
            ->add("buildingStatus")
            ->add("complYear")
            ->add("reconstrYear")
            ->add("leaseStatus")
            ->add("individualSale")
            ->add("groundSqm")
            ->add("ugroundSqm")
            ->add("officeSqm")
            ->add("retailSqm")
            ->add("industrialSqm")
            ->add("floor")
            ->add("ufloor")
            ->add("groundParking")
            ->add("ugroundParking")
            ->add("multilevelParking")
            ->add("landGa")
            ->add("landOwnerType")
            ->add("landLeaseTerm");
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'appbundle\Form\TechDTO',
            'csrf_protection' => false
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tech';
    }
}