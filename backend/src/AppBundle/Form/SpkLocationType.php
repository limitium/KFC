<?php


namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class SpkLocationType extends AbstractType
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
            ->add('metro', new SpkMetroType())
            ->add('investLocation', new SpkInvestLocationType())
            ->add('city', new ListItemType())
            ->add('oblast', new ListItemType())
            ->add('district')
            ->add('distanceMkad')
            ->add('street', new ListItemType())
            ->add('streetType')
            ->add('dom')
            ->add('korpus')
            ->add('stroenie')
            ->add('drob')
            ->add('investRing');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Form\LocationDTO',
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